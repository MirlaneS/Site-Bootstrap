<?php
        include_once 'conexao.php';
        try{
            $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
           
            var_dump($dadoscad);

       //echo "senha".password_hash(123, PASSWORD_DEFAULT);

       if (!empty($dadoscad['btncad'])) {

 $sql="inset into aluno(name,sexo,datanascimento,telefone,cpf,rg,cep,numerocasa,complemento,foto,email,senha)
 values(name,sexo,datanascimento,telefono,cpf,rg,cep,numerocasa,complemento,foto,email,senha)"; 
 
 
 $salva= $conn->prepare($sql);
 $salva=->binParan(':nome', $dadoscad['nome'], PDO::PARAM_STR)
 $salva=->binParan(':sexo', $dadoscad['sexo'], PDO::PARAM_STR)
 $salva=->binParan(':datanascimento', $dadoscad['dn'], PDO::PARAM_STR)
 $salva=->binParan(':telefone', $dadoscad['telefone'], PDO::PARAM_STR)
 $salva=->binParan(':cpf', $dadoscad['cpf'], PDO::PARAM_STR)
 $salva=->binParan(':rg', $dadoscad['numero'], PDO::PARAM_STR)
 $salva=->binParan(':cep', $dadoscad['cep'], PDO::PARAM_STR)
 $salva=->binParan(':numero da casa', $dadoscad['numero'], PDO::PARAM_STR)
 $salva=->binParan(':complento', $dadoscad['complemento'], PDO::PARAM_STR)
 $salva=->binParan(':foto', $dadoscad['foto'], PDO::PARAM_STR)
 $salva=->binParan(':email', $dadoscad['email'], PDO::PARAM_STR)
 $salva=->binParan(':senha', $dadoscad['senha'], PDO::PARAM_STR)

 if ($salva->rowCount()) {
     echo "Usuário cadrastrado com sucesso!";
     unset($dadoscad);
    }else {
        echo "Usuário na cadastrado!";
    }

    }
catch(PDOException $erro){
    echo $erro;
}
            ?>