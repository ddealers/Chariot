<?php

class AdminController extends BaseController {

	protected $layout = 'layouts.admin';
	
	public function index(){
		$this->layout->content = View::make('index');
	}
	public function categorias($cat = NULL){
		if($cat){
			$category = Category::where('slug', '=', $cat)->first();
			$categories = ($category != NULL) ? Category::where('parent_id', '=', $category->id)->get() : NULL;
		}else{
			$category = NULL;
			$categories = Category::all();
		}
		$title = ($category) ? $category->name : 'Categorías';
		$this->layout->content = View::make('categorias', array('title' => $title, 'items' => NULL, 'categories' => $categories));
	}
	public function ofertas(){
		$category = Category::where('slug', '=', 'ofertas')->first();
		$categories = ($category != NULL) ? Category::where('parent_id', '=', $category->id)->get() : NULL;
		$title = ($category) ? $category->name : 'Ofertas de Temporada';
		$this->layout->content = View::make('categorias', array('title' => $title, 'items' => NULL, 'categories' => $categories));
	}
	public function detalle(){
		$this->layout->content = View::make('ficha_tecnica');
	}
	public function contacto(){
		$this->layout->content = View::make('contacto');
	}
}
