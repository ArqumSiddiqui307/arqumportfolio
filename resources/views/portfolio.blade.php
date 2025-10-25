@extends('layout.apptheme')
@section('content')
<link href="{!! asset('public/styles/portfolio.css') !!}" rel="stylesheet" />
<link href="{!! asset('public/styles/portfolio_responsive.css') !!}" rel="stylesheet" />
<style>
/* --- THEME VARIABLES --- */
:root {
    --bg-dark: #0a0a0a;
    --text-light: #e6e6e6;
    --accent: #b8ff48; /* Bright Green Accent */
    --muted: #999;
    --card-bg: #161616;
}

/* --- BASE STYLES --- */
.main_content {
    background: var(--bg-dark); 
    color: var(--text-light);
    padding-top: 50px; 
}
.main_title_container {
    height: 150px;
    padding-left: 20px;
}
.main_title {
    font-size: 4rem;
    font-weight: 900;
    color: var(--text-light);
    padding-bottom: 20px;
}
.main_title span {
    color: var(--accent);
}
.main_content_scroll {
    padding: 0 20px 20px;
}

/* --- PORTFOLIO ITEM STYLING (The Zoom Target) --- */
.portfolio_item {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    transition: all 0.4s ease;
    border: 1px solid rgba(255,255,255,0.08);
    transform-origin: center center; 
    /* Added min-height for consistent structure, especially for vertical items */
    min-height: 250px;
    max-height: 250px;
    margin-bottom: 5px;
}

/* --- Image Sizing Fix: Ensure a consistent aspect ratio if possible --- */
.portfolio_item img {
    display: block;
    width: 100%;
    /* Forced aspect ratio using padding-bottom technique or fixed height */
    height: 100%; /* Default for object-fit */
    object-fit: cover;
    transition: transform 0.4s ease;
}

/* --- THE ZOOM EFFECT (Poora Item Zoom-in Hoga) --- */
.portfolio_item:hover {
    transform: scale(1.03); 
    box-shadow: 0 10px 30px rgba(0,0,0,0.7); 
    border-color: rgba(184, 255, 72, 0.5); 
}

/* Content Overlay (Dark, Appears on Hover) */
.portfolio_item_content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(10, 10, 10, 0.98); 
    opacity: 0; 
    transition: opacity 0.4s ease;
    text-align: center;
    z-index: 2; 
    /* Center content vertically and horizontally */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.portfolio_item:hover .portfolio_item_content {
    opacity: 1; 
}

.portfolio_item_title {
    color: var(--accent); 
    font-weight: 700;
    font-size: 28px !important; 
    margin-bottom: 5px;
}

/* Horizontal Rule (Divider) */
.portfolio_item_content hr {
    background-color: var(--text-light);
    border: none;
    height: 3px;
    margin-top: 0.1rem; 
    margin-bottom: 0.8rem;
    border-radius: 2px;
}

/* Button Group Styling */
.item-preview {
    min-height: auto; 
    padding: 12px;
}
.item-preview__preview-buttons {
    padding-top: 12px;
    display: flex; 
    justify-content: center;
    gap: 10px; 
    flex-wrap: wrap;
}

/* --- BUTTON STYLES (Kept Green Accent) --- */
.btn, button, [role=button], [type=submit], .item-preview__preview-buttons>a {
    background-color: var(--bg-dark) !important;
    border: 2px solid var(--accent) !important; 
    color: var(--text-light) !important;
    font-weight: 600;
    padding: 8px 25px; 
    border-radius: 50px; 
    transition: all 0.3s ease;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 0.5px;
    margin: 0 5px 10px 5px !important; 
}

.btn:hover, button:hover, [role=button]:hover, [type=submit]:hover, .item-preview__preview-buttons>a:hover {
    background-color: var(--accent) !important;
    color: var(--bg-dark) !important; 
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(184, 255, 72, 0.4);
    text-decoration: none; 
    outline: none; 
}

/* Icon Styling (Using Font Awesome) */
.btn-icon.screenshots, .btn-icon.live-preview {
    padding-right: 40px !important; 
    position: relative;
}

.btn-icon.screenshots:after, .btn-icon.live-preview:after {
    background-image: none !important;
    content: "" !important; 
    float: none;
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    width: auto;
    height: auto;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 15px;
    transition: color 0.3s ease;
    color: var(--accent); 
}

.btn-icon.screenshots:after {
    content: "\f03e"; /* fa-image */
}
.btn-icon.live-preview:after {
    content: "\f06e"; /* fa-eye */
}

