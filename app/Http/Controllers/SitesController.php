<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;

class SitesController extends Controller
{
    
    public function index() {
        
        //$sites = Site::all();
        
       // return view('sites.index', compact('sites'));
        return view('layouts.index');
    }
    
    public function oferta() {
        
        return view('layouts.oferta');
    } 
    
      public function kontakt() {
        
        return view('layouts.kontakt');
    } 
    
    public function zdjecia() {
        return view('yield.zdjecia');
    }
    
    
    
    public function register(Request $request) {
        
        $site = new \App\Site();
        $site->login = $request->input('login');
        $site->email = $request->input('email');
        $site->passwd = $request->input('passwd');
        $site->confPass = $request->input('confPass');
        $site->save();
    }
}
