<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Voucher;

class VoucherController extends Controller{
    
    public function show(Request $request){
        $email = $request->email;

        $vouchers = Voucher::whereHas("cliente" , function($q) use ($email){
            $q->where('email', '=', $email);
        })->with('oferta')->get();

        return response()->json($vouchers, 200);
    }


    public function useVoucher(Request $request){
        $messages = [
            'required' => 'O campo :attribute é obrigatório',            
        ];
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'code' => 'required',            
        ], $messages);        
        
        if($validator->fails()){
            return response()->json(array('sucesso' => false, 'Mensagem' => 'Parametros inválidos', 'erros' => $validator->errors()), 400);
        }  
        
        $email = $request->email;
        $code = $request->code;
                      
        
        $voucher = Voucher::where('code', '=', $code)->whereHas("cliente" , function($q) use ($email){
            $q->where('email', '=', $email);
        })->with('oferta')->first();    

        if ($voucher){              
            if ($voucher->dt_utilizacao)
                return response()->json(array('sucesso' => false, 'Mensagem' => 'Voucher já utilizado!'), 400);
            
            $voucher->dt_utilizacao =  date("Y-m-d H:i:s");
            $voucher->save();

            return response()->json(array('sucesso' => true, 'desconto' => $voucher->oferta->porcentagem,'Mensagem' => 'Voucher utilizado com sucesso'), 200);

        }

    }
}
