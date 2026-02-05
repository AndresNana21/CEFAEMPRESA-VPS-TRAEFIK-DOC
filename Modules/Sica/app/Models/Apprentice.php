<?php

namespace Modules\Sica\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Sica\Database\Factories\ApprenticeFactory;

class Apprentice extends Model
{
    use HasFactory;
    protected $table = 'apprentices';

    protected $fillable = [
        'people_id',
        'ficha_id',
        'state',
    ];

    public function people()
    {
        return $this->belongsTo(Person::class, 'people_id');
    }

    // RELACIÓN CON FICHA
    public function ficha()
    {
        return $this->belongsTo(Ficha::class, 'ficha_id');
    }
}
