@extends('layout.apptheme')
@section('content')
<div class="main_content">
<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
<!-- <div class="main_subtitle">About</div> -->
<div class="main_title">Arqum Siddiqui</div>
</div>

<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
<div class="about_content">
<div class="about_title">Objective</div>
<div class="about_text">
<p>Professional Developer seeking a challenging and growth oriented
position. Which will effectively utiliz my skills and knowledge
for my professional.</p>
</div>
@yield('content')
<div class="loaders clearfix">

<div class="loader_container">
<div class="loader" data-perc="0.85"></div>
<div class="loader_content text-center">
<div class="loader_title">CREATIVITY</div>
<!-- <div class="loader_subtitle">A Php based web application framework.</div> -->
</div>
</div>

<div class="loader_container">
<div class="loader" data-perc="0.75"></div>
<div class="loader_content text-center">
<div class="loader_title">PLANNER</div>
<!-- <div class="loader_subtitle">Open-source relational DB management system.</div> -->
</div>
</div>

<div class="loader_container">
<div class="loader" data-perc="0.65"></div>
<div class="loader_content text-center">
<div class="loader_title">BUSINESS SENSE</div>
<!-- <div class="loader_subtitle">A software framework developed by Microsoft.</div> -->
</div>
</div>

<div class="loader_container">
<div class="loader" data-perc="0.79"></div>
<div class="loader_content text-center">
<div class="loader_title">GREAT TEAMMATE</div>
<!-- <div class="loader_subtitle">Vestibulum est mattis effic.</div> -->
</div>
</div>
</div>
</div>
</div>
</div>
@endsection