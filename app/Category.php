<?php

namespace HPOInventory;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $primaryKey = 'category_id';
    protected $fillable = ['code', 'name'];

    public function assets(){
    	return $this->hasMany(Asset::class);
    }
    
}
