@extends('layout.apptheme')
@section('content')
<link href="{!! asset('public/styles/portfolio.css') !!}" rel="stylesheet" />
<link href="{!! asset('public/styles/portfolio_responsive.css') !!}" rel="stylesheet" />
<style>
    .item-preview {
        min-height: 245px;
        padding: 12px;
        position: relative;
        text-align: center;
    }
    .item-preview__preview-buttons {
        padding-top: 12px;
        display: inline-block;
    }
    .item-preview__preview-buttons>a {
        margin: 0 10px 10px 0;
    }
    .btn, button, [role=button], [type=submit] {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
        background-color: gray;
        border: 1px solid #dee2e6;
        border-color: #100f3a!important;
        border-radius: 4px;
        color: white;
        cursor: pointer;
        display: inline-block;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.5;
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
    }
    .btn-icon.screenshots:after {
        background-image: url(https://public-assets.envato-static.com/assets/generated_sprites/common-14f8bc60470b39265fe5c01e92035209bd04b91cd7da99d59ca3ccd9de5eac62.png);
        background-position: -189px -74px;
    }
    .btn-icon.live-preview:after {
        background-image: url(https://public-assets.envato-static.com/assets/generated_sprites/common-14f8bc60470b39265fe5c01e92035209bd04b91cd7da99d59ca3ccd9de5eac62.png);
        background-position: 0px -137px;
    }
    .btn-icon:after {
        content: "";
        float: right;
        height: 17px;
        margin: 1px 0 0 15px;
        width: 17px;
    }
    .btn:hover, button:hover, [role=button]:hover, [type=submit]:hover, .btn:focus, button:focus, [role=button]:focus, [type=submit]:focus {
        background-color: #100f3a;
        color: #fff;
        text-decoration: none;
        outline: none;
    }
</style>
<div class="main_content">
    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
        <!-- <div class="main_subtitle">What I am good at</div> -->
        <div class="main_title">Portfolio</div>
    </div>
    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
        <div class="portfolio_grid grid clearfix">

            <div class="grid-item portfolio_item p_design"  >
                <img src="{!! asset('public/images/HRMS-admin-dashboadd1.png') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title" style="font-size: 28px;">HRMS</div>
                    <hr style="margin-top: 0.1rem; margin-bottom: 0.3rem; border: 3px; width: 25%; border-top: 3px solid rgb(255 255 255);">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                
                            <a data-view="screenshotGallery" href="#"onclick="getedithrms({{'"HRMS-admin-dashboadd1.png"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>                
                        </div>
                    </div>
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                            
                            <a data-view="itemPreviewButtonTracking" href="http://level3bos.com/hrm/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>                    
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item portfolio_item p_design">
                <img src="{!! asset('public/images/HRMS-Job-Portal.png') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title" style="font-size: 28px;">Job Portal</div>
                    <hr style="margin-top: 0.1rem; margin-bottom: 0.3rem; border: 3px; width: 45%; border-top: 3px solid rgb(255 255 255);">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                
                            <a data-view="screenshotGallery" href="#"onclick="geteditJP({{'"HRMS-Job-Portal.png"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>                
                        </div>
                    </div>
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                            
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
                <img src="{!! asset('public/images/SCHEDULING.jpg') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">                    
                    <div class="portfolio_item_title" style="font-size: 28px;">Email Schedule</div>
                    <hr style="margin-top: 0.1rem; margin-bottom: 0.3rem; border: 3px; width: 65%;border-top: 3px solid rgb(255 255 255);">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                
                            <a data-view="screenshotGallery" href="#"onclick="getschedule({{'"SCHEDULING.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>                
                        </div>
                    </div>
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                            
                            <a data-view="itemPreviewButtonTracking" href="http://mobilelinkusa.com/scheduling/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>                    
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item portfolio_item p_design"  >
                <img src="{!! asset('public/images/MobilyLLC.png') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title" style="font-size: 28px;">CallingTree II</div>
                    <hr style="margin-top: 0.1rem; margin-bottom: 0.3rem; border: 3px; width: 55%; border-top: 3px solid rgb(255 255 255);">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                
                            <a data-view="screenshotGallery" href="#"onclick="getmobily({{'"MobilyLLC.png"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>                
                        </div>
                    </div>
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                            
                            <a data-view="itemPreviewButtonTracking" href="http://mobilyllc.com/callingtree/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio_grid grid clearfix">

            <div class="grid-item portfolio_item p_design"  >
                <img src="{!! asset('public/images/CallingTree.jpg') !!}" alt="" style="height: 120px;">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <!-- <div class="portfolio_item_title" onclick="getedit({{'"CallingTree.jpg"'}})" style="cursor: pointer;">CallingTree</div>
                    <div class="portfolio_item_link"><a href="https://mobilelinkusa.com/callingtree/" target="_blank">Visit</a></div> -->

                    <div class="portfolio_item_title" style="font-size: 28px;">CallingTree</div>
                    <hr style="margin-top: 0.1rem; margin-bottom: 0.3rem; border: 3px; width: 45%; border-top: 3px solid rgb(255 255 255);">
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
                <img src="{!! asset('public/images/EMS.jpg') !!}" alt="" style="height: 196px;">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                    <div class="portfolio_item_title" style="font-size: 28px;">EMS</div>
                    <hr style="margin-top: 0.1rem; margin-bottom: 0.3rem; border: 3px; width: 20%; border-top: 3px solid rgb(255 255 255);">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                
                            <a data-view="screenshotGallery" href="#"onclick="getems({{'"EMS.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>                
                        </div>
                    </div>
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                            
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
                <img src="{!! asset('public/images/PayRoll.jpg') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">                    
                    <div class="portfolio_item_title" style="font-size: 28px;">Pay Roll</div>
                    <hr style="margin-top: 0.1rem; margin-bottom: 0.3rem; border: 3px; width: 35%; border-top: 3px solid rgb(255 255 255);">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                
                            <a data-view="screenshotGallery" href="#"onclick="getpayroll({{'"PayRoll.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>                
                        </div>
                    </div>
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                            
                            <a data-view="itemPreviewButtonTracking" href="http://level3bos.com/payroll/" role="button" class="btn-icon live-preview" target="_blank" rel="noopener nofollow">
                                Visit
                            </a>                    
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item portfolio_item p_design">
                <img src="{!! asset('public/images/OPAudit.jpg') !!}" alt="">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">                    
                    <div class="portfolio_item_title" style="font-size: 28px;">OP Audit</div>
                    <hr style="margin-top: 0.1rem; margin-bottom: 0.3rem; border: 3px; width: 40%;border-top: 3px solid rgb(255 255 255);">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                
                            <a data-view="screenshotGallery" href="#"onclick="getedit({{'"OPAudit.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>                
                        </div>
                    </div>
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                            
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
                <img src="{!! asset('public/images/HRSCF.jpg') !!}" alt="" style="height: 168px;">
                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">                    
                    <div class="portfolio_item_title" style="font-size: 28px;">HRSCF</div>
                    <hr style="margin-top: 0.1rem; margin-bottom: 0.3rem; border: 3px; width: 30%;border-top: 3px solid rgb(255 255 255);">
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                
                            <a data-view="screenshotGallery" href="#"onclick="getedit({{'"HRSCF.jpg"'}})" role="button" class="btn-icon screenshots" rel="noopener">
                                Screenshots
                            </a>                
                        </div>
                    </div>
                    <div class="item-preview__actions">
                        <div id="fullscreen" class="item-preview__preview-buttons">                            
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
@endsection