@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">{{ __('messages.create') }} {{ __('messages.movements') }}</h2>
    <form action="{{ route('movements.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id" class="form-label fw-bold">{{ __('messages.id') }} <span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id', $movements->id ?? '') }}" required placeholder="{{ __('messages.id_placeholder') }}">
            @error('id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="vehicle_id" class="form-label fw-bold">{{ __('messages.vehicle_id') }} <span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('vehicle_id') is-invalid @enderror" name="vehicle_id" value="{{ old('vehicle_id', $movements->vehicle_id ?? '') }}" required placeholder="{{ __('messages.vehicle_id_placeholder') }}">
            @error('vehicle_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="departure_time" class="form-label fw-bold">{{ __('messages.departure_time') }} </label>
            <input type="datetime-local" class="form-control @error('departure_time') is-invalid @enderror" name="departure_time" value="{{ old('departure_time', $movements->departure_time ?? '') }}"  placeholder="{{ __('messages.departure_time_placeholder') }}">
            @error('departure_time')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="arrival_time" class="form-label fw-bold">{{ __('messages.arrival_time') }} </label>
            <input type="datetime-local" class="form-control @error('arrival_time') is-invalid @enderror" name="arrival_time" value="{{ old('arrival_time', $movements->arrival_time ?? '') }}"  placeholder="{{ __('messages.arrival_time_placeholder') }}">
            @error('arrival_time')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="employee_id" class="form-label fw-bold">{{ __('messages.employee_id') }} <span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('employee_id') is-invalid @enderror" name="employee_id" value="{{ old('employee_id', $movements->employee_id ?? '') }}" required placeholder="{{ __('messages.employee_id_placeholder') }}">
            @error('employee_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="from_center_id" class="form-label fw-bold">{{ __('messages.from_center_id') }} <span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('from_center_id') is-invalid @enderror" name="from_center_id" value="{{ old('from_center_id', $movements->from_center_id ?? '') }}" required placeholder="{{ __('messages.from_center_id_placeholder') }}">
            @error('from_center_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="to_center_id" class="form-label fw-bold">{{ __('messages.to_center_id') }} <span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('to_center_id') is-invalid @enderror" name="to_center_id" value="{{ old('to_center_id', $movements->to_center_id ?? '') }}" required placeholder="{{ __('messages.to_center_id_placeholder') }}">
            @error('to_center_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="center_id" class="form-label fw-bold">{{ __('messages.center_id') }} <span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('center_id') is-invalid @enderror" name="center_id" value="{{ old('center_id', $movements->center_id ?? '') }}" required placeholder="{{ __('messages.center_id_placeholder') }}">
            @error('center_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="created_at" class="form-label fw-bold">{{ __('messages.created_at') }} </label>
            <input type="datetime-local" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{ old('created_at', $movements->created_at ?? '') }}"  placeholder="{{ __('messages.created_at_placeholder') }}">
            @error('created_at')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="updated_at" class="form-label fw-bold">{{ __('messages.updated_at') }} </label>
            <input type="datetime-local" class="form-control @error('updated_at') is-invalid @enderror" name="updated_at" value="{{ old('updated_at', $movements->updated_at ?? '') }}"  placeholder="{{ __('messages.updated_at_placeholder') }}">
            @error('updated_at')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="deleted_at" class="form-label fw-bold">{{ __('messages.deleted_at') }} </label>
            <input type="datetime-local" class="form-control @error('deleted_at') is-invalid @enderror" name="deleted_at" value="{{ old('deleted_at', $movements->deleted_at ?? '') }}"  placeholder="{{ __('messages.deleted_at_placeholder') }}">
            @error('deleted_at')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="user_id" class="form-label fw-bold">{{ __('messages.user_id') }} <span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id', $movements->user_id ?? '') }}" required placeholder="{{ __('messages.user_id_placeholder') }}">
            @error('user_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
    </form>
</div>
@endsection
