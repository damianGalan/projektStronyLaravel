<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormValidation;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function onas(){
        return view('zalogowany.onas');
    }

    public function oferta2(){
        return view('zalogowany.oferta2');
    }

    public function kontakt2(){
        return view('zalogowany.kontakt2');
    }

    public function zdjecia2(){
        return view('zalogowany.zdjecia2');
    }

    public function zamow(){
        return view('zalogowany.zamow');
    }


    public function historia(){


        $id = Auth::id();
        $zamowienias=DB::select('select zamowienias.id, sites.osoba, sites.adres, sites.numer, sites.created_at from zamowienias,sites where zamowienias.users_id=? and zamowienias.sites_id=sites.id', array($id));

        $zmienna=collect($zamowienias);
        //echo $zmienna;
        return view('zalogowany.index', compact('zamowienias'));
    }



    public function o_mnie(){


        return view('zalogowany.o_mnie');
    }

    //public function add(){
        
      //  return view('sites.save');
    //}

    public function zamowienias(){
        $id = Auth::id();
        $zamowienias=DB::select('select zamowienias.id, sites.osoba, sites.adres, sites.numer,  from zamowienias,sites where zamowienias.users_id=?', array($id));

        return view('zalogowany.index', compact('zamowienias'));
    }
    
    public function save(FormValidation $request) {
       //dd($request->all());
        $id = Auth::id();
        //$Site::create($request->all());
       
        $site = new \App\Site();
        $site->osoba = $request->input('osoba');
        $site->adres = $request->input('adres');
        $site->numer = $request->input('numer');
        $site->save();

        $zmienna=Site::max('id');

        $zamowienie = new \App\Zamowienia();
        $zamowienie->users_id = $id;
        $zamowienie->sites_id = $zmienna;
        $zamowienie->save();

       return view('zalogowany.zamow');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sites.save');
    }

    public function usun(Request $request){

        $usun = Auth::id();



        $numerPrzycisku = $request->input('przycisk');
        $przycisk = DB::delete('delete from zamowienias where zamowienias.id=? ', array($numerPrzycisku));
        //return view('zalogowany.historia', compact('sites.usun'));
        return $this->historia();
    }

    public function zmien(Request $request){
        $usun = Auth::id();

        $zmienna = $request->input('new');

        $zmiana = DB::update('update users set password=? where id=?', array(bcrypt($zmienna), $usun));
        return view('zalogowany.onas');
    }

    public function form(){
        return view('zalogowany.zamow');
    }

    public function store(FormValidation $request)
    {
        return $request->all();
    }
}
