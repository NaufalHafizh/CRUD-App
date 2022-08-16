<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'pelaksanaan_id',
        'kategori_id',
        'nama',
        'tanggal',
        'seat'
    ];

    public function Kategori()
    {

        return $this->belongsTo(Kategori::class);
    }

    public function Pelaksanaan()
    {

        return $this->belongsTo(Pelaksanaan::class);
    }
}
