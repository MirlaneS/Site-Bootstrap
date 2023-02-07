<?php
    
    require_once 'head.php';
    require 'menu.php';
    include_once 'conexao.php';

$totalcompra = 0;
$sql = "SELECT * from carrinho";
$resultado= $conn->prepare($sql);
$resultado->execute();

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
          <td scope="row"><img src="<?php echo $foto ?>"style=widht:100px;height:100px;></td>
          <td><?php echo $nome ?></td>
          <td><?php echo $valor ?></td>
          <td><?php echo $quantcompra ?></td>
          <td><?php echo $total = $quantcompra * $valor;
          $totalcompra += $total; ?></td>
         
        <td>
            <input type="hidden" name="codigo" value="<?php echo $codigoproduto;?>">           
            <input type="submit" class="btn btn-danger" name="excluir" value="Excluir">
          </td>
        </tr>        
         

<?php   
  } 
?>
  <tr><td><?php echo "Total da compra - R$".$totalcompra; ?></td></tr>
  </tbody>
</table>

<?php $_SESSION["Totalcompra"]=$totalcompra; ?>

<input type="submit" class="btn btn-danger" name="" value="">
<?php
}
?>