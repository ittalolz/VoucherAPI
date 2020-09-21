<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="VoucherAPI_0"></a>VoucherAPI</h1>
<p class="has-line-data" data-line-start="2" data-line-end="4">API desenvolvida como parte da entrevista<br>
Desafio de codificação</p>
<p class="has-line-data" data-line-start="5" data-line-end="6">O objetivo é desenvolver uma API Rest que implemente um micro serviço para a geração de pacote de vouchers utilizando PHP(Laravel ou Lumen).</p>
<p class="has-line-data" data-line-start="7" data-line-end="8">Resolvi utilizar Lumen para conhecer.</p>
<h3 class="code-line" data-line-start=8 data-line-end=9 ><a id="Instalao_8"></a>Instalação</h3>
<p class="has-line-data" data-line-start="10" data-line-end="11">Execute este comando a partir do diretório no qual deseja instalar</p>
<pre><code class="has-line-data" data-line-start="13" data-line-end="15" class="language-sh">git <span class="hljs-built_in">clone</span> https://github.com/ittalolz/LaraveAPI.git /minha/pasta/projeto/
</code></pre>
<p class="has-line-data" data-line-start="16" data-line-end="17">Substitua <code>[/minha/pasta/projeto/]</code> pelo nome do seu diretório.</p>
<pre><code class="has-line-data" data-line-start="19" data-line-end="22" class="language-sh"><span class="hljs-built_in">cd</span> /mina/pasta/projeto/
composer install
</code></pre>
<p class="has-line-data" data-line-start="23" data-line-end="27">Está configurado o .env com banco MySql<br>
Banco: api_voucher<br>
usuario: root<br>
senha :</p>
<p class="has-line-data" data-line-start="28" data-line-end="29">Executar o migrate</p>
<pre><code class="has-line-data" data-line-start="31" data-line-end="34" class="language-sh">php artisan migrate
php -S localhost:<span class="hljs-number">8000</span> -t public
</code></pre>
<h3 class="code-line" data-line-start=35 data-line-end=36 ><a id="Endpoins_35"></a>Endpoins</h3>
<h4 class="code-line" data-line-start=37 data-line-end=38 ><a id="Cadastrar_ofertas_37"></a>Cadastrar ofertas</h4>
<pre><code class="has-line-data" data-line-start="40" data-line-end="44" class="language-sh">curl -X POST \
  http://localhost:<span class="hljs-number">8000</span>/cadastaOferta \
  <span class="hljs-operator">-d</span> <span class="hljs-string">'{"nome": "Nome da oferta", "porcentagem": "10", "dt_expiracao: 31/12/2020"}'</span>
</code></pre>
<h4 class="code-line" data-line-start=45 data-line-end=46 ><a id="Listar_Voucher_45"></a>Listar Voucher</h4>
<pre><code class="has-line-data" data-line-start="48" data-line-end="52" class="language-sh">curl -X GET \
  http://localhost:<span class="hljs-number">8000</span>/vouchers \
  <span class="hljs-operator">-d</span> <span class="hljs-string">'{"email": "email@teste.com"}'</span>
</code></pre>
<h4 class="code-line" data-line-start=53 data-line-end=54 ><a id="Usar_Voucher_53"></a>Usar Voucher</h4>
<pre><code class="has-line-data" data-line-start="56" data-line-end="60" class="language-sh">curl -X POST \
  http://localhost:<span class="hljs-number">8000</span>/useVoucher \
  <span class="hljs-operator">-d</span> <span class="hljs-string">'{"code": "ABCDEFGH", "email": "email@teste.com"}'</span>
</code></pre>
