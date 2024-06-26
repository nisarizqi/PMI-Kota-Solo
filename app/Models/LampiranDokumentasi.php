<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranDokumentasi extends Model
{
    use HasFactory;

    protected $table = 'lampiran_dokumentasi';
    protected $primaryKey = 'id_dokumentasi';
    public $timestamps = true;

    protected $fillable = [
        'file_dokumentasi',
        'id_kejadian'
    ];

    

    public function kejadianBencana()
    {
        return $this->belongsTo(KejadianBencana::class, 'id_kejadian');
    }

}
