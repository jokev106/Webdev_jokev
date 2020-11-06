<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partpc extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_item',
        'brand_id',
        'tipe_item',
        'deskripsi_item',

    ];
    public function providermerkpartpc() {
        return $this->belongsTo(providermerkpartpc::class, 'brand_id', 'id');
    }
}
