<?php

namespace Modules\SICA\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

// use Modules\SICA\Database\Factories\ModulesFactory;

class Module extends Model
{
    use HasFactory;

    protected $table = "modules";
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "name",
        "description",
        "icon",
        "slug",
    ];

    public function apps(): HasMany
    {
        return $this->hasMany(App::class, "modules_id");
    }
}
