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
                <h1> Disponibilizar Vaga</h1>
            </div>
        </div>
        <dic class = "row">
          <div class="col-md-6 col-md-offset-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group col-sm-12">  
                    <select id="" class="form-control ">
                        <option>Local</option>
                    </select>
                </div>
                <div class="form-group col-sm-12"> 
                    <select id="" class="form-control ">
                        <option>Oficina</option>
                    </select>
                </div>
                <div class="form-group col-sm-12">  
                    <input class="form-control" placeholder="Quantidade de vagas">
                </div>
                
              
                <div class="form-group col-sm-12">
                    <input type="submit" name="enviar" value="Disponibilizar" class="form-control btn-success">
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