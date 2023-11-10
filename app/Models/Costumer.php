<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Costumer extends Model
{
    use HasFactory;
    //se ingresan los datos en base a atributos de la base de datos
    protected $fillable = [
        'name',
        'type',
        'email',
        'address',
        'city',
        'state',
        'postal_code',
    ];
    
    /**
     * Get all of the invoices for the Costumer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    //un cliente puede tener varias llamadas
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
