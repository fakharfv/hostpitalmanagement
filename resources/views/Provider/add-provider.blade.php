@extends('app')
@section('content')
<!-- Row start -->
<div class="row gutters">
    <div class="col-lg-10 col-sm-12">
        <form id="{{ !empty($provider)  ? 'provider-update' : 'provider-add' }}" method="POST" action="{{ !empty($provider) ?  route('provider.update', $provider->id) : route('provider.store') }}">
        @csrf
        @if(!empty($provider))
        @method('PUT')
        @endif
        <div class="card">
            <div class="card-header">
                <div class="card-title">{{ !empty($provider)? 'Edit Provider Details' : 'Enter Provider Details' }}</div>
            </div>
            <div class="card-body">
                <div class="row gutters">
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name', $provider->name ?? '') }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Full Name">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <span class="error-message" id="name-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="inputPmdc">Pmdc</label>
                                <input type="text" value="{{ old('pmdc', $provider->pmdc ?? '') }}" name="pmdc" class="form-control @error('pmdc') is-invalid @enderror" id="pmdc" placeholder="Enter PMDC">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <span class="error-message" id="pmdc-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="qualification">Qualification</label>
                                <input type="text" name="qualification" value="{{ old('qualification', $provider->qualification ?? '') }}" class="form-control @error('qualification') is-invalid @enderror" id="qualification" placeholder="Qualification">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <span class="error-message" id="qualification-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" value="{{ old('phone', $provider->phone ?? '') }}" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="e.g., 0301-2345678 or 021-1234567">
                                <small id="phoneHelp" class="form-text text-muted">Format: 03XX-XXXXXXX, 0XX-XXXXXXX, or (0XX) XXXXXXX</small>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <span class="error-message" id="phone-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="expiry_date">Expiry Date</label>
                                <input type="date" value="{{ old('expiry_date', $provider->expiry_date ?? '') }}" name="expiry_date" class="form-control @error('expiry_date') is-invalid @enderror" placeholder="Available Date">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <span class="error-message" id="expiry_date-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="available_days">Available Days</label>
                                <input type="date" name="available_days" value="{{ old('available_days', $provider->available_days ?? '') }}" class="form-control @error('available_days') is-invalid @enderror" placeholder="Available Date">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <span class="error-message" id="available_days-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="available_time">Available Time</label>
                                <input type="time" name="available_time" value="{{ old('available_time', $provider->available_time ?? '') }}" class="form-control @error('available_time') is-invalid @enderror" placeholder="Available Time">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <span class="error-message" id="available_time-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label for="address">Full Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="3" placeholder="Full Address">{{old('address', $provider->address ?? '') }}"
                                </textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <span class="error-message" id="address-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ !empty($provider)? "Update" : "Add" }} Provider</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Row end -->
@endsection
