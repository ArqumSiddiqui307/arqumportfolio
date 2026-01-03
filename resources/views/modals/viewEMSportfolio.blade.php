<style>
    /* ---------------------------------- */
    /* MODAL SIZING & THEME ADJUSTMENTS */
    /* ---------------------------------- */

    /* Modal dialog ko bada karte hain taaki screenshots theek se dikhein */
    #getmeImageEMS .modal-dialog {
        max-width: 90%; /* Screen ka 90% use karein */
        width: 900px; /* Ya ek fixed badi width */
        margin: 1.75rem auto;
    }
    
    /* Modal content ko dark theme aur rounded corners dete hain */
    #getmeImageEMS .modal-content {
        background-color: #1a1a1a; /* Dark background jo aapki theme se match ho */
        border: 1px solid #333;
        border-radius: 10px;
        width: 100%; /* Default 100% rakhein */
        margin-left: 0;
    }
    
    /* Modal Header & Title Color */
    .modal-header {
        border-bottom: 1px solid #333; /* Darker border */
    }

    h4.modal-title {
        color: #FFFFFF; /* White text for modal title */
        font-weight: 700;
        /* Padding hata diya hai, Bootstrap khud manage karega */
    }
    
    /* Close button ka color */
    .modal-header .close {
        color: #FFFFFF;
        opacity: 0.8; /* Thoda sa transparent */
    }

    /* Modal Body (Screen container) */
    .modal-body#body {
        height: 80vh; /* Viewport height ka 80% */
        overflow-y: auto; /* Sirf y-axis par scroll bar allow karein */
        overflow-x: hidden;
        padding: 15px;
    }

    /* ---------------------------------- */
    /* PAGINATION STYLES */
    /* ---------------------------------- */
    
    /* Pagination Active State: Aapke theme color #100f3a (Dark Blue) */
    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #100f3a;
        border-color: #100F37;
        font-weight: 600;
    }

    /* Pagination Default/Inactive Link */
    .page-link {
        color: #fff!important; /* White color for dark theme */
        background-color: #2b2b2b!important; /* Dark grey background */
        border: 1px solid #444!important;
    }
    
    /* Pagination Hover State: Neon green accent use kar sakte hain ya dark blue */
    .page-link:hover {
        color: #74E820!important; /* Neon Green text on hover */
        background-color: #2b2b2b!important; 
        border-color: #74E820!important; /* Neon Green border on hover */
    }

    /* Page Navigation Text Color */
    .pagination-text {
        color: #FFFFFF; /* White text for 'Page Navigation' */
        margin: 0px 10px;
        line-height: 38px; /* Links ke mutabiq height maintain karein */
    }

    /* ---------------------------------- */
    /* IMAGE & HEADING STYLES */
    /* ---------------------------------- */
    
    /* Image Title Color: Neon Green accent color */
    h5 {
        font-size: 16px!important;
        color: #74E820!important; /* Neon Green accent */
        font-weight: 600;
        margin-top: 10px;
        margin-bottom: 15px;
    }
    
    /* Image style ko reset kar rahe hain taaki 100% width aur zoom-in cursor default ho */
    .img-fluid, .img-thumbnail {
        max-width: 100%!important; /* Default fit modal width */
        width: 100%; /* Default to 100% of parent */
        height: auto;
        min-height: auto;
        border: 1px solid #444; /* Thoda sa dark border */
        cursor: zoom-in; /* Initial cursor */
        transition: all 0.3s ease; /* Smooth transition for zoom */
    }
    
    /* Zoom-out cursor jab image full size ho */
    .img-fluid.zoom-out-cursor {
        cursor: zoom-out !important;
    }

    /* Loader/Spinner Style (Z-index theek kiya) */
    #loader{
        display:none;
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
        background: url(http://www.nvidia.com/docs/IO/151309/loader.gif);
        z-index: 1051; /* Modal se zyada */
        background-color: rgba(0, 0, 0, 0.7); /* Thoda dark overlay */
        background-repeat: no-repeat;
        background-position: 50% 50%;
    }

    /* Zoom Wrapper (keep as is) */
    .zoom {
        display: block; /* Full width le sake */
        position: relative;
    }
    
    .zoom img {
        display: block;
    }
</style>

<?php
    // $i variable ki zaroorat yahan nahi hai agar aap sirf $hrmimage ko use kar rahe hain
    $hrmimage[0] = "DashBoard.png";
    $hrmimage[1] = "PendingEvent.png";
    $hrmimage[2] = "ApprovedEvent.png";
    $hrmimage[3] = "DeclinedEvents.png";
    $hrmimage[4] = "EventReport.png";
