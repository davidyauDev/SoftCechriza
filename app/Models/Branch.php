<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'city', 'address', 'client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
