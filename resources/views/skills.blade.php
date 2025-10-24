@extends('layout.apptheme')
@section('content')
<div class="main_content">
<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
<!-- <div class="main_subtitle">What I am good at</div> -->
<div class="main_title">Skills</div>
</div>
<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

<div class="skills" style="margin-top: 2px;">


<div class="progress_bars">
<div class="container-fluid">
<div class="row">

<div class="col-xl-4 col-lg-6 pb_col">
<div class="pb_item">
<div class="p_bar_title">Laravel/Php</div>
<div id="skill_1_pbar" class="skill_bars" data-perc="0.55" data-name="skill_1_pbar" data-color-start="#79ccff" data-color-end="#9b74ff"></div>
</div>
</div>

<div class="col-xl-4 col-lg-6 pb_col">
<div class="pb_item">
<div class="p_bar_title">CSS</div>
<div id="skill_3_pbar" class="skill_bars" data-perc="0.59" data-name="skill_3_pbar" data-color-start="#0054ff" data-color-end="#ff23d3"></div>
</div>
</div>

<div class="col-xl-4 col-lg-6 pb_col">
<div class="pb_item">
<div class="p_bar_title">JS</div>
<div id="skill_2_pbar" class="skill_bars" data-perc="0.49" data-name="skill_2_pbar" data-color-start="#ff4646" data-color-end="#ff26d9"></div>
</div>
</div>

<div class="col-xl-4 col-lg-6 pb_col">
<div class="pb_item">
<div class="p_bar_title">SqlServer/MySql</div>
<div id="skill_4_pbar" class="skill_bars" data-perc="0.83" data-name="skill_4_pbar" data-color-start="#79ff7c" data-color-end="#ffbd4a"></div>
</div>
</div>

<!-- <div class="col-xl-4 col-lg-6 pb_col">
<div class="pb_item">
<div class="p_bar_title">SAP Crystal Report</div>
<div id="skill_5_pbar" class="skill_bars" data-perc="0.88" data-name="skill_5_pbar" data-color-start="#79ff8f" data-color-end="#7b74ff"></div>
</div>
</div> -->

<div class="col-xl-4 col-lg-6 pb_col">
<div class="pb_item">
<div class="p_bar_title">Bootstrap</div>
<div id="skill_6_pbar" class="skill_bars" data-perc="0.61" data-name="skill_6_pbar" data-color-start="#ff2d72" data-color-end="#ffab79"></div>
</div>
</div>
</div>
</div>
</div>

<div class="milestones clearfix">

<div class="milestone text-center">
<div class="milestone_icon"><img src="{!! asset('public/images/icon_6.png') !!}" alt=""></div>
<div class="milestone_counter" data-end-value="2">0</div>
<div class="milestone_text">Years of Experience</div>
</div>

<div class="milestone text-center">
<div class="milestone_icon"><img src="{!! asset('public/images/icon_7.png') !!}" alt=""></div>
<div class="milestone_counter" data-end-value="2" data-sign-before="">0</div>
<div class="milestone_text">Happy Clients</div>
</div>

<!-- <div class="milestone text-center">
<div class="milestone_icon"><img src="{!! asset('public/images/icon_9.png') !!}" alt=""></div>
<div class="milestone_counter" data-end-value="10" data-sign-after="+">0</div>
<div class="milestone_text">Finished Dekstop Projects</div>
</div> -->

<div class="milestone text-center">
<div class="milestone_icon"><img src="{!! asset('public/images/icon_9.png') !!}" alt=""></div>
<div class="milestone_counter" data-end-value="5+">0</div>
<div class="milestone_text">Finished Web Projects</div>
</div>
</div>
</div>
</div>
</div>
@endsection