<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LogsController extends Controller
{
    public function index(){
        $title = 'Home screen!';
        //return view('testing.pages.index', compact('title'));
        return view('testing.pages.index')->with('title', $title);
    }

    public function about(){
        //$title = 'About screen';
        $data = array(
            'title' => 'Our team!',
            'team' => ['nume1', 'nume2', 'nume3']
        );
        return view('testing.pages.about')->with($data);
    }
}
