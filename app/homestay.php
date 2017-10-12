<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homestay extends Model
{
    protected $table = 'homestays';
    protected $primarykey = 'id';
    protected $fillable = ['name_homestay','address','description'];

}
