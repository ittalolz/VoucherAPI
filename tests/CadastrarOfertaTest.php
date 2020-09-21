<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CadastrarOfertaTest extends TestCase
{

    public function teste_cadastrar_oferta()
    {
        $this->json('POST', '/cadastraOferta', ['nome' => 'Nome Oferta de 10%', 'porcentagem' => 10, 'dt_expiracao' => '31/12/2020'])
            ->seeJson([
                'sucesso' => true,
            ]);
    }
}
