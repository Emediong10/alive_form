@extends('layouts.app')
@section('body')


@yield('content')
@include('layouts.nav')
<div class="container clearfix">

					<div class="row align-items-center col-mb-50">
						<div class="col-md-4 center">
							<img data-animate="fadeInLeft" src="assets/images/welcome2.png" alt="Welcome">
						</div>

						<div class="col-md-8 text-center text-md-start">
							<div>
								<h3>WELCOME TO ALIVE NIGERIA MEMBERSHIP AND REGISTRATION</h3>
							</div>

							<p> Our mission is to prepare Africa for the imminent return of Jesus Christ through biblical spiritual training and 
evangelistic efforts. It is our goal to challenge African Seventh-day Adventist young adults to live a lifestyle 
of authentic biblical excellence, instill a missionary volunteer spirit in every African Seventh-day Adventist 
young adult, mobilize and support young adult missionary movements across Africa, create a meaningful 
impact in neglected areas, and finally change the continent of Africa by ushering in the imminent return of 
Jesus Christ.</p>



							<a href="{{url('/')}}" class="button button-border button-green button-rounded button-large ms-0 topmargin-sm">Join us for 2024</a>
						</div>
					</div>

				</div>

@endsection

