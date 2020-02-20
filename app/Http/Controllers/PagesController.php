<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function index(){
		$title = 'Welcome to laravel';
		return view('pages.index')->with('title', $title);
	}

	public function about(){
		$about = 'About us';
		return view('pages.about')->with('title,$about');
	}

	public function services(){
		$data = array(
			'title' => 'Services Page',
			'services' => ['Web Design', 'Development', 'SEO']
		);
		return view('pages.services')->with($data);
	}


	//hello
    public function hello(){
    	// return view('hello')->with('name', 'Homer Simpson');

    	$info = array(
    		'front_end' => 'Tuitt Coding Bootcamp',
    		'topics' => ['HTML', 'CSS', 'JS', 'PHP', 'Laravel']
    	);

    	return view('hello')->with($info);
    }

   public function miniProfile(){
   		return view('mini-profile');
   }

   public function hobbies(){
   		return view('hobbies');
   }

   public function goals(){
   		return view('goals');
   }

   public function welcome(){
   		return view('welcome');
   }
}
