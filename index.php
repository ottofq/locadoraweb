<?php include_once 'cabecalho.php'?>
<div class="container">
  <div class="row">
    <div class="col">
        <div class="card text-white bg-secondary p-4">
        <h3 class="card-title">Pesquise, Compare e Alugue</h3>
        <h5 class="card-subtitle">Aluguel de carros com os melhores preços</h5>
        <br>
        <p>
          <form action="veiculos.php" method="post">
            <div class="form-group">
              <label>Data de retirada</label>
              <input type="date" name="dataRetirada" class="form-control" required><br>
              <input type="time" name="horarioRetirada" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Data de devolução</label>
              <input type="date" name="dataDevolucao" class="form-control" required><br>
              <input type="time" name="horarioDevolucao" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-success btn-lg" value="Pesquisar">
          </form>
        </p>
      </div>
    </div>
    <div class="col">
      <h2>Viva o Bootstrap</h2>
      <p>Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.</p>
      <p>Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.</p>
    </div>
  </div>
</div>
<?php include_once 'rodape.php'?>
