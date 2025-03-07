<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $table = 'stations'; // Nombre de la tabla en la base de datos

    protected $fillable = ['name', 'latitude', 'longitude', 'state', 'date'];

    public function alerts()
    {
        return $this->hasMany(Alert::class, 'stationID');
    }
}