<?php

namespace App\Http\Controllers;
use App\AcademicYear;
use App\FeesMaster;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    public function store(Request $request){
    	$py = $request->previousYear;
    	$cy = $request->currentYear;
    	if(is_null($py)){
    		$ac = new AcademicYear;
    		$ac->year = $cy;
    		$ac->save();
    	}else{
    		$ac = new AcademicYear;
    		$ac->year = $cy;
    		$ac->save();
    		//fee creation
    		$pyf = FeesMaster::where('ac_year',$py)->get();
    		foreach($pyf as $e){
    			$fees=new FeesMaster;
		        $fees->course_id=$e->course_id;
		        $fees->fees_type=$e->fees_type;
		        $fees->amount=$e->amount;
		        $fees->semester_id=$e->semester_id;
		        $fees->ac_year=$cy;
		        $fees->save();
    		} 
    	}
    }
}
