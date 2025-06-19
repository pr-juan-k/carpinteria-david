<?php
session_start();

    require("php/encabezado.php");
    
?>
    
<form class="container col-md-5" action="php/procesa.php" method="post" enctype="multipart/form-data">
<h2>Agregar Producto</h2>
<section class="menu_tmp">
<a class="btn btn-dark" href="../../index.php">Ver web</a>                
<a class="btn btn-dark" href="php/list_products.php">Ver Cargados</a>
  </section>
  
<div class="mb-3">
  <label for="formFile1" class="form-label">1 fotografia:</label>
  <input class="form-control" name="foto1" type="file" id="formFile1">
</div>
<div class="mb-3">
  <label for="formFile2" class="form-label">2 fotografia:</label>
  <input class="form-control" name="foto2" type="file" id="formFile2">
</div>
<div class="mb-3">
  <label for="formFile3" class="form-label">3 fotografia:</label>
  <input class="form-control" name="foto3" type="file" id="formFile3">
</div>


<div class="mb-3">
  <label for="titulo" class="form-label">Titulo:</label>
  <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1" >
</div>
<div class="mb-3">
  <label for="descripcion" class="form-label">Descripcion:</label>
  <input type="text" name="descripcion" class="form-control" id="exampleFormControlInput1" >
</div>
<div class="mb-3">
  <label for="categoria" class="form-label">Categoria:</label>
  <select name="categoria" id="identificador_unico">
  <option value="dormitorio">dormitorio</option>
  <option value="salón">salón</option>
  <option value="cocina">cocina</option>
  <option value="baño">baño</option>
  ...
</select>
</div>
<div class="mb-3">
<label for="precio">Precio:$</label>
<input type="number" id="precio" name="precio" placeholder="Ingrese el precio" min="0" step="0.01">
</div>


  
<div class="col-auto">
    <button type="submit"  class="btn btn-primary">Guardar</button>
  </div>
  
  
</form>
<?php
    require("php/pie.php");
?>