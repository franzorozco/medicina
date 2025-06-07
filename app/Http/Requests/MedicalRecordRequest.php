<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalRecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'patient_id' => 'required',
			'doctor_id' => 'required',
			'record_date' => 'required',
			'reason' => 'string',
			'diagnosis' => 'string',
			'treatment' => 'string',
			'recommendations' => 'string',
        ];
    }
}
