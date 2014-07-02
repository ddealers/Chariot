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
	public function categorias($cat = NULL){
		if($cat){
			$category = Category::where('slug', '=', $cat)->first();
			$categories = ($category != NULL) ? Category::where('parent_id', '=', $category->id)->get() : NULL;
			$items = ($category != NULL) ? Profile::where('cat_id', '=', $category->id)->get() : NULL;
		}else{
			$category = NULL;
			$items = NULL;
			$categories = Category::all();
		}
		$title = ($category) ? $category->name : 'Categorías';
		$this->layout->content = View::make('categorias', array('title' => $title, 'items' => $items, 'categories' => $categories));
	}
	public function ofertas(){
		$category = Category::where('slug', '=', 'ofertas')->first();
		$categories = ($category != NULL) ? Category::where('parent_id', '=', $category->id)->get() : NULL;
		$items = ($category != NULL) ? Profile::where('cat_id', '=', $category->id)->get() : NULL;
		$title = ($category) ? $category->name : 'Ofertas de Temporada';
		$this->layout->content = View::make('categorias', array('title' => $title, 'items' => $items, 'categories' => $categories));
	}
	public function detalle($id){
		$item = Profile::find($id);
		$this->layout->content = View::make('ficha_tecnica', array('item' => $item));
	}
	public function contacto(){
		$this->layout->content = View::make('contacto');
	}
}
