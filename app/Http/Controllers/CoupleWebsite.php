<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CoupleWebsite extends Controller
{
    public function index(Request $request){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(!$request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else{
            
            $users = DB::table('appusers')->where('id',$userid)->get();
            $couplewebsite = DB::table('couplewebsite')->where('coupleid',$userid)->get();
            return view('couple-dashboard-website',['users'=>$users , 'couplewebsite'=>$couplewebsite]); 
        }
    }

    public function submit_website(Request $request){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(!$request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else{

            $couplename = $request->input('couplename');
            $weddingdate = $request->input('weddingdate');
            $weddingplace = $request->input('weddingplace');
            $weddingaddress = $request->input('weddingaddress');
            $contactemail = $request->input('contactemail');
            $contactnumber = $request->input('contactnumber');
            $whatsapp = $request->input('whatsapp');
            $yourstory = $request->input('yourstory');
            $yourproposal = $request->input('yourproposal');

            if($request->hasFile('rsvpformpic'))
            {
                $file = $request->file('rsvpformpic');
                $extention = $file->clientExtension();
                $filename = time().'.'.$extention;
                $file->move('userimage',$filename);
                $rsvpformpic = $filename;
            }
    
            if($request->hasFile('filebutton2'))
            {
                $file = $request->file('filebutton2');
                $extention = $file->clientExtension();
                $filename = time().'.'.$extention;
                $file->move('userimage',$filename);
                $filebutton2 = $filename;
            }
    
            if($request->hasFile('filebutton3'))
            {
                $file = $request->file('filebutton3');
                $extention = $file->clientExtension();
                $filename = time().'.'.$extention;
                $file->move('userimage',$filename);
                $filebutton3 = $filename;
            }
    
            if($request->hasFile('filebutton4'))
            {
                $file = $request->file('filebutton4');
                $extention = $file->clientExtension();
                $filename = time().'.'.$extention;
                $file->move('userimage',$filename);
                $filebutton4 = $filename;
            }

            $userid = Session::get('userid');
            $useremail = Session::get('useremail');
    
            DB::table('couplewebsite')->insert(
                array(
                       'coupleid'   =>   $userid,
                       'coupleemail'   =>   $useremail,
                       'couplename'   =>   $couplename,
                       'weddingdate'   =>   $weddingdate,
                       'weddingplace'   =>   $weddingplace,
                       'weddingaddress'   =>   $weddingaddress,
                       'contactemail'   =>   $contactemail,
                       'contactnumber'   =>   $contactnumber,
                       'whatsapp'   =>   $whatsapp,
                       'yourstory'   =>   $yourstory,
                       'yourproposal'   =>   $yourproposal,
                       'rsvpformpic'   =>   $rsvpformpic,
                       'filebutton2'   =>   $filebutton2,
                       'filebutton3'   =>   $filebutton3,
                       'filebutton4'   =>   $filebutton4,
                )
           );
            
            echo json_encode(['success'=>'Wedding website has been created']);
        }
    }

    public function website($id){
        $weddingwebsite = DB::table('couplewebsite')->where('id', $id)->get();
        return view('weddingwebsite',['weddingwebsite'=>$weddingwebsite]); 
    }

}