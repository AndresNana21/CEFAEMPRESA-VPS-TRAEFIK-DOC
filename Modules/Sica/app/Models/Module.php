<?php

namespace Modules\Sica\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

// use Modules\Sica\Database\Factories\ModuleFactory;

class Module extends Model
{
    use HasFactory;


    protected $table = "modules";


    protected $fillable = [
        "name",
        "description",
    ];


    // Nueva relación: Un módulo tiene muchas apps
    public function apps(): HasMany
    {
        return $this->hasMany(App::class, "module_id");
    }
    // protected static function newFactory(): ModuleFactory
    // {
    //     // return ModuleFactory::new();
    // }
}
