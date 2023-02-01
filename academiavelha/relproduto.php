<?php

    require_once 'head.php';
    include_once 'conexao.php';

    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 6;

    $inicio = ($limitereg * $pag) - $limitereg;

    $busca= "SELECT p.codigoproduto, p.nome, p.cor, p.valor, p.tamanho, p.quantidade,
    p.foto, c.nomecategoria
    FROM produto p,categoria c WHERE quatidade > 0 and
    c.idcategoria = p.idcategoria
    LIMIT $inicio , $limitereg";

    $resultado = $conn->prepare($busca);
    $resultado->execute();

    if (($resultado) AND ($resultado->rowCount() != 0)){
       
        echo "<h1>Produtos em estoque</h1><br>";
?>
        <table class="table">
        <thead>
         <tr>
            <th scope="col">codigoproduto</th>
            <th scope="col">nome</th>
            <th scope="col">cor</th>
            <th scope="col">valor</th>
            <th scope="col">tamanho</th>
            <th scope="col">quantidade</th>
         </tr>
        </thead>
     <tbody>

<?php
        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
           
            extract($linha);             
        
?>        
            <tr>
              <td scope="row"><?php echo $ ?></td>
              <td><?php echo $nome ?></td>
              <td><?php echo $cor< ?></td>
              <td><?php echo $valor ?></td>
              <td><?php echo $tamanho ?></td>
              <td><?php echo $quantidade ?></td>
              <td>
                 <?php echo "<a href='editar.php?matricula=$codigoproduto'>" ; ?>
                <input type="submit" class="btn btn-primary" name="editar" value="Editar">
              </td>
              <td>
                 <?php echo "<a href='excluir.php?matricula=$codigoproduto'>" ; ?>
                 <input type="submit" class="btn btn-danger" name="excluir" value="Excluir">
              </td>
             </tr>           
<?php         
    } 
?>
</tbody>
</table>

<?php    
        
    }else{
        echo "Não tem registros";
    }

     //Contar os registros no banco

     $qtregistro = "SELECT COUNT(codigoproduto) AS registros FROM aluno
     WHERE status = 'A'";
     $resultado = $conn->prepare($qtregistro);
     $resultado->execute();
     $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

     //Quantidade de página que serão usadas - quantidade de registros
     //dividido pela quantidade de registro por página

     $qnt_pagina = ceil($resposta['registros'] / $limitereg);

      // Maximo de links   

      $maximo = 2;

      echo "<a href='relaluno.php?page=1'>Primeira</a> ";

    // Chamar página anterior verificando a quantidade de páginas menos 1 e 
    // também verificando se já não é primeira página

    for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++) {
        if ($anterior >= 1) {
            echo "  <a href='relaluno.php?page=$anterior'>$anterior</a> ";
        }
    }

    //Mostrar a página ativa
    echo "$pag";

    //Chamar próxima página, ou seja, verificando a página ativa e acrescentando 1
    // a ela
    for ($proxima = $pag + 1; $proxima <= $pag + $maximo; $proxima++) {
        if ($proxima <= $qnt_pagina) {
            echo "<a href='relaluno.php?page=$proxima'>$proxima</a> ";
        }
    }

    echo "<a href='relaluno.php?page=$qnt_pagina'>Última</a> ";

?>