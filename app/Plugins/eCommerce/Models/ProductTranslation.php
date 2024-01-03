<?php

namespace Corp\Plugins\eCommerce\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    //
	public $table = 'ec_product_translations';
	protected $fillable = ['title','text','desc','keywords','meta_desc','oil_change'];

	protected $guarded = ['id'];

}
