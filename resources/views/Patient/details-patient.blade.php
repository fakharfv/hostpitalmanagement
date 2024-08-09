@extends('app')
@section('content')
@push('styles')
<style>
    .carousel-inner {
  padding: 1em;
}
/* .card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
} */
.carousel-control-prev,
.carousel-control-next {
  background-color: #e1e1e1;
  width: 6vh;
  height: 6vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
@media (min-width: 768px) {
  .carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
  }
  .carousel-inner {
    display: flex;
  }
}
.card .img-wrapper {
    max-width: 100%;
    height: 13em;
    display: flex;
    justify-content: center;
    align-items: center;
}
.card img {
    max-height: 100%;
}
@media (max-width: 767px) {
  .card .img-wrapper {
    height: 17em;
  }
}

.health-card {
        background-color: #f8d7da;
        padding: 20px;
        border-radius: 10px;
        color: #721c24;
    }
    .health-card h5 {
        margin-bottom: 20px;
    }
    .health-card .row {
        margin-bottom: 10px;
    }
    .health-card .icon {
        font-size: 50px;
        text-align: center;
    }
    .icon img {
        width: 100%;
    }

    .appointment-card {
            background-color: #1a1a4e;
            color: #ffc0cb;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: auto;
            /* margin: auto; */
        }
        .appointment-card img {
            width: 50px;
            height: 50px;
            margin: 10px 0;
        }
