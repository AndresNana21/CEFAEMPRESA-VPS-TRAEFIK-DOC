<?php

namespace Modules\Sica\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Sica\Database\Factories\PasheFactory;

class Pashe extends Model
{
    use HasFactory;


    protected $table = "pashes";
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "number",
        "start_date",
        "end_date",
        "state",
    ];
    // protected static function newFactory(): PasheFactory
    // {
    //     // return PasheFactory::new();
    // }
}
