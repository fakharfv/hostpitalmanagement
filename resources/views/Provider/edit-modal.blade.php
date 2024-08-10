
<form id="provider-add" method="PUT" action="{{ route('provider.update', $provider->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
    <div class="col-sm-6 col-12">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $provider->name }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Full Name">
            <span class="text-danger" id="name-error"></span>
        </div>
    </div>
    <div class="col-sm-6 col-12">
        <div class="form-group">
            <label for="inputPmdc">Pmdc</label>
            <input type="text" value="{{ $provider->pmdc }}" name="pmdc" class="form-control @error('pmdc') is-invalid @enderror" id="pmdc" placeholder="Enter PMDC">
            <span class="text-danger" id="pmdc-error"></span>
        </div>
    </div>
    <div class="col-sm-6 col-12">
        <div class="form-group">
            <label for="qualification">Qualification</label>
            <input type="text" name="qualification" value="{{ $provider->qualification }}" class="form-control @error('qualification') is-invalid @enderror" id="qualification" placeholder="Qualification">
            <span class="text-danger" id="qualification-error"></span>
        </div>
    </div>
    <div class="col-sm-6 col-12">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" value="{{ $provider->phone }}" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="e.g., 0301-2345678 or 021-1234567">
            <small id="phoneHelp" class="form-text text-muted">Format: 03XX-XXXXXXX, 0XX-XXXXXXX, or (0XX) XXXXXXX</small>
            <p class="text-danger" id="phone-error"></p>
        </div>
    </div>
    <div class="col-sm-4 col-12">
        <div class="form-group">
            <label for="expiry_date">Expiry Date</label>
            <input type="date" value="{{ $provider->expiry_date }}" name="expiry_date" class="form-control @error('expiry_date') is-invalid @enderror" placeholder="Available Date">
            <p class="text-danger" id="expiry_date-error"></p>
        </div>
    </div>
    <div class="col-sm-4 col-12">
        <div class="form-group">
            <label for="available_days">Available Days</label>
            <input type="date" name="available_days" value="{{ $provider->available_days }}" class="form-control @error('available_days') is-invalid @enderror" placeholder="Available Date">
                <p class="text-danger" id="available_days-error"></p>
        </div>
    </div>
    <div class="col-sm-4 col-12">
        <div class="form-group">
            <label for="available_time">Available Time</label>
            <input type="time" name="available_time" value="{{ $provider->available_time }}" class="form-control @error('available_time') is-invalid @enderror" placeholder="Available Time">
            @error('available_time')
                <p class="text-danger"></p>
            @enderror
        </div>
    </div>
    <div class="col-sm-12 col-12">
        <div class="form-group">
            <label for="address">Full Address</label>
            <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="3" placeholder="Full Address">{{ $provider->address }}
            </textarea>
            @error('address')
                <p class="text-danger"></p>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="text-end mt-2">
            <button type="submit" class="btn btn-primary">Update Provider</button>
        </div>
    </div>
    </div>
</form>
