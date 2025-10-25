<style>
    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #100f3a;
        border-color: #100F37;
    }
    /* .img-fluid{
        overflow: scroll;
        height: 500px;
        width: 500px;
        max-width: 500%;
    } */
    .img-fluid{
        max-width: 500%!important;
        overflow: scroll;
        min-height: 100%;
        width: 100%;
    }
    .img-thumbnail {
        min-width: 100%!important;
    }
    .page-link:hover {
        color: #100f3a!important;
        background-color: #e9ecef!important;
        border-color: #100f3a!important;
    }
    h5 {
        font-size: 16px!important;
        color: #000;
        font-weight: 600;
    }
        #loader{
            display:none;
            position: fixed;
            height: 100%;
            width: 100%;
            top: 0px;
            left: 0px;
            background: url(http://www.nvidia.com/docs/IO/151309/loader.gif);
            z-index: 1;
            background-color: #ffffff5c;
            background-repeat: no-repeat;
            background-position: 45% 45%;
        }

  
                /* styles unrelated to zoom */
        /*        * { border:0; margin:0; padding:0; }
                p { position:absolute; top:30px; right:280px; color:#555; font:bold 13px/1 sans-serif;}
        */
                /* these styles are for the demo, but are not required for the plugin */
                .zoom {
                    display:inline-block;
                    position: relative;
                }
                
                /* magnifying glass icon */
                .zoom:after {
                    content:'';
                    display:block; 
                    width:50px; 
                    height:50px;
                    position:absolute; 
                    top:0;
                    right:0;
                    /*background:url(newtheme/images7/icon.png);*/
                }
        
                .zoom img {
                    display: block;
                }
        
                .zoom img::selection { background-color: transparent; }
        
                /*#ex2 img:hover { cursor: url(newtheme/images7/grab.cur), default; }
                #ex2 img:active { cursor: url(newtheme/images7/grabbed.cur), default; }*/
       
    </style>
    <?php
    $user = explode(".", $i);
    $hrmimage[0] = "HRMS-Job-List.png";
    $hrmimage[1] = "HRMS-Candidate_register.png";
    $hrmimage[2] = "HRMS-Candidate_Login.png";
    
    $hrmimage[3] = "HRMS-Create-Profile.png";
    $hrmimage[4] = "HRMS-Submit-Profile.png";
    $hrmimage[5] = "HRMS-Profile-View.png";
    $hrmimage[6] = "HRMS-Job-Details.png";
    $hrmimage[7] = "HRMS-Apply-Job.png";
    $hrmimage[8] = "HRMS-Submit-Job.png";
    $hrmimage[9] = "HRMS-AppliedJob-Status.png";
    $hrmimage[10] = "HRMS-ReferredJob-List.png";
    $hrmimage[11] = "HRMS-FavoriteJob-List.png";
    ?>
<div class="modal fade" id="getmeImageHRMS">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 150%;margin-left: -100px;"> 
            <div id="loader"></div>
            <div class="modal-header">
                <h4 class="modal-title">Arqum Portfolio (Job Portal)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" id="body" style="height: 625px; overflow-y: scroll;">
                <center>
                <ul class="pagination" style="display: inline-flex;">
                    <li class="paginate_button page-item previous " id="previous"  style="display: none;">
                        <a href="#" aria-controls="cl" data-dt-idx="0" tabindex="0" onclick="hrmprevious()" class="page-link">Previous</a>
                    </li>
                    <li style="margin: 0px 160px;"></li>
                    <li class="paginate_button page-item next active" id="next">
                        <a href="#" aria-controls="cl" data-dt-idx="2" tabindex="0" onclick="hrmnext()" class="page-link">Next</a>
                    </li>
                </ul>
                </center>
                <center><h5 id="admin">Job List</h5></center>
                <center><h5 id="user" style="display: none;">Register</h5></center>
                <center><h5 id="employee" style="display: none;">Login</h5></center>
                
                <center><h5 id="candidategrid" style="display: none;">Create Profile/Resume Builder</h5></center>
                <center><h5 id="candidatelist" style="display: none;">Profile/Resume Builder Form</h5></center>
                <center><h5 id="department" style="display: none;">Profile/Resume Builder View</h5></center>
                <center><h5 id="designation" style="display: none;">Referred/Add Favorite/ View Job Details</h5></center>
                <center><h5 id="leaveapply" style="display: none;">Apply Job</h5></center>
                <center><h5 id="employeeleavemanage" style="display: none;">Job Form</h5></center>
                <center><h5 id="dailyattendane" style="display: none;">View Job Status</h5></center>
                <center><h5 id="feedbakorComplaine" style="display: none;">Referred List</h5></center>
                <center><h5 id="complainelist" style="display: none;">Favorite List</h5></center>
                <span class='zoom' id='ex2'>
                    <img class="img-fluid img-thumbnail" id="1" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[0]}}" onclick="cursor()" style="display: block; cursor: zoom-in;"/> 
                    <img class="img-fluid img-thumbnail" id="2" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[1]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="3" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[2]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    
                    <img class="img-fluid img-thumbnail" id="4" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[3]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="5" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[4]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="6" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[5]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="7" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[6]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="8" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[7]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="9" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[8]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="10" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[9]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="11" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[10]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="12" src="{{ URL::to('images/job-portal/')}}/{{$hrmimage[11]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                </span>

                
            </div>
            <div class="modal-footer">
            </div>
            
        </div>
    </div>
