<?php

class AdminController extends BaseController {

	protected $layout = 'layouts.admin';
	
	public function login(){
		$this->layout->content = View::make('admin.login');
	}
	public function postLogin(){
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
		    return Redirect::to('admin/dashboard')->with('message', 'You are now logged in!');
		} else {
		    return Redirect::to('admin/login')
		        ->with('message', 'Your username/password combination was incorrect')
		        ->withInput();
		}
	}
	public function dashboard(){
		$categories = Category::all();
		$this->layout->content = View::make('admin.dashboard', array('categories' => $categories));		
	}
	public function postItem(){
		$path = 'uploads/';
		$filename = Input::file('thumbnail')->getClientOriginalName();
		$success = Input::file('thumbnail')->move($path, $filename);
		if($success){
			$item = new Profile;
			$item->cat_id = Input::get('category');
			$item->name = Input::get('name');
			$item->price = Input::get('price');
			$item->img_path = $path . Input::file('thumbnail')->getClientOriginalName();
			$item->especifications = Input::get('especifications','');
			$item->services = Input::get('services','');
			$item->documents = Input::get('docs','');
			$item->save();
			return Redirect::to('admin/dashboard');
		}else{
			return 'Error al guardar el item';
		}
		
	}
	public function postCategory(){

		return Redirect::to('admin/dashboard');
	}
	public function postOffer(){
		return Redirect::to('admin/dashboard');
	}
	public function logout(){
		Auth::logout();
		return Redirect::to('admin/login');
	}
}
