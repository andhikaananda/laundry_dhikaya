<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outlet extends Model
{   
    protected $table = 'outlet';

    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'tlp',
    ];

    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo(Paket::class, 'paket_id','id');
    }
}