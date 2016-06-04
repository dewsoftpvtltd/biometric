<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Candidate;
use App\Data;
use App\Party;

class ElectionController extends Controller
{
    public function getIndex(){

    	return view('front');
    }
    public function getAbout(){

    	return view('about');
    }
    public function getContact(){

    	return view('contact');
    }
    public function getFaq(){

    	return view('faqs');
    }
    public function getDownloads(){

    	return view('downloads');
    }
     public function getResults(){
      $candidatesConstituencyMaxPk = Candidate::where('ConstType','=','PK')->where('ConstNumber','=','1')->max('Votes');
      $candidatesConstituencyMaxNa = Candidate::where('ConstType','=','NA')->where('ConstNumber','=','1')->max('Votes');

      $candidatePk = Candidate::where('Votes',$candidatesConstituencyMaxPk)->get();
      $candidateNa = Candidate::where('Votes',$candidatesConstituencyMaxNa)->get();

    	return view('results',[
    		'candidateNa'=>$candidateNa,
        'candidatePk'=>$candidatePk,

    		]);
    }
         public function getParties(){
        $party = Party::all();
        return view('parties',[
            'party'=>$party
            ]);
    }
     public function getData(){

        $data = Data::find(1);

        return view('data',[

            'data'=>$data

            ]);

    }


}
