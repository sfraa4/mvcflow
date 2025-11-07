<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- 1. IMPORT INI
use Illuminate\Database\Eloquent\Model;



class Item extends Model
{
    use HasFactory; // <-- 2. TAMBAHKAN BARIS INI (FIX ERROR FACTORY)

    /**
     * Relasi yang benar:
     * Satu Category (Kategori) memiliki BANYAK Item.
     */
    public function category() // <-- 4. Seharusnya relasinya ke Item
    {
        // 'hasMany' berarti "memiliki banyak"
        return $this->belongsTo(Category::class);
    }

    // Fungsi lama Anda ('transactiondetail' dan 'category')
    // saya hapus karena secara logika tidak tepat.
    // Relasi ke TransactionDetail harusnya ada di model Item.
}