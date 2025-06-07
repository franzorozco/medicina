<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MedicineRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $medicines = Medicine::paginate();

        return view('medicine.index', compact('medicines'))
            ->with('i', ($request->input('page', 1) - 1) * $medicines->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $medicine = new Medicine();

        return view('medicine.create', compact('medicine'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicineRequest $request): RedirectResponse
    {
        Medicine::create($request->validated());

        return Redirect::route('medicines.index')
            ->with('success', 'Medicine created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $medicine = Medicine::find($id);

        return view('medicine.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $medicine = Medicine::find($id);

        return view('medicine.edit', compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicineRequest $request, Medicine $medicine): RedirectResponse
    {
        $medicine->update($request->validated());

        return Redirect::route('medicines.index')
            ->with('success', 'Medicine updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Medicine::find($id)->delete();

        return Redirect::route('medicines.index')
            ->with('success', 'Medicine deleted successfully');
    }
}
