<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use App\Cliente;
use App\Voucher;

class OfertaController extends Controller{
    
    public function index(){
        $cliente = new Cliente();
        dd($cliente->with('vouchers')->first());
    }
    
    public function store(Request $request){                
        $nome = $request->nome;
        $porcentagem = $request->porcentagem;
        $dt_expiracao = dataBRtoDate($request->dt_expiracao);

        if(empty($nome) || empty($porcentagem) || empty($dt_expiracao)){
            return response()->json(array('sucesso' => false, 'mensagem' => 'Parametros inválidos.'), 400);
        }
        
        $oferta = new Oferta();
        $oferta->nome = $nome;
        $oferta->porcentagem = $porcentagem;
        $oferta->save();
            
        $clientes = Cliente::all();
        
        foreach ($clientes as $cliente) {
            $voucher = new Voucher();
            $voucher->code = self::gerarCode();
            $voucher->oferta_id = $oferta->id;
            $voucher->cliente_id = $cliente->id;
            $voucher->dt_expiracao = $dt_expiracao;

            $voucher->save();
        }        
        
        return response()->json(array('sucesso' => true, 'mensagem' => 'Oferta e vouchers criados.'), 200);
    }

    private function gerarCode(){        
        $bytes = random_bytes(30);
        return substr(bin2hex($bytes), 0 , 8);
    }
}
