<?php

    session_start();
    ob_start();

    require_once 'conexao.php';

   $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $codigoproduto = $dados["codigo"];

    if(!empty($dados["excluir"])) {
        $sqlexcluir = "DELETE from carrinho where codigoproduto  = $codigoproduto";
        $resulexcluir=$conn->prepare($sqlexcluir);
        $sqlexcluir->execute();
        $_SESSION["quant"] -=1;
       } 
        else{ 
        if(!isset($_SESSION['NOME'])){
          $_SESSION["carrinho"]= true;
            ECHO "<script>
            alert('Faça login para Finalizar sua Compra!!!');
            parent.location = 'login.php';
            </script>";
        }
        else{
            //acessar pagamento;
         $date = date('y-m-d');
         $salva = $_SESSION['totalcompra'];
         $matricul = $_SESSION["matricula"];

         $sqlvenda = "INSERT INTO venda(data,valor,matricula)values(:data,:valor,:matricula)";
         $salvarvenda= $conn->prepare($sqlvenda);
         $salvarvenda->bindParam(':data',$data, PDO::PARAM_STR); 
         $salvarvenda->bindParam(':valor',$data, PDO::PARAM_STR);  
         $salvarvenda->bindParam(':matricula',$data, PDO::PARAM_STR);       
         $salvarvenda->bindParam(); 


        $venda = "Select LAST_INSERT_ID()";
        $resulvenda=$conn->prepare($venda);
        $resulvenda->execute();

        $linhavenda = $resulvenda->fetch(PDO::FETCH_ASSOC);

        $idvenda = ($linhavenda["LAST_INSERT_ID()"]);

        $busca = "select * from carrinho";
        $resulbusca=$conn->prepare($busca);
        $resulbusca->execute();

        if(($resulbusca) && ($resulbusca->rowCount()!=0)){
            while ($linha = $resulbusca->fetch(PDO::FETCH_ASSOC)){
                extrtact($linha);

            $sqlitem = "insert into item(codigoproduto,idvenda,quantidade,valor)
            values(:codigoproduto,:idvenda,:quantidade,:valor)";
            $savaritem= $conn->prepare($sqlitem);
            $salvaritem->bindParam(':codigoproduto',$codigoproduto, PDO::PARAM_INT); 
            $salvaritem->bindParam(':idvenda',$idvenda, PDO::PARAM_INT);  
            $salvaritem->bindParam(':quantidade',$quantcompra, PDO::PARAM_INT); 
            $salvaritem->bindParam(':valor',$valor, PDO::PARAM_INT);        
            $salvaritem->bindParam(); 

            $estoque = "UPDATE produto set quantidade=(quantidade - $quantcompra)
            where codigoproduto = $codigoproduto";
            $atualizaza=$conn->prepara($estoque);
            $atualiza->execute();
        }

    }

     $sqllimpa = "delete from carrinho";
     $limpa= $conn->prepare($sqllimpa);
     $limpa->execute();
     $_SESSION["quant"] =0;

      header("Location:index.php");


        }
        }


        ?>