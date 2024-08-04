<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi massal.
     *
     * @var array
     */


    protected $fillable = [
        'tanggal', 'no_surat', 'perihal', 'tujuan', 'isi_surat', 'id_tandatangan', 'user_id'
    ];

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'surat_keluar';

    /**
     * Relasi ke model User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function namaTandatangan()
    {
        return $this->belongsTo(NamaTandatgn::class, 'id_tandatangan');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