</div>

<script>      

    function cursor(){

        var x = document.getElementById("1");
        var y = document.getElementById("2");
        var z = document.getElementById("3");
        var a = document.getElementById("4");
        var b = document.getElementById("5");
        var c = document.getElementById("6");
        var d = document.getElementById("7");
        var e = document.getElementById("8");
        var f = document.getElementById("9");
        var g = document.getElementById("10");
        var h = document.getElementById("11");
        var i = document.getElementById("12");

        var body = document.getElementById("body");

        if (x.style.display === "block") {

            if (x.style.cursor === "zoom-in") {
                
                x.style.cursor = "zoom-out";
                x.style.width = "1700px";
                x.style.height = "1150px";
                body.style.overflow = "scroll";

            }else if(x.style.cursor === "zoom-out"){
                
                x.style.cursor = "zoom-in";
                x.style.width = "100%";
                x.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (y.style.display === "block") {

            if (y.style.cursor === "zoom-in") {
                
                y.style.cursor = "zoom-out";
                y.style.width = "1800px";
                y.style.height = "900px";
                body.style.overflow = "scroll";

            }else if(y.style.cursor === "zoom-out"){
                
                y.style.cursor = "zoom-in";
                y.style.width = "100%";
                y.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (z.style.display === "block") {

            if (z.style.cursor === "zoom-in") {
                
                z.style.cursor = "zoom-out";
                z.style.width = "1800px";
                z.style.height = "900px";
                body.style.overflow = "scroll";

            }else if(z.style.cursor === "zoom-out"){
                
                z.style.cursor = "zoom-in";
                z.style.width = "100%";
                z.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (a.style.display === "block") {

            if (a.style.cursor === "zoom-in") {
                
                a.style.cursor = "zoom-out";
                a.style.width = "1600px";
                a.style.height = "1200px";
                body.style.overflow = "scroll";

            }else if(a.style.cursor === "zoom-out"){
                
                a.style.cursor = "zoom-in";
                a.style.width = "100%";
                a.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (b.style.display === "block") {

            if (b.style.cursor === "zoom-in") {
                
                b.style.cursor = "zoom-out";
                b.style.width = "1500px";
                b.style.height = "2200px";
                body.style.overflow = "scroll";

            }else if(b.style.cursor === "zoom-out"){
                
                b.style.cursor = "zoom-in";
                b.style.width = "100%";
                b.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (c.style.display === "block") {

            if (c.style.cursor === "zoom-in") {
                
                c.style.cursor = "zoom-out";
                c.style.width = "1800px";
                c.style.height = "1500px";
                body.style.overflow = "scroll";

            }else if(c.style.cursor === "zoom-out"){
                
                c.style.cursor = "zoom-in";
                c.style.width = "100%";
                c.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (d.style.display === "block") {

            if (d.style.cursor === "zoom-in") {
                
                d.style.cursor = "zoom-out";
                d.style.width = "1900px";
                d.style.height = "1300px";
                body.style.overflow = "scroll";

            }else if(d.style.cursor === "zoom-out"){
                
                d.style.cursor = "zoom-in";
                d.style.width = "100%";
                d.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (e.style.display === "block") {

            if (e.style.cursor === "zoom-in") {
                
                e.style.cursor = "zoom-out";
                e.style.width = "1900px";
                e.style.height = "1500px";
                body.style.overflow = "scroll";

            }else if(e.style.cursor === "zoom-out"){
                
                e.style.cursor = "zoom-in";
                e.style.width = "100%";
                e.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (f.style.display === "block") {

            if (f.style.cursor === "zoom-in") {
                
                f.style.cursor = "zoom-out";
                f.style.width = "1900px";
                f.style.height = "1500px";
                body.style.overflow = "scroll";

            }else if(f.style.cursor === "zoom-out"){
                
                f.style.cursor = "zoom-in";
                f.style.width = "100%";
                f.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (g.style.display === "block") {

            if (g.style.cursor === "zoom-in") {
                
                g.style.cursor = "zoom-out";
                g.style.width = "1900px";
                g.style.height = "1300px";
                body.style.overflow = "scroll";

            }else if(g.style.cursor === "zoom-out"){
                
                g.style.cursor = "zoom-in";
                g.style.width = "100%";
                g.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (h.style.display === "block") {

            if (h.style.cursor === "zoom-in") {
                
                h.style.cursor = "zoom-out";
                h.style.width = "1700px";
                h.style.height = "1350px";
                body.style.overflow = "scroll";

            }else if(h.style.cursor === "zoom-out"){
                
                h.style.cursor = "zoom-in";
                h.style.width = "100%";
                h.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else {

            if (i.style.cursor === "zoom-in") {
                
                i.style.cursor = "zoom-out";
                i.style.width = "1700px";
                i.style.height = "1350px";
                body.style.overflow = "scroll";

            }else if(i.style.cursor === "zoom-out"){
                
                i.style.cursor = "zoom-in";
                i.style.width = "100%";
                i.style.height = "100%";
                body.style.overflow = "auto";

            }
        }
    }

    function hrmnext(){

        var previous = document.getElementById("previous");
        var next = document.getElementById("next");

        var x = document.getElementById("1");
        var xx = document.getElementById("admin");

        var y = document.getElementById("2");
        var yy = document.getElementById("user");

        var z = document.getElementById("3");
        var zz = document.getElementById("employee");

        var a = document.getElementById("4");
        var aa = document.getElementById("candidategrid");

        var b = document.getElementById("5");
        var bb = document.getElementById("candidatelist");

        var c = document.getElementById("6");
        var cc = document.getElementById("department");

        var d = document.getElementById("7");
        var dd = document.getElementById("designation");

        var e = document.getElementById("8");
        var ee = document.getElementById("leaveapply");

        var f = document.getElementById("9");
        var ff = document.getElementById("employeeleavemanage");

        var g = document.getElementById("10");
        var gg = document.getElementById("dailyattendane");

        var h = document.getElementById("11");
        var hh = document.getElementById("feedbakorComplaine");

        var i = document.getElementById("12");
        var ii = document.getElementById("complainelist");

        if (x.style.display === "block") {

            $("#previous").addClass("active");
            previous.style.display = "block";
            next.style.display = "block";

            y.style.display = "block";
            yy.style.display = "block";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "none";
            ii.style.display = "none";
        
        }else if (y.style.display === "block") {

            // $("#previous").addClass("active");
            // previous.style.display = "block";
            // next.style.display = "block";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "block";
            zz.style.display = "block";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "none";
            ii.style.display = "none";

        }else if (z.style.display === "block") {

            // $("#previous").addClass("active");
            // previous.style.display = "block";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "block";
            aa.style.display = "block";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "none";
            ii.style.display = "none";

        }else if (a.style.display === "block") {

            // $("#previous").addClass("active");
            // previous.style.display = "block";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "block";
            bb.style.display = "block";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "none";
            ii.style.display = "none";

        }else if (b.style.display === "block") {

            // $("#previous").addClass("active");
            // previous.style.display = "block";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "block";
            cc.style.display = "block";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "none";
            ii.style.display = "none";

        }else if (c.style.display === "block") {

            // $("#previous").addClass("active");
            // previous.style.display = "block";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "block";
            dd.style.display = "block";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "none";
            ii.style.display = "none";

        }else if (d.style.display === "block") {

            // $("#previous").addClass("active");
            // previous.style.display = "block";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "block";
            ee.style.display = "block";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "none";
            ii.style.display = "none";

        }else if (e.style.display === "block") {

            // $("#previous").addClass("active");
            // previous.style.display = "block";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "block";
            ff.style.display = "block";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "none";
            ii.style.display = "none";

        }else if (f.style.display === "block") {

            // $("#previous").addClass("active");
            // previous.style.display = "block";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "block";
            gg.style.display = "block";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "none";
            ii.style.display = "none";
        }else if (g.style.display === "block") {

            // $("#previous").addClass("active");
            // previous.style.display = "block";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "block";
            hh.style.display = "block";

            i.style.display = "none";
            ii.style.display = "none";
        }else{

            // $("#previous").addClass("active");
            // previous.style.display = "block";
            $("#next").removeClass("active");
            next.style.display = "none";

            y.style.display = "none";
            yy.style.display = "none";

            x.style.display = "none";
            xx.style.display = "none";

            z.style.display = "none";
            zz.style.display = "none";

            a.style.display = "none";
            aa.style.display = "none";

            b.style.display = "none";
            bb.style.display = "none";

            c.style.display = "none";
            cc.style.display = "none";

            d.style.display = "none";
            dd.style.display = "none";

            e.style.display = "none";
            ee.style.display = "none";

            f.style.display = "none";
            ff.style.display = "none";

            g.style.display = "none";
            gg.style.display = "none";

            h.style.display = "none";
            hh.style.display = "none";

            i.style.display = "block";
            ii.style.display = "block";
        }
    }

function hrmprevious(){

    var previous = document.getElementById("previous");
    var next = document.getElementById("next");

    var x = document.getElementById("1");
    var xx = document.getElementById("admin");

    var y = document.getElementById("2");
    var yy = document.getElementById("user");

    var z = document.getElementById("3");
    var zz = document.getElementById("employee");

    var a = document.getElementById("4");
    var aa = document.getElementById("candidategrid");

    var b = document.getElementById("5");
    var bb = document.getElementById("candidatelist");

    var c = document.getElementById("6");
    var cc = document.getElementById("department");

    var d = document.getElementById("7");
    var dd = document.getElementById("designation");

    var e = document.getElementById("8");
    var ee = document.getElementById("leaveapply");

    var f = document.getElementById("9");
    var ff = document.getElementById("employeeleavemanage");

    var g = document.getElementById("10");
    var gg = document.getElementById("dailyattendane");

    var h = document.getElementById("11");
    var hh = document.getElementById("feedbakorComplaine");

    var i = document.getElementById("12");
    var ii = document.getElementById("complainelist");
    
    if (y.style.display === "block") {

        $("#previous").removeClass("active");
        previous.style.display = "none";
        // next.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "block";
        xx.style.display = "block";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else if (z.style.display === "block") {

        // $("#previous").addClass("active");
        // previous.style.display = "block";

        y.style.display = "block";
        yy.style.display = "block";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else if (a.style.display === "block") {

        // $("#previous").addClass("active");
        // previous.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "block";
        zz.style.display = "block";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else if (b.style.display === "block") {

        // $("#previous").addClass("active");
        // previous.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "block";
        aa.style.display = "block";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else if (c.style.display === "block") {

        // $("#previous").addClass("active");
        // previous.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "block";
        bb.style.display = "block";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else if (d.style.display === "block") {

        // $("#previous").addClass("active");
        // previous.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "block";
        cc.style.display = "block";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else if (e.style.display === "block") {

        // $("#previous").addClass("active");
        // previous.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "block";
        dd.style.display = "block";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else if (f.style.display === "block") {

        // $("#previous").addClass("active");
        // previous.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "block";
        ee.style.display = "block";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else if (g.style.display === "block") {

        // $("#previous").addClass("active");
        // previous.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "block";
        ff.style.display = "block";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else if (h.style.display === "block") {

        // $("#previous").addClass("active");
        // previous.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "block";
        gg.style.display = "block";

        h.style.display = "none";
        hh.style.display = "none";

        i.style.display = "none";
        ii.style.display = "none";

    }else{            

        $("#next").addClass("active");
        next.style.display = "block";

        y.style.display = "none";
        yy.style.display = "none";

        x.style.display = "none";
        xx.style.display = "none";

        z.style.display = "none";
        zz.style.display = "none";

        a.style.display = "none";
        aa.style.display = "none";

        b.style.display = "none";
        bb.style.display = "none";

        c.style.display = "none";
        cc.style.display = "none";

        d.style.display = "none";
        dd.style.display = "none";

        e.style.display = "none";
        ee.style.display = "none";

        f.style.display = "none";
        ff.style.display = "none";

        g.style.display = "none";
        gg.style.display = "none";

        h.style.display = "block";
        hh.style.display = "block";

        i.style.display = "none";
        ii.style.display = "none";

    }
}


</script>