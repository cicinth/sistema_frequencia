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
                <h1> Relatório de frequência</h1>
            </div>
        </div>
        <dic class = "row">
          <div class="col-md-6 col-md-offset-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group col-sm-4">  
                    <select id="" class="form-control ">
                        <option>Local</option>
                    </select>   
                </div>
                <div class="form-group col-sm-4">  
                    <select id="" class="form-control ">
                        <option>Oficina</option>
                    </select>   
                </div>
                <div class="form-group col-sm-4">  
                    <select id="" class="form-control ">
                        <option>Turma</option>
                    </select>   
                </div>
                <div class="form-group col-sm-4">  
                    <label>De:</label>
                    <input class="form-control" type="date">
                </div>
                <div class="form-group col-sm-4">  
                    <label>Ate:</label>
                    <input class="form-control" type="date">
                </div>              
                <div class="form-group col-sm-4">
                    <label>   </label>
                    <input type="submit" name="Gerar" value="Gerar" class="form-control btn-primary">
                </div>     
            </form>
        </div>
      </div>
    </div>
  </body>
  <?php include 'imports2.php'; ?>
</html>