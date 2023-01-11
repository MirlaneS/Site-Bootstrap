<?php
require_once 'head.php';
require_once 'menu.php';

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center tela">
          <h1>Coleção 2023</h1>
        </div>
    </div>
</div>

    <div class="container-fluid imagens">
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/mochila1.jpg" alt="Imagem de capa do card">
            <div class="card-body">
            <h2 class="card-text">Mochila Paola</h2>
            <h3>R$ 150,00</h3>
       <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paola">
            Comprar
            </button>
          </div>
      </div>
    </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/mochila2.jpg" alt="Imagem de capa do card">
        <div class="card-body">
        <h2 class="card-text">Mochila Mod</h2>
            <h3>R$ 180,00</h3>
            
    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mod">
  Comprar
</button>

    </div>
    </div>
    </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/mochila3.jpg" alt="Imagem de capa do card">
        <div class="card-body">
        <h2 class="card-text">Mochila Executiva</h2>
        <h3>R$220,00</h3>
        
    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#executiva">
  Comprar
</button>

    </div>
    </div>
    </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/mochila4.jpg" alt="Imagem de capa do card">
        <div class="card-body">
        <h1 class="card-text">Mochila Resistente</h1>
        <h2>R$260,00</h2>
        
    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#resistente">
  Comprar
</button>
    </div>
    </div>
     </div>

        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="paola" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila Paola</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/mochila1.jpg" alt="Imagem de capa do card">
        <p>Mochila com custura reforcada.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila Mod</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="imagens/mochila2.jpg" alt="Imagem de capa do card">
        <p>Mochila com custura reforcada.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="executiva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila Executiva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="imagens/mochila3.jpg" alt="Imagem de capa do card">
        <p>Mochila em couro com custura reforcada e com alça alto ajustavel.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="resistente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila Resistente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="imagens/mochila4.jpg" alt="Imagem de capa do card">
        <p>Mochila em couro com custura reforcada e com alça alto ajustavel.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>


   
 <?php
    require_once 'footer.php';
    ?>

    
    



 

    