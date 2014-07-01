<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $layout = 'layouts.master';
	
	public function index(){
		$this->layout->content = View::make('index');
	}
	public function categorias($cat = null){
		if($cat){
			$category = Category::where('name','=',$cat)->first();
			echo $category->id;
			$categories = Category::where('parent_id','=',$category->id);
		}else{
			$categories = Category::all();
		}
		$this->layout->content = View::make('categorias', array('categories' => $categories));
	}
	public function ofertas(){
		$this->layout->content = View::make('categorias');
	}
	public function detalle(){
		$this->layout->content = View::make('ficha_tecnica');
	}
	public function contacto(){
		$this->layout->content = View::make('contacto');
	}
}
