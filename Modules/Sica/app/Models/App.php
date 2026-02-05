<?php

namespace Modules\Sica\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// use Modules\Sica\Database\Factories\AppFactory;

class App extends Model
{
    use HasFactory;

    protected $table = "apps";


    protected $fillable = [
        "name",
        "description",
        "icon",
        "url",
        "is_active",
        "module_id"
    ];

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class, "module_id");
    }
}