</style>
@endpush
<div class="row">
    <nav class="mb-2">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="chart-tab" data-bs-toggle="tab" data-bs-target="#chart" type="button" role="tab" aria-controls="chart-tab" aria-selected="true">Chart</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile-tab" aria-selected="false">Demographic</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#visits" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Vitals</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#lab" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Lab</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#expenses" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Med Charges</button>
        </div>
    </nav>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="chart" role="tabpanel"
            aria-labelledby="chart-tab">
            <!-- Row start -->
            {{-- <p>history</p> --}}
            <div class="row gutters">

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="col-md-12 col-lg-12">
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="container mb-2">
                            <div class="health-card">
                                <div class="row">
                                    <div class="col-2 icon">
                                        <img src="{{ asset('assets/img/standing_person.png') }}" alt="Silhouette Icon">
                                    </div>
                                    <div class="col-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5>Height: 6'0"</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Weight: 178 lbs</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>BMI: 24.14</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5>Blood Pressure</h5>
                                                <p>Systolic: N/A</p>
                                                <p>Diastolic: N/A</p>
                                            </div>
                                            <div class="col-md-8">
                                                <h5>Smoking Status: Current some day smoker</h5>
                                                <p>(428341000124106)</p>
                                                <img class="smoking-icon" src="{{ asset('assets/img/smoking-icon-7.jpg') }}" width="60px" height="60px" alt="Smoking Icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-lg-12 col-sm-12 col-12 mb-2">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="card-title col-6">Visits</div>
                                        <div class="card-title col-6 text-end">
                                            <button class="btn btn-primary rounded">+ New Visit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleControls" class="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="appointment-card">
                                                            <p>WED 05/15/2024</p>
                                                            <p>Ankle Pain</p>
                                                            <img src="https://via.placeholder.com/50" alt="Document Icon">
                                                            <p>SIGNED OFF / NOT BILLED</p>
                                                            <p>MALIK</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="appointment-card">
                                                            <p>WED 05/15/2024</p>
                                                            <p>Ankle Pain</p>
                                                            <img src="https://via.placeholder.com/50" alt="Document Icon">
                                                            <p>SIGNED OFF / NOT BILLED</p>
                                                            <p>MALIK</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="appointment-card">
                                                            <p>WED 05/15/2024</p>
                                                            <p>Ankle Pain</p>
                                                            <img src="https://via.placeholder.com/50" alt="Document Icon">
                                                            <p>SIGNED OFF / NOT BILLED</p>
                                                            <p>MALIK</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="appointment-card">
                                                            <p>WED 05/15/2024</p>
                                                            <p>Ankle Pain</p>
                                                            <img src="https://via.placeholder.com/50" alt="Document Icon">
                                                            <p>SIGNED OFF / NOT BILLED</p>
                                                            <p>MALIK</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Top Doctors</div>
                                </div>
                                <div class="card-body">
                                    <div class="top-doctors-container">
                                        <div class="top-doctor">
                                            <img src="{{asset('img/user2.png')}}" class="avatar"
                                                alt="Best Admin Dashboard">
                                            <div class="doctor-details">
                                                <h6>Dr. Clive Williams</h6>
                                                <div class="doctor-score">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-blue"
                                                            role="progressbar"
                                                            style="width: 87%"
                                                            aria-valuenow="87" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="points">
                                                        <div class="left">Rank #1</div>
                                                        <div class="right">9,800 Ratings</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-doctor">
                                            <img src="{{asset('img/user3.png')}}" class="avatar"
                                                alt="Best Admin Dashboard">
                                            <div class="doctor-details">
                                                <h6>Dr. Levsmia</h6>
                                                <div class="doctor-score">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-blue"
                                                            role="progressbar"
                                                            style="width: 65%"
                                                            aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="points">
                                                        <div class="left">Rank #2</div>
                                                        <div class="right">7,500 Ratings</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-doctor">
                                            <img src="{{asset('img/user14.png')}}"
                                                class="avatar" alt="Best Admin Dashboard">
                                            <div class="doctor-details">
                                                <h6>Dr. Emma George</h6>
                                                <div class="doctor-score">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-pink"
                                                            role="progressbar"
                                                            style="width: 42%"
                                                            aria-valuenow="42" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="points">
                                                        <div class="left">Rank #3</div>
                                                        <div class="right">4,200 Ratings</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Messages</div>
                                </div>
                                <div class="card-body">
                                    <ul class="custom-messages">
                                        <li class="clearfix">
                                            <div class="customer">TB</div>
                                            <div class="delivery-details">
                                                <span class="badge">Appointment</span>
                                                <h5>Tom Bartholet</h5>
                                                <p>Your appointment with Dr. Kelly is confirmed
                                                    at 04:30 PM and your reference ID is
                                                    <b>TK556753</b>.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="customer secondary">DC</div>
                                            <div class="delivery-details">
                                                <span class="badge">Cancelled</span>
                                                <h5>Dale Colorado</h5>
                                                <p>We are pleased to inform that the following
                                                    ticket no.<b>TK217887</b> have been
                                                    cancelled.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Overall Ratings</div>
                                </div>
                                <div class="card-body">
                                    <div class="hospital-ratings">
                                        <div class="total-ratings">
                                            <h2>4.5</h2>
                                            <div class="rating-stars">
                                                <div id="rate1"></div>
                                            </div>
                                        </div>
                                        <div class="ratings-list-container">
                                            <div class="ratings-list">
                                                <div class="rating-level">5.0</div>
                                                <div class="rating-stars">
                                                    <div class="rateA"></div>
                                                </div>
                                                <div class="total">
                                                    8,500 <span class="percentage">65%</span>
                                                </div>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="rating-level">4.0</div>
                                                <div class="rating-stars">
                                                    <div class="rateB"></div>
                                                </div>
                                                <div class="total">
                                                    3,500 <span class="percentage">20%</span>
                                                </div>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="rating-level">3.0</div>
                                                <div class="rating-stars">
                                                    <div class="rateC"></div>
                                                </div>
                                                <div class="total">
                                                    1,400 <span class="percentage">15%</span>
                                                </div>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="rating-level">2.0</div>
                                                <div class="rating-stars">
                                                    <div class="rateD"></div>
                                                </div>
                                                <div class="total">
                                                    300 <span class="percentage">05%</span>
                                                </div>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="rating-level">1.0</div>
                                                <div class="rating-stars">
                                                    <div class="rateE"></div>
                                                </div>
                                                <div class="total">
                                                    75 <span class="percentage">03%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
            </div>

            <!-- Row end -->
        </div>
        <div class="tab-pane fade show" id="profile" role="tabpanel"
            aria-labelledby="profile-tab">
            <!-- Row start -->
            <!-- Row start -->
<div class="row gutters">
<form name="patient-add" id="patient-add" method="post" action="{{ route('patient.store') }}">
    @csrf
