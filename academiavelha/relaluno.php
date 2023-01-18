<?php

    include_once 'conexao.php';


    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 3;

    $inicio = ($limitereg * $pag) - $limitereg;

    $busca= "SELECT matricula,cpf, nome, telefone, email 
    FROM aluno LIMIT $inicio , $limitereg";

$resultado = $conn->prepare($busca);
$resultado->execute();

    if (($resultado) AND ($resultado->rowCount() != 0)){
        echo "<h1>Relatório de Alunos</h1><br>";


        ?>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Primeiro</th>
      <th scope="col">Último</th>
      <th scope="col">Nickname</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>






        <?php



        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
           
            extract($linha);           
            echo "<br> Cpf = " . $nome . "<br>";
            echo "Nome = " . $nome . "<br>";
            echo "Telefone = " . $telefone . "<br>";
            echo "Email = " . $email . "<br>";
        }        
    }else{
        echo "Não tem registros";
    }
     //Contar os registros no banco
     $qtregistro = "SELECT COUNT(matricula) AS registros FROM aluno";
     $resultado = $conn->prepare($qtregistro);
     $resultado->execute();
     $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

     //Quantidade de página que serão usadas - quantidade de registros
     //dividido pela quantidade de registro por página
     $qnt_pagina = ceil($resposta['registros'] / $limitereg);

      // Maximo de links      
      $maximo = 2;

      echo "<a href='relalunos.php?page=1'>Primeira</a> ";
    // Chamar página anterior verificando a quantidade de páginas menos 1 e 
    // também verificando se já não é primeira página
    for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior ++) {
        if ($anterior >= 1) {
            echo "  <a href='relalunos.php?page=$anterior'>$anterior</a> ";
        }
    }

    //Mostrar a página ativa
    echo "$pag";

    //Chamar próxima página, ou seja, verificando a página ativa e acrescentando 1
    // a ela

    for ($proxima = $pag + 1; $proxima <= $pag + $maximo; $proxima ++) {
        if ($proxima <= $qnt_pagina) {
            echo "<a href='relalunos.php?page=$proxima'>$proxima</a> ";
        }
    }

    echo "<a href='relalunos.php?page=$qnt_pagina'>Última</a> ";