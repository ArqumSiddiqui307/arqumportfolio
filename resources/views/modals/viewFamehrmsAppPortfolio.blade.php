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
    $hrmimage[0] = "Login.jpeg";
    $hrmimage[1] = "Dashboard.jpeg";
    $hrmimage[2] = "Daily-Attendance.jpeg";
    $hrmimage[3] = "Leaves.jpeg";
    $hrmimage[4] = "Menu.jpeg";

    ?>
<div class="modal fade" id="getmeImageHRMS">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 150%;margin-left: -100px;"> 
            <div id="loader"></div>
            <div class="modal-header">
                <h4 class="modal-title">Arqum Portfolio (HRMS)</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background: white; border: none; font-size: 20px;">&times;</button>
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
                <center><h5 id="Login">Login</h5></center>
                <center><h5 id="Dashboard" style="display: none;">Dashboard</h5></center>
                <center><h5 id="Daily-Attendance" style="display: none;">Daily Attendance</h5></center>
                <center><h5 id="Leaves" style="display: none;">Leaves</h5></center>
                <center><h5 id="Menu" style="display: none;">Menu</h5></center>
                <span class='zoom' id='ex2'>
                    <img class="img-fluid img-thumbnail" id="1" src="{{ URL::to('images/FAMEHRM-App/')}}/{{$hrmimage[0]}}" onclick="cursor()" style="display: block; cursor: zoom-in;"/> 
                    <img class="img-fluid img-thumbnail" id="2" src="{{ URL::to('images/FAMEHRM-App/')}}/{{$hrmimage[1]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="3" src="{{ URL::to('images/FAMEHRM-App/')}}/{{$hrmimage[2]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="4" src="{{ URL::to('images/FAMEHRM-App/')}}/{{$hrmimage[3]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
                    <img class="img-fluid img-thumbnail" id="5" src="{{ URL::to('images/FAMEHRM-App/')}}/{{$hrmimage[4]}}" onclick="cursor()" style="display: none; cursor: zoom-in;"/>
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
        var j = document.getElementById("13");
        var k = document.getElementById("14");
        var l = document.getElementById("15");
        var m = document.getElementById("16");
        var n = document.getElementById("17");

        var body = document.getElementById("body");

        if (x.style.display === "block") {

            if (x.style.cursor === "zoom-in") {
                
                x.style.cursor = "zoom-out";
                x.style.width = "1600px";
                x.style.height = "1632px";
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
                y.style.width = "1600px";
                y.style.height = "1632px";
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
                z.style.width = "2000px";
                z.style.height = "1150px";
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
                a.style.height = "2432px";
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
                b.style.width = "1600px";
                b.style.height = "1100px";
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
                c.style.width = "1600px";
                c.style.height = "1100px";
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
                d.style.width = "1600px";
                d.style.height = "1100px";
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
                e.style.width = "1600px";
                e.style.height = "1100px";
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
                f.style.width = "1600px";
                f.style.height = "1100px";
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
                g.style.width = "1400px";
                g.style.height = "1400px";
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
                h.style.height = "800px";
                body.style.overflow = "scroll";

            }else if(h.style.cursor === "zoom-out"){
                
                h.style.cursor = "zoom-in";
                h.style.width = "100%";
                h.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (i.style.display === "block") {

            if (i.style.cursor === "zoom-in") {
                
                i.style.cursor = "zoom-out";
                i.style.width = "1600px";
                i.style.height = "700px";
                body.style.overflow = "scroll";

            }else if(i.style.cursor === "zoom-out"){
                
                i.style.cursor = "zoom-in";
                i.style.width = "100%";
                i.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (j.style.display === "block") {

            if (j.style.cursor === "zoom-in") {
                
                j.style.cursor = "zoom-out";
                j.style.width = "1400px";
                j.style.height = "700px";
                body.style.overflow = "scroll";

            }else if(j.style.cursor === "zoom-out"){
                
                j.style.cursor = "zoom-in";
                j.style.width = "100%";
                j.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (k.style.display === "block") {

            if (k.style.cursor === "zoom-in") {
                
                k.style.cursor = "zoom-out";
                k.style.width = "1400px";
                k.style.height = "700px";
                body.style.overflow = "scroll";

            }else if(k.style.cursor === "zoom-out"){
                
                k.style.cursor = "zoom-in";
                k.style.width = "100%";
                k.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (l.style.display === "block") {

            if (l.style.cursor === "zoom-in") {
                
                l.style.cursor = "zoom-out";
                l.style.width = "1400px";
                l.style.height = "700px";
                body.style.overflow = "scroll";

            }else if(l.style.cursor === "zoom-out"){
                
                l.style.cursor = "zoom-in";
                l.style.width = "100%";
                l.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else if (m.style.display === "block") {

            if (m.style.cursor === "zoom-in") {
                
                m.style.cursor = "zoom-out";
                m.style.width = "1400px";
                m.style.height = "700px";
                body.style.overflow = "scroll";

            }else if(m.style.cursor === "zoom-out"){
                
                m.style.cursor = "zoom-in";
                m.style.width = "100%";
                m.style.height = "100%";
                body.style.overflow = "auto";

            }
        }else {

            if (n.style.cursor === "zoom-in") {
                
                n.style.cursor = "zoom-out";
                n.style.width = "1400px";
                n.style.height = "700px";
                body.style.overflow = "scroll";

            }else if(n.style.cursor === "zoom-out"){
                
                n.style.cursor = "zoom-in";
                n.style.width = "100%";
                n.style.height = "100%";
                body.style.overflow = "auto";

            }
        }

    }

    function hrmnext(){

        var previous = document.getElementById("previous");
        var next = document.getElementById("next");

        var x = document.getElementById("1");
        var xx = document.getElementById("Login");

        var y = document.getElementById("2");
        var yy = document.getElementById("Dashboard");

        var z = document.getElementById("3");
        var zz = document.getElementById("Daily-Attendance");

        var a = document.getElementById("4");
        var aa = document.getElementById("Leaves");

        var b = document.getElementById("5");
        var bb = document.getElementById("Menu");

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

        } else{

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

            b.style.display = "block";
            bb.style.display = "block";

        }
    }

function hrmprevious(){

    var previous = document.getElementById("previous");
    var next = document.getElementById("next");

    var x = document.getElementById("1");
    var xx = document.getElementById("Login");

    var y = document.getElementById("2");
    var yy = document.getElementById("Dashboard");

    var z = document.getElementById("3");
    var zz = document.getElementById("Daily-Attendance");

    var a = document.getElementById("4");
    var aa = document.getElementById("Leaves");

    var b = document.getElementById("5");
    var bb = document.getElementById("Menu");
    
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

    } else {

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

    }

}


</script>