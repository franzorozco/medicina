<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="patient_id" class="form-label">{{ __('Patient Id') }}</label>
            <input type="text" name="patient_id" class="form-control @error('patient_id') is-invalid @enderror" value="{{ old('patient_id', $medicalRecord?->patient_id) }}" id="patient_id" placeholder="Patient Id">
            {!! $errors->first('patient_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="doctor_id" class="form-label">{{ __('Doctor Id') }}</label>
            <input type="text" name="doctor_id" class="form-control @error('doctor_id') is-invalid @enderror" value="{{ old('doctor_id', $medicalRecord?->doctor_id) }}" id="doctor_id" placeholder="Doctor Id">
            {!! $errors->first('doctor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="record_date" class="form-label">{{ __('Record Date') }}</label>
            <input type="text" name="record_date" class="form-control @error('record_date') is-invalid @enderror" value="{{ old('record_date', $medicalRecord?->record_date) }}" id="record_date" placeholder="Record Date">
            {!! $errors->first('record_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="reason" class="form-label">{{ __('Reason') }}</label>
            <input type="text" name="reason" class="form-control @error('reason') is-invalid @enderror" value="{{ old('reason', $medicalRecord?->reason) }}" id="reason" placeholder="Reason">
            {!! $errors->first('reason', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="diagnosis" class="form-label">{{ __('Diagnosis') }}</label>
            <input type="text" name="diagnosis" class="form-control @error('diagnosis') is-invalid @enderror" value="{{ old('diagnosis', $medicalRecord?->diagnosis) }}" id="diagnosis" placeholder="Diagnosis">
            {!! $errors->first('diagnosis', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="treatment" class="form-label">{{ __('Treatment') }}</label>
            <input type="text" name="treatment" class="form-control @error('treatment') is-invalid @enderror" value="{{ old('treatment', $medicalRecord?->treatment) }}" id="treatment" placeholder="Treatment">
            {!! $errors->first('treatment', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="recommendations" class="form-label">{{ __('Recommendations') }}</label>
            <input type="text" name="recommendations" class="form-control @error('recommendations') is-invalid @enderror" value="{{ old('recommendations', $medicalRecord?->recommendations) }}" id="recommendations" placeholder="Recommendations">
            {!! $errors->first('recommendations', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>