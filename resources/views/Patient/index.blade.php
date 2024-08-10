@extends('app')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title">Patient Listing</h5>
        <div>
          <a href="" class="btn btn-primary" id="pat-add-btn">+ Add Patient</a>
        </div>
      </div>
<div class="col-8 offset-2 my-4">
    <form id="patient-form" method="POST" action="{{ route('patient.filterPatient') }}">
    @csrf
    <div class="row gutters">
            <div class="col-sm-6 col-12">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" value="" class="form-control" id="firstName" placeholder="first name">
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" value="" class="form-control" id="lastName" placeholder="last name">
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="form-group">
                    <label for="cnic">CNIC ID</label>
                    <input type="text" name="cnic" class=" form-control" id="cnic" value="" placeholder="XXXXX-XXXXXXX-X" maxlength="15">
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" value="" class="form-control" id="phone" placeholder="e.g., 0301-2345678 or 021-1234567">
                </div>
            </div>
    </div>
    <div class="my-3 d-flex justify-content-center">
        <button type="submit" id="submit-patient-filter" class="btn btn-primary btn-sm">Filter Patients</button>
    </div>
</form>
</div>
@include('global.loader')

<div class="table-responsive my-5 p-3" id="pat-table">
    <table class="table table-bordered" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;" id="patient-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>CNIC</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>
</div>
<!-- Modal -->
<div class="modal fade" id="pat-add-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Patient Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row gutters">
                <div class="col-lg-12 col-sm-12">
                        <form id="patient-add" method="POST" action="{{ route('patient.store') }}" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">
                            <p>All Field with (<span class="text-danger">*</span>) are required</p>
                            <div class="row gutters">
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="firstName">First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="first_name"  value="{{ old('first_name') }}"  class="form-control" id="first_name" placeholder="first name">
                                        <div>
                                            <span class="error-message text-danger" id="first_name-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="lastName">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" id="last_name" placeholder="last name">
                                        <div>
                                            <span class="error-message text-danger" id="last_name-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <label for="gender">Gender</label>
                                    <select name="gender" value="{{ old('gender') }}" class="form-control">
                                        <option class="form-control" selected>Male</option>
                                        <option class="form-control">Female</option>
                                        <option class="form-control">Other</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="dob">Dob <span class="text-danger">*</span></label>
                                        <input type="date" name="dob" value="{{ old('dob') }}" id="dob" class="form-control" placeholder="Date Limit">
                                        <div>
                                            <span class="error-message text-danger" id="dob-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="last name">
                                        <div>
                                            <span class="error-message text-danger" id="email-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="phoNe">Phone</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="e.g., 0301-2345678 or 021-1234567">
                                        <small id="phoneHelp" class="form-text text-muted">Format: 03XX-XXXXXXX, 0XX-XXXXXXX, or (0XX) XXXXXXX</small>
                                        <div id="phoneError" class="invalid-feedback">
                                            Invalid phone number format. Please follow the specified formats.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="patID">Cnic ID <span class="text-danger">*</span></label>
                                        <input type="text" name="cnic" class="form-control" id="cnic" value="{{ old('cnic') }}" placeholder="XXXXX-XXXXXXX-X" maxlength="15">
                                        <div>
                                            <span class="error-message text-danger" id="cnic-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="occupation">Occupation</label>
                                        <input type="text" name="occupation" value="{{ old('occupation') }}" class="form-control" id="occupation" placeholder="last name">

                                    </div>
                                </div>

                                <div class="col-sm-2 col-8">
                                    <div class="form-group">
                                        <label for="wardNo">Word No</label>
                                        <input type="text" name="ward_no" value="{{ old('ward_no') }}" class="form-control" id="ward_no" placeholder="Age">

                                    </div>
                                </div>
                                <div class="col-sm-2 col-8">
                                    <div class="form-group">
                                        <label for="bedNo">Bed No</label>
                                        <input type="text" name="bed_no" value="{{ old('bed_no') }}" class="form-control" id="bed_no" placeholder="Bed No">

                                    </div>
                                </div>
                                <div class="col-sm-4 col-8">
                                    <div class="form-group">
                                        <label for="addvPayement">Advanced Payment</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rs</span>
                                            </div>
                                            <input type="number" placeholder="0.00" name="advanced_payment" value="{{ old('advanced_payment') }}" class="form-control" id="advanced_payment" placeholder="payement">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-8">
                                    <div class="form-group">
                                        <label for="decimal-input">Due Payment</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">Rs</span>
                                          </div>
                                          <input type="text" name="due_payment" value="{{ old('due_payment') }}" class="form-control" id="due_payment" name="duePayment" pattern="[0-9]+(\.[0-9]{1,2})?" oninput="this.value = this.value.replace(/[^\d\.]/g, '').replace(/(\d+)\.(\d+)/, '$1.$2').replace(/\./, '.$++').trim()">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="attendedName">Attended Name</label>
                                        <input type="text" name="attended_name" value="{{ old('attended_name') }}" class="form-control" id="attended_name" placeholder="medical@bm.com">

                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="attendedPhone">Attended Phone</label>
                                        <input type="text" name="attended_phone" value="{{ old('attended_phone') }}" class="form-control" id="attended_phone" placeholder="medical@bm.com">

                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="nok">NOK</label>
                                        <input type="text" name="nok" value="{{ old('nok') }}" class="form-control" id="nok" placeholder="NOK">

                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="nokName">NOK Name</label>
                                        <input type="text" name="nok_name" value="{{ old('nok_name') }}" class="@error('nok_name') is-invalid @enderror form-control" id="nokName" placeholder="NOK Name">

                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="addreSs">Address</label>
                                        <textarea name="address" class="@error('address') is-invalid @enderror form-control" id="addreSs" rows="3" placeholder="Current Address">{{ old('address') }}</textarea>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="patientHistory">Patient History</label>
                                        <textarea name="patient_history" class="@error('patient_history') is-invalid @enderror form-control" id="biO" rows="3" placeholder="Patient History">{{ old('patient_history') }}</textarea>

                                    </div>
                                </div>
                                <div class="modal-footer mt-1">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>


