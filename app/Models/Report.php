<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports'; // Nombre de la tabla en la base de datos

    protected $fillable = ['stationID', 'date', 'quantity', 'able'];

    public function alerts()
    {
        return $this->hasMany(Alert::class, 'reportID');
    }
    

}
