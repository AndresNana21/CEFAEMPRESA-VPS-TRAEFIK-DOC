<?php

namespace Modules\Sica\Models;

use Illuminate\Database\Eloquent\Model;
// use Modules\Sica\Database\Factories\FichaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Ficha extends Model
{
    use HasFactory;
    protected $fillable = [
        "number",
        "start_date",
        "end_date",
        "state",
        "program_id",
        "user_id",
        "start_productive"

    ];


    public function program(): BelongsTo
    {
        return $this->BelongsTo(Program::class, "program_id");
    }




    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, "user_id");
    }
}
