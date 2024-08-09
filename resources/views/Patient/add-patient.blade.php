@extends('app')
@section('content')

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-lg-10 col-sm-12">
            <div class="card">
                <form id="patient-add" method="POST" action="{{ route('patient.store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="card-header">
                    <div class="card-title">Patient Details</div>
                </div>
                <div class="card-body">
                    <p>All Field with (*) are required</p>
                    <div class="row gutters">
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="first_name"  value="{{ old('first_name') }}"  class="form-control @error('first_name') is-invalid @enderror" id="firstName" placeholder="first name">
                                @error('first_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" class="@error('last_name') is-invalid @enderror form-control" id="lastName" placeholder="last name">
                                @error('first_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
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
                                <label for="dob">Dob</label>
                                <input type="date" name="dob" value="{{ old('dob') }}" id="dob" class="@error('dob') is-invalid @enderror form-control" placeholder="Date Limit">
                                @error('dob')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror form-control" id="email" placeholder="last name">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
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
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="patID">Cnic ID</label>
                                <input type="text" name="cnic" class="@error('cnic') is-invalid @enderror form-control" id="cnicInput" value="{{ old('cnic') }}" placeholder="XXXXX-XXXXXXX-X" maxlength="15">
                                @error('cnic')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input type="text" name="occupation" value="{{ old('occupation') }}" class="@error('occupation') is-invalid @enderror form-control" id="occupation" placeholder="last name">
                                @error('occupation')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-2 col-8">
                            <div class="form-group">
                                <label for="wardNo">Word No</label>
                                <input type="text" name="ward_no" value="{{ old('ward_no') }}" class="@error('ward_no') is-invalid @enderror form-control" id="wordNo" placeholder="Age">
                                @error('ward_no')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-2 col-8">
                            <div class="form-group">
                                <label for="bedNo">Bed No</label>
                                <input type="text" name="bed_no" value="{{ old('bed_no') }}" class="@error('bed_no') is-invalid @enderror form-control" id="bedNo" placeholder="Bed No">
                                @error('bed_no')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-8">
                            <div class="form-group">
                                <label for="addvPayement">Advanced Payment</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rs</span>
                                    </div>
                                    <input type="number" placeholder="0.00" name="advanced_payment" value="{{ old('advanced_payment') }}" class="@error('advanced_payment') is-invalid @enderror form-control" id="addvPayement" placeholder="payement">

                                </div>
                                @error('advanced_payment')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-8">
                            <div class="form-group">
                                <label for="decimal-input">Due Payment</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Rs</span>
                                  </div>
                                  <input type="text" name="due_payment" value="{{ old('due_payment') }}" class="@error('due_payment') is-invalid @enderror form-control" id="duePayment" name="duePayment" pattern="[0-9]+(\.[0-9]{1,2})?" oninput="this.value = this.value.replace(/[^\d\.]/g, '').replace(/(\d+)\.(\d+)/, '$1.$2').replace(/\./, '.$++').trim()">

                                </div>
                                @error('due_payment')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="attendedName">Attended Name</label>
                                <input type="text" name="attended_name" value="{{ old('attended_name') }}" class="@error('attended_name') is-invalid @enderror form-control" id="attendedName" placeholder="medical@bm.com">
                                @error('attended_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="attendedPhone">Attended Phone</label>
                                <input type="text" name="attended_phone" value="{{ old('attended_phone') }}" class="@error('attended_phone') is-invalid @enderror form-control" id="attendedPhone" placeholder="medical@bm.com">
                                @error('attended_phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="nok">NOK</label>
                                <input type="text" name="nok" value="{{ old('nok') }}" class="@error('nok') is-invalid @enderror form-control" id="nok" placeholder="NOK">
                                @error('nok')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="nokName">NOK Name</label>
                                <input type="text" name="nok_name" value="{{ old('nok_name') }}" class="@error('nok_name') is-invalid @enderror form-control" id="nokName" placeholder="NOK Name">
                                @error('nok_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="addreSs">Address</label>
                                <textarea name="address" class="@error('address') is-invalid @enderror form-control" id="addreSs" rows="3" placeholder="Current Address">{{ old('address') }}</textarea>
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="patientHistory">Patient History</label>
                                <textarea name="patient_history" class="@error('patient_history') is-invalid @enderror form-control" id="biO" rows="3" placeholder="Patient History">{{ old('patient_history') }}</textarea>
                                @error('patient_history')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Create Profile</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->
    <script>
        document.getElementById('phone').addEventListener('input', function() {
            var phoneInput = this.value.replace(/\D/g, '');  // Remove non-digit characters
            var formattedInput = '';

            if (phoneInput.startsWith('03')) {
                if (phoneInput.length > 11) {
                    phoneInput = phoneInput.slice(0, 11);  // Restrict to 11 digits for mobile numbers
                }
                if (phoneInput.length > 4) {
                    formattedInput = phoneInput.slice(0, 4) + '-' + phoneInput.slice(4);
                } else {
                    formattedInput = phoneInput;
                }
            } else {
                if (phoneInput.length > 10) {
                    phoneInput = phoneInput.slice(0, 10);  // Restrict to 10 digits for landline numbers
                }
                if (phoneInput.length > 3) {
                    formattedInput = phoneInput.slice(0, 3) + '-' + phoneInput.slice(3);
                } else {
                    formattedInput = phoneInput;
                }
            }

            this.value = formattedInput;

            var phonePattern = /^(03\d{2}-\d{7})|(0\d{2}-\d{7})|(\(0\d{2}\) \d{7})$/;
            var phoneError = document.getElementById('phoneError');

            if (phonePattern.test(this.value)) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
                phoneError.style.display = 'none';
            } else {
                this.classList.remove('is-valid');
                this.classList.add('is-invalid');
                phoneError.style.display = 'block';
            }
        });

        document.getElementById('patient-add').addEventListener('submit', function(event) {
            var phoneInput = document.getElementById('phone').value;
            var phonePattern = /^(03\d{2}-\d{7})|(0\d{2}-\d{7})|(\(0\d{2}\) \d{7})$/;

            if (phoneInput !== '' && !phonePattern.test(phoneInput)) {
                event.preventDefault();
                document.getElementById('phone').classList.add('is-invalid');
                alert('Please enter a valid Pakistani phone number in the format 03XX-XXXXXXX, 0XX-XXXXXXX, or (0XX) XXXXXXX.');
            }
        });
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>

        <script>
            $(document).ready(function () {
              $('#cnicInput').on('input', function (e) {
                var cnic = $(this).val();
                var cursorPosition = this.selectionStart;
                var formattedCnic = '';

                // Check if input is not in the specified format, if so, correct it
                if (!/^(\d{5}-\d{7}-\d{1})$/.test(cnic)) {
                  // Remove any non-digit characters
                  cnic = cnic.replace(/\D/g, '');

                  // Insert dashes at appropriate positions
                  if (cnic.length > 5) {
                    formattedCnic = cnic.substr(0, 5) + '-' + cnic.substr(5, 7) + '-' + cnic.substr(12);
                  } else {
                    formattedCnic = cnic;
                  }

                  // Update input value with formatted CNIC
                  $(this).val(formattedCnic);
                }

                // Limit the input length to the specified format length
                if (cnic.length > 15) {
                  // Truncate input value to match the format length
                  $(this).val(cnic.substr(0, 15));
                }

                // Apply input mask
                $('#cnicInput').inputmask('99999-9999999-9');
              });
            });
          </script>
          <script>
            function previewImage(event) {
                var reader = new FileReader();
                reader.onload = function(){
                    var output = document.getElementById('imagePreview');
                    output.src = reader.result;
                    output.style.display = 'block';
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
@push('scripts')
@vite('resources/layouts.js.globalSwalAlert.js')
<script>

</script>
@endpush
@endsection
