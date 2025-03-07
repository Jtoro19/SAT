<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;

    protected $table = 'alerts'; // Nombre de la tabla en la base de datos

    protected $fillable = ['reportID', 'type', 'alertIntensity'];

    public function report()
    {
        return $this->belongsTo(Report::class, 'reportID');
    }

    public function station()
    {
        return $this->hasOneThrough(Station::class, Report::class, 'id', 'id', 'reportID', 'stationID');
    }
}