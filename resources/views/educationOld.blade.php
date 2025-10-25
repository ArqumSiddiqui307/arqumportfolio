@extends('layout.apptheme')
@section('content')
<link href="{!! asset('public/styles/education.css') !!}" rel="stylesheet" />
<link href="{!! asset('public/styles/education_responsive.css') !!}" rel="stylesheet" />
<div class="main_content">
<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
<!-- <div class="main_subtitle">What I am good at</div> -->
<div class="main_title">Education</div>
</div>
<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

<div class="education">

<div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
<div><div class="edu_year">2015-2018</div></div>
<!-- <div><div class="edu_image"><img src="images/edu_1.png" alt=""></div></div> -->
<div class="edu_content">
<div class="edu_title_container">
<div class="edu_title">GRADUATION</div>
<div class="edu_subtitle">BSSE</div>
</div>
<div class="edu_text">
<p>Successfully Completed BSSE
(ILMA UNIVERSITY).</p>
</div>
</div>
</div>

<div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
<div><div class="edu_year">2012-2014</div></div>
<!-- <div><div class="edu_image"><img src="images/edu_3.png" alt=""></div></div> -->
<div class="edu_content">
<div class="edu_title_container">
<div class="edu_title">INTERMEDIATE</div>
<div class="edu_subtitle">Higher Education</div>
</div>
<div class="edu_text">
<p>Successfully complete Intermediate
(Inter Board Of Education).</p>
</div>
</div>
</div>

<div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
<div><div class="edu_year">2012</div></div>
<!-- <div><div class="edu_image"><img src="images/edu_3.png" alt=""></div></div> -->
<div class="edu_content">
<div class="edu_title_container">
<div class="edu_title">MATRICULATION</div>
<div class="edu_subtitle">Secondary Education</div>
</div>
<div class="edu_text">
<p>Successfully complete Matric
(Secondary Board of Education Karachi).</p>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection