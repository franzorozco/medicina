<?php

namespace App\Http\Controllers;

use App\Models\MedicineDelivery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MedicineDeliveryRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MedicineDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $medicineDeliveries = MedicineDelivery::paginate();

        return view('medicine-delivery.index', compact('medicineDeliveries'))
            ->with('i', ($request->input('page', 1) - 1) * $medicineDeliveries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $medicineDelivery = new MedicineDelivery();

        return view('medicine-delivery.create', compact('medicineDelivery'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicineDeliveryRequest $request): RedirectResponse
    {
        MedicineDelivery::create($request->validated());

        return Redirect::route('medicine-deliveries.index')
            ->with('success', 'MedicineDelivery created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $medicineDelivery = MedicineDelivery::find($id);

        return view('medicine-delivery.show', compact('medicineDelivery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $medicineDelivery = MedicineDelivery::find($id);

        return view('medicine-delivery.edit', compact('medicineDelivery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicineDeliveryRequest $request, MedicineDelivery $medicineDelivery): RedirectResponse
    {
        $medicineDelivery->update($request->validated());

        return Redirect::route('medicine-deliveries.index')
            ->with('success', 'MedicineDelivery updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        MedicineDelivery::find($id)->delete();

        return Redirect::route('medicine-deliveries.index')
            ->with('success', 'MedicineDelivery deleted successfully');
    }
}