.btn-icon:hover:after {
    color: var(--bg-dark) !important; 
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .main_title {
        font-size: 3rem;
    }
}
</style>
<div class="main_content">
    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
        <div class="main_title">Portfo<span>lio</span></div>
    </div>
    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
        <div class="portfolio_grid grid clearfix">

            <div class="grid-item portfolio_item p_design" >
                <img src="{!! asset('images/HRMS-admin-dashboadd1.png') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title">HRMS</div>
                    <hr style="width: 25%;">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">
                            <a data-view="screenshotGallery" href="#"onclick="getedithrms({{'"HRMS-admin-dashboadd1.png"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>
                             <a data-view="itemPreviewButtonTracking" href="http://level3bos.com/hrm/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item portfolio_item p_design">
                <img src="{!! asset('images/HRMS-Job-Portal.png') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title">Job Portal</div>
                    <hr style="width: 45%;">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">
                            <a data-view="screenshotGallery" href="#"onclick="geteditJP({{'"HRMS-Job-Portal.png"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>
                            <a data-view="itemPreviewButtonTracking" href="http://level3bos.com/hrm/job_list" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="portfolio_grid grid clearfix">
            <div class="grid-item portfolio_item p_design">
                <img src="{!! asset('images/SCHEDULING.jpg') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title">Email Schedule</div>
                    <hr style="width: 65%;">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">
                            <a data-view="screenshotGallery" href="#"onclick="getschedule({{'"SCHEDULING.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>
                            <a data-view="itemPreviewButtonTracking" href="http://mobilelinkusa.com/scheduling/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item portfolio_item p_design" >
                <img src="{!! asset('images/MobilyLLC.png') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title">CallingTree II</div>
                    <hr style="width: 55%;">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">
                            <a data-view="screenshotGallery" href="#"onclick="getmobily({{'"MobilyLLC.png"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>
                            <a data-view="itemPreviewButtonTracking" href="http://mobilyllc.com/callingtree/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="portfolio_grid grid clearfix">

            <div class="grid-item portfolio_item p_design">
                <img src="{!! asset('images/CallingTree.jpg') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title">CallingTree</div>
                    <hr style="width: 45%;">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">
                            <a data-view="screenshotGallery" href="#"onclick="getmobilelink({{'"CallingTree.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>
                            <a data-view="itemPreviewButtonTracking" href="https://mobilelinkusa.com/callingtree/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item portfolio_item p_design">
                <img src="{!! asset('images/EMS.jpg') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title">EMS</div>
                    <hr style="width: 20%;">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">
                            <a data-view="screenshotGallery" href="#"onclick="getems({{'"EMS.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>
                            <a data-view="itemPreviewButtonTracking" href="https://mobilelinkusa.com/ems/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio_grid grid clearfix">

            <div class="grid-item portfolio_item p_design">
                <img src="{!! asset('images/PayRoll.jpg') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title">Pay Roll</div>
                    <hr style="width: 35%;">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">
                            <a data-view="screenshotGallery" href="#"onclick="getpayroll({{'"PayRoll.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>
                            <a data-view="itemPreviewButtonTracking" href="http://level3bos.com/payroll/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item portfolio_item p_design">
                <img src="{!! asset('images/OPAudit.jpg') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title">OP Audit</div>
                    <hr style="width: 40%;">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">
                            <a data-view="screenshotGallery" href="#"onclick="getedit({{'"OPAudit.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>
                            <a data-view="itemPreviewButtonTracking" href="https://mobilelinkusa.com/opaudit/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio_grid grid clearfix">

            <div class="grid-item portfolio_item p_design">
                <img src="{!! asset('images/HRSCF.jpg') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title">HRSCF</div>
                    <hr style="width: 30%;">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">
                            <a data-view="screenshotGallery" href="#"onclick="getedit({{'"HRSCF.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>
                            <a data-view="itemPreviewButtonTracking" href="https://mobilelinkusa.com/hrscf" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modals"></div>
</div>
<script>
    function getedit($id){
        // alert($id);
        $.get('{{ URL::to("/viewportfolio")}}/'+$id,function(data){
        $('#modals').empty();
        $('#modals').append(data);
        $('#getmeImage').modal('show');
        });
    }
    function getedithrms($id){
        // alert($id);
        $.get('{{ URL::to("/viewportfoliohrms")}}/'+$id,function(data){
        $('#modals').empty();
        $('#modals').append(data);
        $('#getmeImageHRMS').modal('show');
        });
    }
    function geteditJP($id){
        // alert($id);
        $.get('{{ URL::to("/viewportfolioJP")}}/'+$id,function(data){
        $('#modals').empty();
        $('#modals').append(data);
        $('#getmeImageHRMS').modal('show');
        });
    }
    function getschedule($id){
        // alert($id);
        $.get('{{ URL::to("/viewportfolioES")}}/'+$id,function(data){
        $('#modals').empty();
        $('#modals').append(data);
        $('#getmeImageES').modal('show');
        });
    }
    function getmobily($id){
        // alert($id);
        $.get('{{ URL::to("/viewportfolioMobily")}}/'+$id,function(data){
        $('#modals').empty();
        $('#modals').append(data);
        $('#getmeImageMobily').modal('show');
        });
    }
    function getmobilelink($id){
        // alert($id);
        $.get('{{ URL::to("/viewportfolioMobilelink")}}/'+$id,function(data){
        $('#modals').empty();
        $('#modals').append(data);
        $('#getmeImageMobilelink').modal('show');
        });
    }
    function getems($id){
        // alert($id);
        $.get('{{ URL::to("/viewportfolioEMS")}}/'+$id,function(data){
        $('#modals').empty();
        $('#modals').append(data);
        $('#getmeImageEMS').modal('show');
        });
    }
    function getpayroll($id){
        // alert($id);
        $.get('{{ URL::to("/viewportfolioPayroll")}}/'+$id,function(data){
        $('#modals').empty();
        $('#modals').append(data);
        $('#getmeImagePayroll').modal('show');
        });
    }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection