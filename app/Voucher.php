<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\VoucherController;

class Voucher extends Model
{
    //
    protected $table = "vouchers";    

    protected $fillable = [ 
        'code',
        'oferta_id',
        'cliente_id',
        'dt_utilizacao',
        'dt_expiracao',
    ];

    public function oferta(){
        return $this->hasOne('App\Oferta', 'id', 'oferta_id');
    }

    public function cliente(){
        return $this->hasOne('App\Cliente', 'id', 'cliente_id');
    }
    
    
}
