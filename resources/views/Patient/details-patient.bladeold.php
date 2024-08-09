@extends('app')
@section('content')
<!-- Row start -->
{{-- <div class="row gutters">--}}

    {{-- <div class="col-md-12 col-sm-12 col-12">

        <div class="custom-tabs-container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lab-tab" data-toggle="tab" href="#lab" role="tab"
                        aria-controls="lab" aria-selected="false">Lab</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="visits-tab" data-toggle="tab" href="#visits" role="tab"
                        aria-controls="visits" aria-selected="false">Visits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="expenses-tab" data-toggle="tab" href="#expenses" role="tab"
                        aria-controls="expenses" aria-selected="false">Expenses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="refunds-tab" data-toggle="tab" href="#refunds" role="tab"
                        aria-controls="refunds" aria-selected="false">Refunds</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
										<div class="setting-links">
											<a href="#">
												<i class="icon-bell"></i>
												Notifications
											</a>
											<a href="#">
												<i class="icon-chat"></i>
												Messages
											</a>
											<a href="#">
												<i class="icon-date_range"></i>
												Tasks
											</a>
											<a href="#">
												<i class="icon-settings"></i>
												Settings
											</a>
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
												<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
											</div>
											<div class="form-group">
												<label for="eMail">Email</label>
												<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
											</div>
											<div class="form-group">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
											</div>
											<div class="form-group">
												<label for="website">Website URL</label>
												<input type="url" class="form-control" id="website" placeholder="Website url">
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="addRess">Address</label>
												<input type="text" class="form-control" id="addRess" placeholder="Enter Address">
											</div>
											<div class="form-group">
												<label for="ciTy">City</label>
												<input type="text" class="form-control" id="ciTy" placeholder="Enter City">
											</div>
											<div class="form-group">
												<label for="sTate">State</label>
												<input type="text" class="form-control" id="sTate" placeholder="Enter State">
											</div>
											<div class="form-group">
												<label for="zIp">ZIP</label>
												<input type="number" class="form-control" id="zIp" placeholder="Website ZIP">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="text-right">
												<button type="button" id="cancel" name="cancel" class="btn btn-light">Cancel</button>
												<button type="button" id="submit2" name="submit2" class="btn btn-primary">Submit Form</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->
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
											<li>* Custom form controls and selects are also supported.</li>
											<li>* You can then remix that once again with size-specific column classes.</li>
											<li>* Group checkboxes or radios on the same horizontal row by adding .form-check-inline to any
												.form-check.</li>
										</ul>
									</div>
									<div class="card-body">

										<div class="row gutters">
											<div class="col-lg-5 col-md-6 col-sm-12">
												<div class="form-group">
													<label for="inputName" class="col-form-label">Name</label>
													<input type="text" class="form-control" id="inputName" placeholder="Name">
												</div>
												<div class="form-group">
													<label for="inputEmail" class="col-form-label">Your E-mail</label>
													<input type="email" class="form-control" id="inputEmail" placeholder="Email">
												</div>
												<div class="form-group">
													<label for="inputMobNumber" class="col-form-label">Mobile</label>
													<input type="number" class="form-control" id="inputMobNumber" placeholder="Mobile">
												</div>
											</div>
											<div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
												<div class="form-group">
													<label for="inputSubject" class="col-form-label">Subject</label>
													<input type="text" class="form-control" id="inputSubject" placeholder="Subject">
												</div>
												<div class="form-group">
													<label for="inputMessage" class="col-form-label">Your Message</label>
													<textarea class="form-control" id="inputMessage" placeholder="Message" maxlength="140"
														rows="4"></textarea>
													<div class="form-text text-muted">
														<p id="characterLeft" class="help-block ">140 characters left</p>
													</div>
												</div>
											</div>
										</div>

										<div class="row gutters">
											<div class="col-xl-12">
												<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
													Form</button>
											</div>
										</div>

									</div>
								</div>
							</form>
						</div>
					</div>


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
											<li>* Custom form controls and selects are also supported.</li>
											<li>* You can then remix that once again with size-specific column classes.</li>
											<li>* Group checkboxes or radios on the same horizontal row by adding .form-check-inline to any
												.form-check.</li>
										</ul>
									</div>
									<div class="card-body">

										<div class="row gutters">
											<div class="col-lg-5 col-md-6 col-sm-12">
												<div class="form-group">
													<label for="inputName" class="col-form-label">Name</label>
													<input type="text" class="form-control" id="inputName" placeholder="Name">
												</div>
												<div class="form-group">
													<label for="inputEmail" class="col-form-label">Your E-mail</label>
													<input type="email" class="form-control" id="inputEmail" placeholder="Email">
												</div>
												<div class="form-group">
													<label for="inputMobNumber" class="col-form-label">Mobile</label>
													<input type="number" class="form-control" id="inputMobNumber" placeholder="Mobile">
												</div>
											</div>
											<div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
												<div class="form-group">
													<label for="inputSubject" class="col-form-label">Subject</label>
													<input type="text" class="form-control" id="inputSubject" placeholder="Subject">
												</div>
												<div class="form-group">
													<label for="inputMessage" class="col-form-label">Your Message</label>
													<textarea class="form-control" id="inputMessage" placeholder="Message" maxlength="140"
														rows="4"></textarea>
													<div class="form-text text-muted">
														<p id="characterLeft" class="help-block ">140 characters left</p>
													</div>
												</div>
											</div>
										</div>

										<div class="row gutters">
											<div class="col-xl-12">
												<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
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
						<div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                            <p>expenses</p>
							<form>
								<div class="card m-0">
									<div class="card-header">
										<div class="card-title">Contact Us</div>
										<ul class="text-muted custom">
											<li>* Custom form controls and selects are also supported.</li>
											<li>* You can then remix that once again with size-specific column classes.</li>
											<li>* Group checkboxes or radios on the same horizontal row by adding .form-check-inline to any
												.form-check.</li>
										</ul>
									</div>
									<div class="card-body">

										<div class="row gutters">
											<div class="col-lg-5 col-md-6 col-sm-12">
												<div class="form-group">
													<label for="inputName" class="col-form-label">Name</label>
													<input type="text" class="form-control" id="inputName" placeholder="Name">
												</div>
												<div class="form-group">
													<label for="inputEmail" class="col-form-label">Your E-mail</label>
													<input type="email" class="form-control" id="inputEmail" placeholder="Email">
												</div>
												<div class="form-group">
													<label for="inputMobNumber" class="col-form-label">Mobile</label>
													<input type="number" class="form-control" id="inputMobNumber" placeholder="Mobile">
												</div>
											</div>
											<div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
												<div class="form-group">
													<label for="inputSubject" class="col-form-label">Subject</label>
													<input type="text" class="form-control" id="inputSubject" placeholder="Subject">
												</div>
												<div class="form-group">
													<label for="inputMessage" class="col-form-label">Your Message</label>
													<textarea class="form-control" id="inputMessage" placeholder="Message" maxlength="140"
														rows="4"></textarea>
													<div class="form-text text-muted">
														<p id="characterLeft" class="help-block ">140 characters left</p>
													</div>
												</div>
											</div>
										</div>

										<div class="row gutters">
											<div class="col-xl-12">
												<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
													Form</button>
											</div>
										</div>

									</div>
								</div>
							</form>
						</div>
					</div>
                </div>
                <div class="tab-pane fade" id="refunds" role="tabpanel" aria-labelledby="refunds-tab">
                    <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                            <p>refund</p>
							<form>
								<div class="card m-0">
									<div class="card-header">
										<div class="card-title">Contact Us</div>
										<ul class="text-muted custom">
											<li>* Custom form controls and selects are also supported.</li>
											<li>* You can then remix that once again with size-specific column classes.</li>
											<li>* Group checkboxes or radios on the same horizontal row by adding .form-check-inline to any
												.form-check.</li>
										</ul>
									</div>
									<div class="card-body">

										<div class="row gutters">
											<div class="col-lg-5 col-md-6 col-sm-12">
												<div class="form-group">
													<label for="inputName" class="col-form-label">Name</label>
													<input type="text" class="form-control" id="inputName" placeholder="Name">
												</div>
												<div class="form-group">
													<label for="inputEmail" class="col-form-label">Your E-mail</label>
													<input type="email" class="form-control" id="inputEmail" placeholder="Email">
												</div>
												<div class="form-group">
													<label for="inputMobNumber" class="col-form-label">Mobile</label>
													<input type="number" class="form-control" id="inputMobNumber" placeholder="Mobile">
												</div>
											</div>
											<div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
												<div class="form-group">
													<label for="inputSubject" class="col-form-label">Subject</label>
													<input type="text" class="form-control" id="inputSubject" placeholder="Subject">
												</div>
												<div class="form-group">
													<label for="inputMessage" class="col-form-label">Your Message</label>
													<textarea class="form-control" id="inputMessage" placeholder="Message" maxlength="140"
														rows="4"></textarea>
													<div class="form-text text-muted">
														<p id="characterLeft" class="help-block ">140 characters left</p>
													</div>
												</div>
											</div>
										</div>

										<div class="row gutters">
											<div class="col-xl-12">
												<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit
													Form</button>
											</div>
										</div>

									</div>
								</div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </div>

    </div> --}}

