<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaTandatgn extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi massal.
     *
     * @var array
     */
    protected $fillable = [
        'nama_tandatangan', 'jabatan', 'nip',
    ];

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'nama_tandatgn';

    /**
     * Tipe data untuk kunci utama.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Apakah ID incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Apakah ingin mengatur timestamps.
     *
     * @var bool
     */
    public $timestamps = true;
}
