<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Events\ModelPruningStarting;

class product_histories extends Model
{
    protected $table = 'product_histories';
    protected $primaryKey = ['id'];
    public $timestamps = false;
    public static function getProductSummary()
    {
        return self::selectRaw('
                MAX(kode) AS kode_barang,
                nama,
                SUM(harga) AS total_harga,
                COUNT(*) AS total_barang,
                CASE 
                    WHEN COUNT(*) > 1 THEN "Penambahan"
                    ELSE "Baru"
                END AS status
            ')
            ->groupBy('nama')
            ->get();
    }
}
