<?php

    $nomeArquivo = "dados.txt";

    $arquivo = fopen($nomeArquivo, "r");
    var_dump($arquivo);
    echo"<br>";
   
    $tamanho = filesize($nomeArquivo);

    $conteudo = fread($arquivo,$tamanho);

    //fwrite($arquivo, " de novo e novo ");
    
    fclose($arquivo);

    echo $conteudo;
    