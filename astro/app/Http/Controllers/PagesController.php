<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages/welcome');
    }

    public function getAbout(){
        $gname = 'DROP';
        $ggname = 'TABLES';
        $course = 'CPSC 304';
        $full = $gname . " " . $ggname;

        $data = [];
        $data['course'] = $course;
        $data['fullname'] = $full;

        return view('pages/about')->withData($data);
    }

    public function getContact(){
        return view('pages/contact');
    }
}