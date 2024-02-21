<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;
    protected $table = 'pengajar';
    protected $fillable=[
        'id_guru',
        'id_mapel',
        'kelas',
        'jam_pelajaran',
    ];

    public function guru()
    {
        return $this->belongsTo(guru::class, 'id_guru' );
    }

    public function mapel()
    {
        return $this->belongsTo(mapel::class, 'id_mapel' );
    }
}
