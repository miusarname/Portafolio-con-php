<?php
include("Headboard.php")
?>
<?php
include("Connection.php")
?>
<?php
$objconection = new conection;
$result = $objconection->consult("SELECT * FROM `proyectos`");
?>

<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Bienvenid@s</h1>
    <p class="col-md-8 fs-4">Este es un portafolio privado</p>
    <button class="btn btn-primary btn-lg" type="button">Más información</button>
  </div>
</div>

<?php foreach ($result as $project) { ?>

<?php } ?>

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach ($result as $project) { ?>

  <div class="col">
    <div class="card h-100">
      <img src="Archivos/<?php echo $project['image']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $project['name']; ?></h5>
        <p class="card-text"><?php echo $project['Description']; ?></p>
      </div>
    </div>
  </div>

<?php } ?>

  

</div>
<?php
include("foot.php")
?>