<?php

namespace Modules\Sica\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Sica\Database\Factories\ModuleFactory;

class Module extends Model
{
    use HasFactory;


    protected $table = "modules";


    protected $fillable = [
        "name",
        "description",
    ];
    // protected static function newFactory(): ModuleFactory
    // {
    //     // return ModuleFactory::new();
    // }
}
