@extends('layouts.app')
@section('body')


@yield('content')
@include('layouts.nav')
<div class="container clearfix">

					<div class="row align-items-center col-mb-50">
						<div class="col-md-4 center">
							<img data-animate="fadeInLeft" src="assets/images/welcome2.jpg" alt="Welcome">
						</div>

						<div class="col-md-8 text-center text-md-start">
							<div class="heading-block">
								<h3>Welcome to alive membership &amp; Registration</h3>
							</div>

							<p>Click below to get started to get started</p>



							<a href="{{url('/requirement')}}" class="button button-border button-green button-rounded button-large ms-0 topmargin-sm">Join us now</a>
						</div>
					</div>

				</div>

@endsection