{{-- </div> --}}
<div class="custom-tabs-container">
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="chart-tab" data-toggle="tab" href="#chart"
            role="tab" aria-controls="chart" aria-selected="true">Chart</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
            aria-controls="profile" aria-selected="true">Demographic</a>
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
<style>
    @media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) {
    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* LG */
@media (min-width: 991px) {
    /* show 4th item */
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
</style>
<style>
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

<div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="chart" role="tabpanel"
                    aria-labelledby="chart-tab">
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-md-10 mt-2">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="container mb-2">
                                    <div class="health-card">
                                        <div class="row">
                                            <div class="col-2 icon">
                                                <img src="{{ asset('assets/img/patient-sketch.jpg') }}" alt="Silhouette Icon">
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
                                                        <p>Temprature: N/A (C<sup>o</sup>)</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h5>Smoking Status: Current some day smoker</h5>
                                                        <p>(428341000124106)</p>
                                                        <img class="smoking-icon" src="{{ asset('img/smoking-icon-7.jpg') }}" width="60px" height="60px" alt="Smoking Icon">
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
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="card-title col-6">Visits</div>
                                                <div class="card-title col-6 text-right">
                                                    <button class="btn btn-primary rounded">+ New Visit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{-- <div class="top-doctors-container"> --}}
                                                <div class="top-content">
                                                    <div class="container-fluid">
                                                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                                                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                                                                    <div class="appointment-card">
                                                                        <p>WED 05/15/2024</p>
                                                                        <p>Ankle Pain</p>
                                                                        <img src="https://via.placeholder.com/50" alt="Document Icon">
                                                                        <p>SIGNED OFF / NOT BILLED</p>
                                                                        <p>MALIK</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <div class="appointment-card">
                                                                        <p>WED 05/15/2024</p>
                                                                        <p>Ankle Pain</p>
                                                                        <img src="https://via.placeholder.com/50" alt="Document Icon">
                                                                        <p>SIGNED OFF / NOT BILLED</p>
                                                                        <p>MALIK</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <div class="appointment-card">
                                                                        <p>WED 05/15/2024</p>
                                                                        <p>Ankle Pain</p>
                                                                        <img src="https://via.placeholder.com/50" alt="Document Icon">
                                                                        <p>SIGNED OFF / NOT BILLED</p>
                                                                        <p>MALIK</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <div class="appointment-card">
                                                                        <p>WED 05/15/2024</p>
                                                                        <p>Ankle Pain</p>
                                                                        <img src="https://via.placeholder.com/50" alt="Document Icon">
                                                                        <p>SIGNED OFF / NOT BILLED</p>
                                                                        <p>MALIK</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                                    <div class="appointment-card">
                                                                        <p>WED 05/15/2024</p>
                                                                        <p>Ankle Pain</p>
                                                                        <img src="https://via.placeholder.com/50" alt="Document Icon">
                                                                        <p>SIGNED OFF / NOT BILLED</p>
                                                                        <p>MALIK</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            {{-- </div> --}}
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
        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="doctor-profile">

                        <div class="doctor-thumb">
                            <img src="data:image/png;base64, {{ $patient->image }}" alt="Image Preview" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                        <form name="patient-add" id="patient-add" method="post" action="{{ route('patient.store') }}">
                            @csrf
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="changeProfile"
                                    aria-describedby="changeProfile">
                                <label class="custom-file-label" for="changeProfile">Update Image</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-sm-12">
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
<script>
    $('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
    </script>

@endsection

