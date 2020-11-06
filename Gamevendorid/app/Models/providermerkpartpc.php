<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class providermerkpartpc extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_provider',
        'merk_provider'
    ];
    public function partpc() {
        return $this->hasMany(partpc::class, 'merk_item', 'id');
    }
}