<div class="col-lg-12 col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Patient Details</div>
        </div>
        <div class="card-body">
            <p>All Field with (*) are required</p>
            <div class="row gutters">
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" name="first_name"  value="{{ $patient->first_name }}"  class="form-control @error('first_name') is-invalid @enderror" id="firstName" placeholder="first name">
                        @error('first_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" name="last_name" value="{{ $patient->last_name }}" class="@error('last_name') is-invalid @enderror form-control" id="lastName" placeholder="last name">
                        @error('first_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <label for="gender">Gender</label>
                    <select name="gender" value="{{ $patient->gender }}" class="form-control">
                        <option class="form-control" {{ $patient->gender === "Male" ? "selected" : ""}}>Male</option>
                        <option class="form-control" {{ $patient->gender === "Female" ? "selected" : ""}}>Female</option>
                        <option class="form-control" {{ $patient->gender === "Other" ? "selected" : ""}}>Other</option>
                    </select>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="dob">Dob</label>
                        <input type="date" name="dob" value="{{ $patient->dob }}" id="dob" class="@error('dob') is-invalid @enderror form-control" placeholder="Date Limit">
                        @error('dob')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{ $patient->email }}" class="@error('email') is-invalid @enderror form-control" id="email" placeholder="last name">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="phoNe">Phone</label>
                        <input type="text" name="phone" value="{{ $patient->phone }}" class="@error('phone') is-invalid @enderror form-control" id="phoNe"  placeholder="Phone">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="patID">Cnic ID</label>
                        <input type="text" name="cnic" value="{{ $patient->cnic }}" class="@error('cnic') is-invalid @enderror form-control" id="patID" placeholder="ID">
                        @error('cnic')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" name="occupation" value="{{ $patient->occupation }}" class="@error('occupation') is-invalid @enderror form-control" id="occupation" placeholder="last name">
                        @error('occupation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-2 col-8">
                    <div class="form-group">
                        <label for="wardNo">Word No</label>
                        <input type="text" name="ward_no" value="{{ $patient->ward_no }}" class="@error('ward_no') is-invalid @enderror form-control" id="wordNo" placeholder="Age">
                        @error('ward_no')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2 col-8">
                    <div class="form-group">
                        <label for="bedNo">Bed No</label>
                        <input type="text" name="bed_no" value="{{ $patient->bed_no }}" class="@error('bed_no') is-invalid @enderror form-control" id="bedNo" placeholder="Bed No">
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
                            <input type="number" placeholder="0.00" name="advanced_payment" value="{{ $patient->advanced_payment }}" class="@error('advanced_payment') is-invalid @enderror form-control" id="addvPayement" placeholder="payement">

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
                          <input type="text" name="due_payment" value="{{ $patient->due_payment }}" class="@error('due_payment') is-invalid @enderror form-control" id="duePayment" name="duePayment" pattern="[0-9]+(\.[0-9]{1,2})?" oninput="this.value = this.value.replace(/[^\d\.]/g, '').replace(/(\d+)\.(\d+)/, '$1.$2').replace(/\./, '.$++').trim()">

                        </div>
                        @error('due_payment')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="attendedName">Attended Name</label>
                        <input type="text" name="attended_name" value="{{ $patient->attended_name }}" class="@error('attended_name') is-invalid @enderror form-control" id="attendedName" placeholder="medical@bm.com">
                        @error('attended_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="attendedPhone">Attended Phone</label>
                        <input type="text" name="attended_phone" value="{{ $patient->attended_phone }}" class="@error('attended_phone') is-invalid @enderror form-control" id="attendedPhone" placeholder="medical@bm.com">
                        @error('attended_phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="nok">NOK</label>
                        <input type="text" name="nok" value="{{ $patient->nok }}" class="@error('nok') is-invalid @enderror form-control" id="nok" placeholder="NOK">
                        @error('nok')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="form-group">
                        <label for="nokName">NOK Name</label>
                        <input type="text" name="nok_name" value="{{ $patient->nok_name }}" class="@error('nok_name') is-invalid @enderror form-control" id="nokName" placeholder="NOK Name">
                        @error('nok_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <label for="addreSs">Address</label>
                        <textarea name="address" value="{{ $patient->address }}" class="@error('address') is-invalid @enderror form-control" id="addreSs" rows="3" placeholder="Current Address"></textarea>
                        @error('address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <label for="patientHistory">Patient History</label>
                        <textarea name="patient_history" value="{{ $patient->patient_history }}" class="@error('patient_history') is-invalid @enderror form-control" id="biO" rows="3" placeholder="Patient History"></textarea>
                        @error('patient_history')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="text-end mt-2">
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
            <!-- Row end -->
        </div>
        <div class="tab-pane fade" id="visits" role="tabpanel" aria-labelledby="visits-tab">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                    <form>
                        <div class="card m-0">
                            <div class="card-header">
                                <div class="card-title">Contact Us</div>
                                <ul class="text-muted custom">
                                    <li>* Custom form controls and selects are also supported.
                                    </li>
                                    <li>* You can then remix that once again with size-specific
                                        column classes.</li>
                                    <li>* Group checkboxes or radios on the same horizontal row
                                        by adding .form-check-inline to any
                                        .form-check.</li>
                                </ul>
                            </div>
                            <div class="card-body">

                                <div class="row gutters">
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="inputName"
                                                class="col-form-label">Name</label>
                                            <input type="text" class="form-control"
                                                id="inputName" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-form-label">Your
                                                E-mail</label>
                                            <input type="email" class="form-control"
                                                id="inputEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMobNumber"
                                                class="col-form-label">Mobile</label>
                                            <input type="number" class="form-control"
                                                id="inputMobNumber" placeholder="Mobile">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="inputSubject"
                                                class="col-form-label">Subject</label>
                                            <input type="text" class="form-control"
                                                id="inputSubject" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage"
                                                class="col-form-label">Your Message</label>
                                            <textarea class="form-control" id="inputMessage"
                                                placeholder="Message" maxlength="140"
                                                rows="4"></textarea>
                                            <div class="form-text text-muted">
                                                <p id="characterLeft" class="help-block ">140
                                                    characters left</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row gutters">
                                    <div class="col-xl-12">
                                        <button type="button" id="submit" name="submit"
                                            class="btn btn-primary float-right">Submit
                                            Form</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="lab" role="tabpanel" aria-labelledby="lab-tab">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                    <form>
                        <div class="card m-0">
                            <div class="card-header">
                                <div class="card-title">Contact Us</div>
                                <ul class="text-muted custom">
                                    <li>* Custom form controls and selects are also supported.
                                    </li>
                                    <li>* You can then remix that once again with size-specific
                                        column classes.</li>
                                    <li>* Group checkboxes or radios on the same horizontal row
                                        by adding .form-check-inline to any
                                        .form-check.</li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="inputName"
                                                class="col-form-label">Name</label>
                                            <input type="text" class="form-control"
                                                id="inputName" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-form-label">Your
                                                E-mail</label>
                                            <input type="email" class="form-control"
                                                id="inputEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMobNumber"
                                                class="col-form-label">Mobile</label>
                                            <input type="number" class="form-control"
                                                id="inputMobNumber" placeholder="Mobile">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="inputSubject"
                                                class="col-form-label">Subject</label>
                                            <input type="text" class="form-control"
                                                id="inputSubject" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage"
                                                class="col-form-label">Your Message</label>
                                            <textarea class="form-control" id="inputMessage"
                                                placeholder="Message" maxlength="140"
                                                rows="4"></textarea>
                                            <div class="form-text text-muted">
                                                <p id="characterLeft" class="help-block ">140
                                                    characters left</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row gutters">
                                    <div class="col-xl-12">
                                        <button type="button" id="submit" name="submit"
                                            class="btn btn-primary float-right">Submit
                                            Form</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="expenses" role="tabpanel" aria-labelledby="expenses-tab">
            <div class="row gutters">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="medCharges" class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="patient-row" style="cursor: pointer;">
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls"
);
if (window.matchMedia("(min-width: 768px)").matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false,
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#carouselExampleControls .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition += cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#carouselExampleControls .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}
</script>
<script>

</script>
@endpush
@endsection
