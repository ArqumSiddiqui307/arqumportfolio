<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class arqumportfoliocontroller extends Controller
{
    public function viewportfolioFamehrmsApp($id){
        
        if($id == "FAMEHRMS-Job-Portal-APP.jpeg"){

            return view('modals.viewFamehrmsAppPortfolio',['i' => $id]);

        }
    }
    public function viewportfoliohrms($id){
        
        if($id == "HRMS-admin-dashboadd1.png"){

            return view('modals.viewhrmsportfolio',['i' => $id]);

        }
    }

    public function viewportfolioJP($id){
        
        if($id == "HRMS-Job-Portal.png"){

            return view('modals.viewJPportfolio',['i' => $id]);

        }
    }

    public function viewportfolioES($id){
        
        if($id == "SCHEDULING.jpg"){

            return view('modals.viewESportfolio',['i' => $id]);

        }
    }

    public function viewportfolioMobily($id){
        
        if($id == "MobilyLLC.png"){
            
            return view('modals.viewmobilyportfolio',['i' => $id]);

        }
    }

    public function viewportfolioMobilelink($id){
        
        if($id == "CallingTree.jpg"){

            return view('modals.viewmobilelinkportfolio',['i' => $id]);

        }
    }

    public function viewportfolioEMS($id){
        
        if($id == "EMS.jpg"){

            return view('modals.viewEMSportfolio',['i' => $id]);

        }
    }

    public function viewportfolioPayroll($id){
        
        if($id == "PayRoll.jpg"){

            return view('modals.viewpayrollportfolio',['i' => $id]);

        }
    }
}
