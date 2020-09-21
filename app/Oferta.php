<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    //
    protected $table = "ofertas";

    protected $fillable = [
        'nome', 'porcentagem',
    ];

    public function vouchers(){
        return $this->hasMany('App\Voucher', 'oferta_id', 'id');
    }
}
