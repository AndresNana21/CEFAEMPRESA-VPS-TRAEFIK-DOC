<?php

namespace Modules\Sica\Models;

use Illuminate\Database\Eloquent\Model;
// use Modules\Sica\Database\Factories\PersonFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Hash;

class Person extends Model
{
    use HasFactory;
    protected $table = "people";

    protected $fillable = [
        "first_name",
        "last_name",
        "document_number",
        "type_document",
        "doccument_img",
        "phone_number",
        "second_phone_number",
        "user_id",
        "CV",
    ];


    protected static function booted()
    {
        static::creating(function ($person) {

            // Crear username basado en el primer nombre
            $username = strtolower($person->first_name) . $person->document_number . '@soysena.com';

            // La contraseña será el número de documento
            $password = $person->document_number;

            // Crear el usuario automáticamente
            $user = User::create([
                'name'     => $person->first_name . ' ' . $person->last_name,
                'email'    => $username,
                'password' => Hash::make($password),
            ]);

            // Asignar user_id a la persona antes de guardar
            $person->user_id = $user->id;
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
