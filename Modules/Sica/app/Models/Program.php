<?php

namespace Modules\Sica\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Sica\Database\Factories\ProgramFactory;

class Program extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     */

    protected $table = "programs";

    protected $fillable = [
        "name",
        "description",
        "type_program",
    ];
}
