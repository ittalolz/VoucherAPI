<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voucher;

class VoucherController extends Controller{
    
    public function index(){
        $vouchers = new Voucher();

        return $vouchers->with('cliente')->with('oferta')->get();
    }


    public function useVoucher(Request $request){
        $email = $request->email;
        $code = $request->code;
        
        if (is_null($email) || is_null($code)){
            return response()->json(array('sucesso' => false, 'Mensagem' => 'Parametros inválidos'), 400);
        }        
        
        $voucher = Voucher::where('code', '=', $code)->with(["cliente" => function($q) use ($email){
            return $q->where('email', '=', $email);
        }])->with('oferta')->first();    

        if ($voucher){              
            if ($voucher->dt_utilizacao)
                return response()->json(array('sucesso' => false, 'Mensagem' => 'Voucher já utilizado!'), 400);
            
            $voucher->dt_utilizacao =  date("Y-m-d H:i:s");
            $voucher->save();

            return response()->json(array('sucesso' => true, 'desconto' => $voucher->oferta->porcentagem,'Mensagem' => 'Voucher utilizado com sucesso'), 200);

        }

    }
}
