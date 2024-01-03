<?php

namespace Corp;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
	use Translatable;

	public $translatedAttributes = ['translation_value'];

	protected $fillable = ['name','value'];




}
