<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;


    protected $fillable = [
        'team1_id',
        'team2_id',
        'match_date',
        'location',
        'score_team1',
        'score_team2',
        'status',
    ];


    public function team1()
    {
        return $this->belongsTo(Teams::class, 'team1_id');
    }


    public function team2()
    {
        return $this->belongsTo(Teams::class, 'team2_id');
    }
}
