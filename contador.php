<?php
  include 'contador.php'; //inclui um arquivo em php com a variavel $visitas
     if (isset($_COOKIE['contador'])) { //verifica se existe o cookie contador
        $cookie = $_COOKIE['contador'] + 1; //adiciona um ao numero de visitas que você fez a essa pagina
    } else {
      $cookie = 1; // se o cookie não existir seta o valor da variavel $cookie para 1
      $visitas++; // se o cookie não existir é adicionado uma visita nova
    }
  setcookie('contador', "$cookie", time()+3700); //tempo para a exclusão do cookie em segundos
  $abre =@fopen("contador.php","w"); //cria o arquivo contador.php
  $conteudo ='<?php $visitas='.$visitas.'; ?>';
  $escreve =fwrite($abre, $conteudo); //adiciona conteudo ao contador.php
  echo "<br>$visitas Pessoas vizitaram esse site voce ja visitou $cookie vezes"; //exibe na tela os dados
   $visitas=0; // garante que não vai adicionar mais de uma visita
 ?>