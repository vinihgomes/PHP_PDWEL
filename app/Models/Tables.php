<?php

namespace App\Models;

use App\Enums\TableLocation;
use App\Enums\TableStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'guest_number', 'status', 'location'];

    protected $casts = [
        'status' => TableStatus::class,
        'location' => TableLocation::class
    ];

    public function reservations()
    {
        return $this->hasMany(Reservations::class);
    }
}
