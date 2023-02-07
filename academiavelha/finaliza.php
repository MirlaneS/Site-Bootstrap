<?php
    session_start();
    ob_start();

    require_once 'conexao.php';

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $codigoproduto = $dados["codigo"];

    if(!empty($dados["excluir"])) {
        $sqlexcluir = "DELETE from carrinho
                        where codigoproduto  = $codigoproduto";
        $resulexcluir=$conn->prepare($sqlexcluir);
        $sqlexcluir->execute();
        $_SESSION["quant"] -=1;
    } else{ 
        if(!isset($_SESSION['NOME'])){
            $_SESSION("CARRINH") = TRUE;
            ECHO "<script>
            alert('Faça login para Finalizar sua Compra!!!');
            parent.location = 'login.php';
            </script>";
        }else{
            //acessar pagamento;
         $date = date('y-m-d');
         $salva = $_SESSION['totalcompra'];
         $matricul = $_SESSION["matricula"];

         $sqlvenda = "INSERT INTO venda(data,valor,matricula)values(:data,:valor,:matricula)";
         $savavenda= $conn->prepare($sqlvenda);
         $salvarvenda->bindParam(':data',$data, PDO::PARAM_STR); 
         $salvarvenda->bindParam(':valor',$data, PDO::PARAM_STR);  
         $salvarvenda->bindParam(':matricula',$data, PDO::PARAM_STR);       
         $salvarvenda->bindParam(); 

        }
    }