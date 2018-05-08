<!DOCTYPE html>
<html>
  <head>
	<?php include 'imports.php'; ?>
  </head>
  <body>
    <div class="wraper">
      <?php include 'menu.php'; ?>
      <div class="container">
        <div class="row">
            <div class = "col-md-6 col-md-offset-5">
                <h1> Cadastro de Local </h1>
            </div>
        </div>
        <dic class = "row">
          <div class="col-md-6 col-md-offset-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group col-sm-12">  
                    <input class="form-control" placeholder="Nome do Local">
                </div>
                <div class="form-group col-sm-6 ">  
                    <input class="form-control" placeholder="CEP ">
                </div>
                <div class="form-group col-sm-6 ">  
                    <select id="" class="form-control ">
                        <option>UF</option>
                    </select>
                </div>
                <div class="form-group col-sm-6"> 
                    <input class="form-control" placeholder="Cidade">
                </div>
                <div class="form-group col-sm-6"> 
                    <input class="form-control" placeholder="Bairro">
                </div>
                <div class="form-group col-sm-12"> 
                    <input class="form-control" placeholder="Endereço">
                </div>
                <div class="form-group col-sm-12">
                    <input type="submit" name="enviar" value="Cadastrar" class="form-control btn-success">
                </div>
                <div class="form-group col-sm-12">
                    <input type="reset" name="Cancelar" value="Cancelar" class="form-control btn-warning">
                </div>

             
            </form>
        </div>
      </div>
    </div>
  </body>
  <?php include 'imports2.php'; ?>
</html>