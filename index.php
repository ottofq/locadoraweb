<?php include_once 'cabecalho.inc' ?>
<div class="container">
  <div class="card container-form text-white bg-secondary mb-3" style="width:500px">
    <h3 class="card-title">Pesquise, Compare e Alugue</h3>
    <h5 class="card-subtitle">Aluguel de carros com os melhores preços</h5>
    <br>
    <p>
      <form action="#" method="get">
        <div class="form-group">
          <label>Data de retirada</label>
          <input type="date" name="dataRetirada" class="form-control"><br>
          <input type="time" name="horarioRetirada" class="form-control">
        </div>
        <div class="form-group">
          <label>Data de devolução</label>
          <input type="date" name="dataDevolucao" class="form-control"><br>
          <input type="time" name="horarioDevolucao" class="form-control">
        </div>
        <input type="submit" class="btn btn-success btn-lg" value="Procurar">
      </form>
    </p>
  </div>
</div>
<?php include_once 'rodape.inc' ?>
