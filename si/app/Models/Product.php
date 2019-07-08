<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $table = "products";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'big_size', 'medium_size', 'small_size', 'category_product_id'
    ];


    /**
     * Change big size
     *
     * @param $value
     */
    public function setBigSizeAttribute($value) {
        $this->attributes['big_size'] = !$value ? 0 : $value;
    }


    /**
     * Change medium size
     *
     * @param $value
     */
    public function setMediumSizeAttribute($value) {
        $this->attributes['medium_size'] = !$value ? 0 : $value;
    }


    /**
     * Change small size
     *
     * @param $value
     */
    public function setSmallSizeAttribute($value) {
        $this->attributes['small_size'] = !$value ? 0 : $value;
    }
}
