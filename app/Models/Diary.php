<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diary extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'matter',
        'date',
        'status',
        'client_id'
    ];

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
}
