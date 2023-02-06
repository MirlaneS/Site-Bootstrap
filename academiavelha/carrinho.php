<?php
include_once conexao.php

     session_start();
	    ob_start();

        $session["quant"]+=1;

           echo $seession{"quant"}=0;

           $cesta= filter_input_array(INPUT_POST, FILTER_DEFAULT);
           //VAR_DUMP($CESTA);

           $codigproduto=$cesta["codigoproduto"];
           $sql="SELECT codigoproduto,nome,valor,quantidade,foto
           FROM PRODUTO
           where codigoproduto= $codigoproduto LIMIT 1";

           $resultado=$conn->prepare9($sql); 
           $resultado=$conn->exxecute();

           if(($resultado)and($resultado->RowCount()!=0)){
            $linha=$resultado->fetch(PDO::FETCH_ASSOC)
            extract($linha)

        if($quantidade<$quantcompra){
          header("location:index.php");
        }   
        else{
            $sql2= "INSET INTO carrinho(codigoproduto,nome,quantidade,valor,foto)
            values(:codigoproduto,:nome,:quantidade,:valor,:foto)";
            $salvar2= $conn->prepare($sql2);
            $salvar2->bindParam(':codigoproduto', $codigoproduto, PDO::PARAM_INT);
            $salvar2->bindParam(':nome', $nome, PDO::PARAM_INT);
            $salvar2->bindParam(':quantidade'
            $salvar2->bindParam(
            $salvar2->bindParam(
            $salvar2->bindParam(
       
       
        }

        }


            







?>