<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = "clientes";

    protected $fillable = [
        'nome', 'email',
    ];    

    public function vouchers(){
        return $this->hasMany('App\Voucher', 'cliente_id', 'id');
    }
}
