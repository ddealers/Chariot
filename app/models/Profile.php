<?php
class Profile extends Eloquent{
	protected $table = 'profiles';
	protected $fillable = array('cat_id, name, price, img_path, especifications, services, documents');
}