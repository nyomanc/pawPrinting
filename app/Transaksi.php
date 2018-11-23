<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'page', 'copy', 'paper_type', 'binding', 'file_path', 'total'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
