<?php
class Category extends Eloquent{
	protected $table = 'categories';
	protected $fillable = array('parent_cat, name, description, img_path');
}