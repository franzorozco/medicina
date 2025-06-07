<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="medical_record_id" class="form-label">{{ __('Medical Record Id') }}</label>
            <input type="text" name="medical_record_id" class="form-control @error('medical_record_id') is-invalid @enderror" value="{{ old('medical_record_id', $medicineDelivery?->medical_record_id) }}" id="medical_record_id" placeholder="Medical Record Id">
            {!! $errors->first('medical_record_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="medicine_id" class="form-label">{{ __('Medicine Id') }}</label>
            <input type="text" name="medicine_id" class="form-control @error('medicine_id') is-invalid @enderror" value="{{ old('medicine_id', $medicineDelivery?->medicine_id) }}" id="medicine_id" placeholder="Medicine Id">
            {!! $errors->first('medicine_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="quantity" class="form-label">{{ __('Quantity') }}</label>
            <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $medicineDelivery?->quantity) }}" id="quantity" placeholder="Quantity">
            {!! $errors->first('quantity', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="notes" class="form-label">{{ __('Notes') }}</label>
            <input type="text" name="notes" class="form-control @error('notes') is-invalid @enderror" value="{{ old('notes', $medicineDelivery?->notes) }}" id="notes" placeholder="Notes">
            {!! $errors->first('notes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>