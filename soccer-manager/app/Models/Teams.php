<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'location',
    ];

    public function matches()
{
    return $this->hasMany(Matches::class, 'team1_id')->orWhere('team2_id', $this->id);
}
}


