<?php
    //echo ta mando o text entre "" para a tela index
    echo "echo do main.php<br>";
    //aqui o main ta requerindo os dados do php pessoa
    require_once("pessoa.php");
    //a var p1 ta sendo nomeada uma pessoa! agora que ela é uma pessoa
    //lhe sera atribuido um name!!! que nesse caso é huguinho
    $p1 = new pessoa();
    $p1->name= "Huguinho";

    $p2 = new pessoa();
    $p2->name= "airtom";
    //aqui o p1 que recebeu o nome huguinho agora é p1->name e ta sendo exibido pelo echo
    echo $p1->name;
    echo "<br>";
    echo $p2->name;

?>