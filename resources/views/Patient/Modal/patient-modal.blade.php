<!-- Modal -->
<div class="modal fade" data-backdrop="static" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-md-12 col-sm-12 col-12">

                        <div class="custom-tabs-container">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="history-tab" data-toggle="tab" href="#history"
                                        role="tab" aria-controls="history" aria-selected="true">History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="true">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="visits-tab" data-toggle="tab" href="#visits" role="tab"
                                        aria-controls="visits" aria-selected="false">Vitals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="lab-tab" data-toggle="tab" href="#lab" role="tab"
                                        aria-controls="lab" aria-selected="false">Lab</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="expenses-tab" data-toggle="tab" href="#expenses" role="tab"
                                        aria-controls="expenses" aria-selected="false">Med Charges</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="history" role="tabpanel"
                                    aria-labelledby="history-tab">
                                    <!-- Row start -->
                                    <p>history</p>
                                    <div class="row gutters">
                                        <div class="col-md-3 col-sm-4 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 clo-md-12 col-12">
                                                            <ul class="list-group">
                                                                <li class="list-group-item list-group-item-info">A
                                                                    simple danger list</li>
                                                                <ul class="list-group">
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                        Cras justo odio
                                                                        <span
                                                                            class="badge badge-secondary badge-pill">10</span>
                                                                    </li>
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                        Dapibus ac facilisis in
                                                                        <span
                                                                            class="badge badge-info badge-pill">21</span>
                                                                    </li>
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                        Morbi leo risus
                                                                        <span
                                                                            class="badge badge-danger badge-pill">35</span>
                                                                    </li>
                                                                </ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9 ">
                                            <!-- Row start -->
                                            <div class="row gutters">
                                                <div class="col-lg-2 col-sm-4 col-12">
                                                    <div class="hospital-tiles">
                                                        <img src="{{asset('img/hospital/appointment.svg')}}"
                                                            alt="Quality Dashboards" />
                                                        <p>Appointments</p>
                                                        <h2>49</h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-4 col-12">
                                                    <div class="hospital-tiles">
                                                        <img src="{{asset('img/hospital/patient.svg')}}"
                                                            alt="Best Dashboards" />
                                                        <p>New Patients</p>
                                                        <h2>60</h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-4 col-12">
                                                    <div class="hospital-tiles">
                                                        <img src="{{asset('img/hospital/operation.svg')}}"
                                                            alt="Best Dashboards" />
                                                        <p>Operations</p>
                                                        <h2>21</h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-4 col-12">
                                                    <div class="hospital-tiles">
                                                        <img src="{{asset('img/hospital/doctor.svg')}}"
                                                            alt="Top Dashboards" />
                                                        <p>Doctors</p>
                                                        <h2>75</h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-4 col-12">
                                                    <div class="hospital-tiles">
                                                        <img src="{{asset('img/hospital/staff.svg')}}"
                                                            alt="Top Dashboards" />
                                                        <p>Staff</p>
                                                        <h2>253</h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-4 col-12">
                                                    <div class="hospital-tiles">
                                                        <img src="{{asset('img/hospital/revenue.svg')}}"
                                                            alt="Top Dashboards" />
                                                        <p>Earnings</p>
                                                        <h2>$900k</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Row end -->
                                            <!-- Row start -->
                                            <div class="row gutters">
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
                                    <p>profile</p>
                                    <div class="row gutters">
                                        <div class="col-md-3 col-sm-4 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="account-settings">
                                                        <div class="user-profile">
                                                            <div class="user-avatar">
                                                                <img src="img/user2.png" alt="Medical Dashboards" />
                                                            </div>
                                                            <h5 class="user-name">Emily Russell</h5>
                                                            <h6 class="user-email">doctor@wwwzzz.com</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 clo-md-12 col-12">
                                                            <ul class="list-group">
                                                                <li class="list-group-item list-group-item-info">A
                                                                    simple danger list</li>
                                                                <ul class="list-group">
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                        Cras justo odio
                                                                        <span
                                                                            class="badge badge-secondary badge-pill">10</span>
                                                                    </li>
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                        Dapibus ac facilisis in
                                                                        <span
                                                                            class="badge badge-info badge-pill">21</span>
                                                                    </li>
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                        Morbi leo risus
                                                                        <span
                                                                            class="badge badge-danger badge-pill">35</span>
                                                                    </li>
                                                                </ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9 ">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-title">Update Profile</div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row gutters">
                                                        <div class="col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="fullName">Full Name</label>
                                                                <input type="text" class="form-control" id="fullName"
                                                                    placeholder="Enter full name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="eMail">Email</label>
                                                                <input type="email" class="form-control" id="eMail"
                                                                    placeholder="Enter email ID">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <input type="text" class="form-control" id="phone"
                                                                    placeholder="Enter phone number">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="website">Website URL</label>
                                                                <input type="url" class="form-control" id="website"
                                                                    placeholder="Website url">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="addRess">Address</label>
                                                                <input type="text" class="form-control" id="addRess"
                                                                    placeholder="Enter Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="ciTy">City</label>
                                                                <input type="text" class="form-control" id="ciTy"
                                                                    placeholder="Enter City">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sTate">State</label>
                                                                <input type="text" class="form-control" id="sTate"
                                                                    placeholder="Enter State">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="zIp">ZIP</label>
                                                                <input type="number" class="form-control" id="zIp"
                                                                    placeholder="Website ZIP">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="text-right">
                                                                <button data-dismiss="modal" type="button" id="cancel"
                                                                    name="cancel" class="btn btn-light">Cancel</button>
                                                                <button type="button" id="submit2" name="submit2"
                                                                    class="btn btn-primary">Submit Form</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                </div>
                                <div class="tab-pane fade" id="visits" role="tabpanel" aria-labelledby="visits-tab">
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                                            <p>visits</p>
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
                                            <p>lab</p>
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
                                    <p>med charges</p>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