@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#patient-table").dataTable().fnDestroy();
        var customLoaderHtml = $('#custom-loader').html();
        var table = $('#patient-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('patient.list') }}",
            language: {
                processing: customLoaderHtml
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'first_name', name: 'first_name' },
                { data: 'cnic', name: 'cnic' },
                { data: 'phone', name: 'phone' },
                { data: 'address', name: 'address' }
            ],
        });

        $('#patient-form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);

        var submitButton = form.find('button[type="submit"]');
        submitButton.prop('disabled', true);
        submitButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Filtering...');

        $('#pat-table').attr('hidden', false);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(response) {
                console.log('Server Response:', response); // Debug log
                    $('#patient-form')[0].reset();
                    // table.ajax.reload(); // Reload DataTable data
                    table.ajax.reload(null, false);

                    submitButton.prop('disabled', false);
                    submitButton.html('Filter Patients');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
    });

</script>
<script>
    $('#pat-add-btn').on('click', function(e) {
        e.preventDefault();
        $('#modal-type').text('Add');
        // var modalHtml = {!! json_encode(view('Provider.add-modal')->render()) !!};
            // if (modalHtml.trim() !== '') {
                // $('#body-modal-data').html(modalHtml);
                $('#pat-add-modal').modal('show');
            // } else {
                // Handle the case when the modal HTML is empty
                console.error('Failed to render modal HTML');
            // }
    });

    $(document).on('submit', '#patient-add', function(event) {

event.preventDefault(); // Prevent the default form submission
var form = $(this);
    var submitButton = form.find('button[type="submit"]');

    submitButton.prop('disabled', true);
    submitButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...');

var actionUrl = $('#patient-add').attr('action');

// Get form data
let formData = $('#patient-add').serialize();

// Send AJAX request
$.ajax({
data: formData,
url: actionUrl,
type: "POST",
dataType: 'json',
success: function (data) {

    $('#patient-add').trigger("reset");
    $('#pat-add-modal').modal('hide');
    table.draw();

},
error: function (data) {

    if (data.status === 422) {
        console.log(data);
            // Validation errors
        let errors = data.responseJSON.errors;
        displayErrors(errors);
        submitButton.prop('disabled', false);
        submitButton.html('Add Patient');
    } else {
        // Other errors

        submitButton.prop('disabled', false);
        submitButton.html('Submit');
    }
}
});
});


function displayErrors(errors) {
    // Clear previous error messages
    document.querySelectorAll('.error-message').forEach(function(element) {
        element.innerHTML = '';
    });

    // Display new error messages
    Object.keys(errors).forEach(function(key) {

        let errorMessage = errors[key][0];
        let errorElement = document.getElementById(key + '-error');
        console.log('error elemment'+errorElement)
        if (errorElement) {
            errorElement.innerHTML = errorMessage;
        }
    });
}
</script>

@endpush
@endsection
