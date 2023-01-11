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
            <img class="card-img-top" src="imagens/supre-1.jpg" alt="Imagem de capa do card">
            <div class="card-body">
            <h2 class="card-text">supremento Beta-alanine</h2>
            <h3>R$ 80,00</h3>
       <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#num-1">
            Comprar
            </button>
          </div>
      </div>
    </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/supre-2.jpg" alt="Imagem de capa do card">
        <div class="card-body">
        <h2 class="card-text">Collagen Protein</h2>
            <h3>R$ 130,00</h3>
            
    <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#num-2">
             Comprar
            </button>
          </div>
      </div>
    </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/supre-3.jpg" alt="Imagem de capa do card">
        <div class="card-body">
        <h2 class="card-text">Whey 100%</h2>
        <h3>R$90,00</h3>
        
    <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#num-3">
             Comprar
            </button>
          </div>
       </div>
    </div>

        <div class="col-md-3">
          <div class="card" style="width: 18rem; height: 35rem;">
            <img class="card-img-top" src="imagens/supre-4.jpg" alt="Imagem de capa do card">
          <div class="card-body">
        <h1 class="card-text">Supremento Palatinose</h1>
        <h2>R$110,00</h2>
        
    <!-- Botão para acionar modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#num-4">
          Comprar
          </button>
        </div>
    </div>
</div>

        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="num-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">supremento Beta<</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="imagens/supre-1.jpg" alt="Imagem de capa do card">
        <p>Pura, potente, alta qualidade de beta alanina em pó
Produto testado</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="num-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Colageno Protem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="imagens/supre-2.jpg" alt="Imagem de capa do card">
        <p>Collagen Protein Puro Proteina</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="num-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Whey Protem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="imagens/supre-3.jpg" alt="Imagem de capa do card">
        <p>O Whey Protem é obtido por um processo de filtragem diferenciado que confere 
            a textura.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adivionar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="num-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supremento Pelatiom</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="imagens/supre-4.jpg" alt="Imagem de capa do card">
        <p> </p>
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

    
    



 

    