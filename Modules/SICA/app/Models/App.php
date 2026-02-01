<?php

namespace Modules\SICA\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Modules\SICA\Database\Factories\AppFactory;

class App extends Model
{
    use HasFactory;

    protected $table = "apps";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "name",
        "description",
        "icon",
        "slug",
        "url",
        "module_id",
    ];

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class, "module_id");
    }
}
