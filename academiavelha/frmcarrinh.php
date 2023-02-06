<?php
    require_once 'head.php';
    require 'menu.php';
    include_once 'conexao.php';

    $sql= "SELECT * from carrinho";

     $resultado=$conn->prepare9($sql); 
     $resultado=$conn->exxecute();

     if(($resultado)and($resultado->RowCount()!=0)){
        ?>
        <table class="table">
        <thead>
         <tr>
            <th scope="col">Imagem</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Total</th>
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
              <td><?php echo $valor < ?></td>
              <td><?php echo $quantcompra ?></td>
              <td><?php echo $total = $quantcompra * $valor ?></td>
              <td>
        
                 <?php echo "<a href=''>" ; ?>
                 <input type="submit" class="btn btn-danger" name="excluir" value="Excluir">
              </td>
             </tr>           
<?php         
 } ?>
</tbody>
</table>
<?php 
     }
>