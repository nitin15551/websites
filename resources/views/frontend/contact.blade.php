@extends('frontend.layouts.main')
@section('main-container')
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Contact Us</h2>
							<ul class="bread-list">
								<li><a href="index.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<div id="myMap"></div>
								<!--/End Google-map -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Contact With Us</h2>
								<p>If you have any questions please fell free to contact with us.</p>
								<!-- Form -->
{{--								<form class="form" method="post" action="mail/mail.php">--}}
                                {!! Form::open([
                                            'url'=>url('/contact/store'),
                                            'method'=>'post',
                                            'id'=>'contact',
                                            'role'=>'form',
//                                            'enctype'=>'multipart/form-data',
                                            'class'=>'form',

                                        ])
                                 !!}
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
{{--												<input type="text" name="name" placeholder="Name" required="">--}}
                                                {!! Form::text('name','',[ 'id'=>"name", 'required'=>"",'placeholder'=>"Name" ]) !!}
											</div>
										</div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select name="countrie" id="countrie" class="form-control" required>
                                                    <option value="">Select Country</option>
                                                    @foreach($countries AS $countrie)
                                                        <option value="{{ $countrie->id }}">{{ $countrie->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
										<div class="col-lg-6">
											<div class="form-group">
                                                {!! Form::email('email','',['id'=>'email','required'=>'','class'=>'form-group','placeholder'=>"Email"]) !!}
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
                                                {!! Form::number('phone','',['id'=>"phone",'reqired'=>"",'placeholder'=>"Phone"]) !!}
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" placeholder="Subject" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Your Message" required=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Send</button>
											</div>
											<div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div>
										</div>
									</div>
{{--								</form>--}}
                                {!! Form::close() !!}
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>+(000) 1234 56789</h3>
									<p>info@company.com</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>2 Fir e Brigade Road</h3>
									<p>Chittagonj, Lakshmipur</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>Mon - Sat: 8am - 5pm</h3>
									<p>Sunday Closed</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
@endsection
