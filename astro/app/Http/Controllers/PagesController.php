<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages/welcome');
    }

    public function getAbout(){
        return view('pages/about');
    }

    public function getTeam(){
        return view('pages/team');
    }

    public function getLogin(){
        return view('pages/login');
    }

    public function getRegister(){
        return view('pages/register');
    }
}