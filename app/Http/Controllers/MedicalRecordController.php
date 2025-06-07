<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MedicalRecordRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $medicalRecords = MedicalRecord::paginate();

        return view('medical-record.index', compact('medicalRecords'))
            ->with('i', ($request->input('page', 1) - 1) * $medicalRecords->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $medicalRecord = new MedicalRecord();

        return view('medical-record.create', compact('medicalRecord'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicalRecordRequest $request): RedirectResponse
    {
        MedicalRecord::create($request->validated());

        return Redirect::route('medical-records.index')
            ->with('success', 'MedicalRecord created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $medicalRecord = MedicalRecord::find($id);

        return view('medical-record.show', compact('medicalRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $medicalRecord = MedicalRecord::find($id);

        return view('medical-record.edit', compact('medicalRecord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicalRecordRequest $request, MedicalRecord $medicalRecord): RedirectResponse
    {
        $medicalRecord->update($request->validated());

        return Redirect::route('medical-records.index')
            ->with('success', 'MedicalRecord updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        MedicalRecord::find($id)->delete();

        return Redirect::route('medical-records.index')
            ->with('success', 'MedicalRecord deleted successfully');
    }
}