?>
<div class="modal fade" id="getmeImageEMS" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div id="loader"></div>
            <div class="modal-header">
                <h4 class="modal-title" id="modalTitle">Arqum Portfolio (EMS)</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background: white; border: none; font-size: 20px;">&times;</button>
            </div>
            <div class="modal-body" id="body">
                <center>
                <ul class="pagination" style="display: inline-flex;">
                    <li class="paginate_button page-item previous" id="previous" style="display: none;">
                        <a href="#" onclick="hrmprevious()" class="page-link">Previous</a>
                    </li>
                    <li class="pagination-text">Page Navigation</li> 
                    <li class="paginate_button page-item next active" id="next">
                        <a href="#" onclick="hrmnext()" class="page-link">Next</a>
                    </li>
                </ul>
                </center>
                
                <center><h5 id="admin">Dashboard</h5></center>
                <center><h5 id="user" style="display: none;">Pending Events</h5></center>
                <center><h5 id="employee" style="display: none;">Approved Events</h5></center>
                <center><h5 id="candidategrid" style="display: none;">Declined Events</h5></center>
                <center><h5 id="candidatelist" style="display: none;">Events Report</h5></center>
                
                <span class='zoom' id='ex2'>
                    <img class="img-fluid img-thumbnail" id="1" src="{{ URL::to('images/EMS/')}}/{{$hrmimage[0]}}" onclick="cursor('1')" style="display: block;"/> 
                    <img class="img-fluid img-thumbnail" id="2" src="{{ URL::to('images/EMS/')}}/{{$hrmimage[1]}}" onclick="cursor('2')" style="display: none;"/>
                    <img class="img-fluid img-thumbnail" id="3" src="{{ URL::to('images/EMS/')}}/{{$hrmimage[2]}}" onclick="cursor('3')" style="display: none;"/>
                    <img class="img-fluid img-thumbnail" id="4" src="{{ URL::to('images/EMS/')}}/{{$hrmimage[3]}}" onclick="cursor('4')" style="display: none;"/>
                    <img class="img-fluid img-thumbnail" id="5" src="{{ URL::to('images/EMS/')}}/{{$hrmimage[4]}}" onclick="cursor('5')" style="display: none;"/>
                </span>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #333; background-color: #1a1a1a;">
                </div>
        </div>
    </div>
</div>

<script>      

// Image index tracking ke liye variable use kiya
let currentImageIndex = 1;
const totalImages = 5;

// All image IDs and their corresponding title IDs
const imageIds = ["1", "2", "3", "4", "5"];
const titleIds = ["admin", "user", "employee", "candidategrid", "candidatelist"];
// Aapki custom zoom size
const zoomWidths = {
    "1": "1700px", "2": "1800px", "3": "1800px", 
    "4": "1600px", "5": "1500px" 
};
const zoomHeights = {
    "1": "1150px", "2": "900px", "3": "900px", 
    "4": "1200px", "5": "2200px" 
};

// Image zoom in/out function
function cursor(imageId) {
    const img = document.getElementById(imageId);
    const body = document.getElementById("body");

    // Check if the image is currently zoomed in (cursor is zoom-out)
    if (img.classList.contains("zoom-out-cursor")) {
        // Zoom-out: Image ko wapas chota karein
        img.classList.remove("zoom-out-cursor");
        img.style.cursor = "zoom-in";
        img.style.width = "100%";
        img.style.height = "auto";
        // Scrollbar reset karein
        body.style.overflow = "auto";
    } else {
        // Zoom-in: Image ko bada karein
        img.classList.add("zoom-out-cursor");
        img.style.cursor = "zoom-out";
        // Custom zoom size apply karein
        img.style.width = zoomWidths[imageId];
        img.style.height = zoomHeights[imageId];
        // Modal body mein scroll enable karein
        body.style.overflow = "scroll";
    }
}

// Image aur navigation display ko update karta hai
function updateImageDisplay() {
    const previousButton = document.getElementById("previous");
    const nextButton = document.getElementById("next");
    const body = document.getElementById("body");
    
    // Sabhi images aur titles ko hide karein aur zoom reset karein
    imageIds.forEach((id, index) => {
        const img = document.getElementById(id);
        document.getElementById(titleIds[index]).style.display = "none";
        img.style.display = "none";
        
        // Ensure image is reset to default size and zoom-in cursor
        img.classList.remove("zoom-out-cursor");
        img.style.cursor = "zoom-in";
        img.style.width = "100%";
        img.style.height = "auto";
    });

    // Current image aur title ko display karein
    document.getElementById(imageIds[currentImageIndex - 1]).style.display = "block";
    document.getElementById(titleIds[currentImageIndex - 1]).style.display = "block";

    // Pagination buttons ki visibility set karein
    if (currentImageIndex <= 1) {
        $("#previous").removeClass("active")[0].style.display = "none";
    } else {
        $("#previous").addClass("active")[0].style.display = "block";
    }

    if (currentImageIndex >= totalImages) {
        $("#next").removeClass("active")[0].style.display = "none";
    } else {
        $("#next").addClass("active")[0].style.display = "block";
    }
    
    // Scrollbar reset karein taaki har naye image par top par ho
    body.scrollTop = 0;
    body.style.overflow = "auto"; 
}

function hrmnext() {
    if (currentImageIndex < totalImages) {
        currentImageIndex++;
        updateImageDisplay();
    }
}

function hrmprevious() {
    if (currentImageIndex > 1) {
        currentImageIndex--;
        updateImageDisplay();
    }
}

// Initial display setup (Jab modal load ho)
$(document).ready(function() {
    // Agar aapko modal open hone par display set karna hai
    $('#getmeImageEMS').on('shown.bs.modal', function () {
        currentImageIndex = 1; // Hamesha first image se start karein
        updateImageDisplay();
    });
    
    // Yeh bhi call kar sakte hain agar modal content directly inject ho raha hai
    updateImageDisplay(); 
});
</script>