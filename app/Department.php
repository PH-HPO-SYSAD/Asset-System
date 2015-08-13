<?php

namespace HPOInventory;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $primaryKey = 'department_id';
    protected $fillable = ['code', 'name'];

 }
