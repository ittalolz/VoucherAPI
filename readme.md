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
<pre><code class="has-line-data" data-line-start="31" data-line-end="33" class="language-sh">php artisan migrate
</code></pre>
<h3 class="code-line" data-line-start=34 data-line-end=35 ><a id="Endpoins_34"></a>Endpoins</h3>
