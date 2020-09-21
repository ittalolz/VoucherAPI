# VoucherAPI

API desenvolvida como parte da entrevista
Desafio de codificação

O objetivo é desenvolver uma API Rest que implemente um micro serviço para a geração de pacote de vouchers utilizando PHP(Laravel ou Lumen).

Resolvi utilizar Lumen para conhecer.
### Instalação

Execute este comando a partir do diretório no qual deseja instalar

```sh
git clone https://github.com/ittalolz/LaraveAPI.git /minha/pasta/projeto/
```

Substitua `[/minha/pasta/projeto/]` pelo nome do seu diretório.

```sh
cd /mina/pasta/projeto/
composer install
```

Está configurado o .env com banco MySql 
Banco: api_voucher
usuario: root
senha :

Executar o migrate e iniciar o servidor

```sh
php artisan migrate
php -S localhost:8000 -t public
```

### Endpoins

#### Cadastrar ofertas

```sh
curl -X POST \
  http://localhost:8000/cadastaOferta \
  -d '{"nome": "Nome da oferta", "porcentagem": "10", "dt_expiracao: 31/12/2020"}'
```

#### Listar Voucher

```sh
curl -X GET \
  http://localhost:8000/vouchers \
  -d '{"email": "email@teste.com"}'
```

#### Usar Voucher

```sh
curl -X POST \
  http://localhost:8000/useVoucher \
  -d '{"code": "ABCDEFGH", "email": "email@teste.com"}'
```
