<style>
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
    ?>
<div class="modal fade" id="getmeImage">
  <div class="modal-dialog">
        <div class="modal-content"> 
                <div id="loader"></div>
            <div class="modal-header">
                <h4 class="modal-title">Mehroz Portfolio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <center><h5>{{$user[0]}}</h5></center>
           <span class='zoom' id='ex2'>
                        <img class="img-fluid img-thumbnail" src="{{ URL::to('images/')}}/{{$i}}"/>  
                    </span>

                
            </div>
            <div class="modal-footer">
            </div>
            
        </div>
    </div>
</div>

<!-- <script>

        $(document).ready(function(){
            $('#ex1').zoom();
            $('#ex2').zoom({ on:'grab' });
            $('#ex3').zoom({ on:'click' });          
            $('#ex4').zoom({ on:'toggle' });
        });


</script> -->