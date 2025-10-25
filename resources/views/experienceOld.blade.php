@extends('layout.apptheme')
@section('content')
<link href="{!! asset('public/styles/experience.css') !!}" rel="stylesheet" />
<link href="{!! asset('public/styles/experience_responsive.css') !!}" rel="stylesheet" />

<div class="main_content">
	<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
		<!-- <div class="main_subtitle">What I am good at</div> -->
		<div class="main_title">Experience</div>
	</div>
	<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

		<div class="experience">

			<div class="exp_item d-flex flex-md-row flex-column align-items-start justify-content-start">
				<div><div class="exp_time">2019-Present</div></div>
				<div class="exp_content">
					<div class="exp_title_container">
						<div class="exp_title">Senior Web Developer</div>
						<div class="exp_subtitle">Mobilelink USA (Authorized Retailer of CricketWireless)</div>
					</div>
					<div class="exp_text">
						<ul>
							<p>• Development of new portals</p>
							<p>• Maintenance and error fixing on live portals</p>
							<p>• Managing complete live database</p>
							<p>• Managing operational support for employees</p>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection