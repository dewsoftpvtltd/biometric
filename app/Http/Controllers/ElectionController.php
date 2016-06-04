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
    	$candidate = Candidate::all();
    	$data = Data::all();
    	$party = Party::find(1);
    	//dd($party->Name);
    	return view('front',[
    		'candidate'=>$candidate,
    		'data'=>$data,
    		'party'=>$party
    		]);
    }
    public function getAbout(){
    	$candidate = Candidate::all();
    	$data = Data::all();
    	$party = Party::find(1);
    	//dd($party->Name);
    	return view('about',[
    		'candidate'=>$candidate,
    		'data'=>$data,
    		'party'=>$party
    		]);
    }
    public function getContact(){
    	$candidate = Candidate::all();
    	$data = Data::all();
    	$party = Party::find(1);
    	//dd($party->Name);
    	return view('contact',[
    		'candidate'=>$candidate,
    		'data'=>$data,
    		'party'=>$party
    		]);
    }
    public function getFaq(){
    	$candidate = Candidate::all();
    	$data = Data::all();
    	$party = Party::find(1);
    	//dd($party->Name);
    	return view('faqs',[
    		'candidate'=>$candidate,
    		'data'=>$data,
    		'party'=>$party
    		]);
    }
    public function getDownloads(){
    	$candidate = Candidate::all();
    	$data = Data::all();
    	$party = Party::find(1);
    	//dd($party->Name);
    	return view('downloads',[
    		'candidate'=>$candidate,
    		'data'=>$data,
    		'party'=>$party
    		]);
    }
     public function getResults(){
      $candidatesConstituencyMaxPk = Candidate::where('ConstType','=','PK')->where('ConstNumber','=','1')->max('Votes');
      $candidatesConstituencyMaxNa = Candidate::where('ConstType','=','NA')->where('ConstNumber','=','1')->max('Votes');

      $candidatePk = Candidate::where('Votes',$candidatesConstituencyMaxPk)->get();
      $candidateNa = Candidate::where('Votes',$candidatesConstituencyMaxNa)->get();

      //dd($candidate);
    	$data = Data::all();
    	$party = Party::find(1);
    	//dd($party->Name);
    	return view('results',[
    		'candidateNa'=>$candidateNa,
        'candidatePk'=>$candidatePk,
    		'data'=>$data,
    		'party'=>$party
    		]);
    }
         public function getParties(){
        $candidate = Candidate::find(1);
        $data = Data::all();
        $party = Party::all();
        //dd($party->Name);
        return view('parties',[
            'candidate'=>$candidate,
            'data'=>$data,
            'party'=>$party
            ]);
    }
     public function getData(){
        $candidate = Candidate::find(1);
        $data = Data::find(1);
        $party = Party::find(1);
        //dd($party->Name);
        return view('data',[
            'candidate'=>$candidate,
            'data'=>$data,
            'party'=>$party
            ]);

    }


}
