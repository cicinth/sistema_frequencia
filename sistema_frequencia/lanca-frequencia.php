<?php
    $oficina = "Dança";
    $local = "Local1";
    $horaIncio = "10:00";
    $horaFim = "11:00";
    $dias = "Segunda, Quarta e Sexta";
    $sigla = "B";
?>
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
                <h1>Lançar frequência</h1>
            </div>
        </div>
        <dic class = "row">
          <div class="col-md-6 col-md-offset-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group col-sm-6">  
                    <label>Oficina: <?php echo $oficina?></label>
                </div>
                <div class="form-group col-sm-6">  
                    <label>Local: <?php echo $local?></label>
                </div>
                <div class="form-group col-sm-6">  
                    <label>Horario: <?php echo $horaIncio?> as <?php echo $horaFim?></label> 
                </div>
                <div class="form-group col-sm-6">  
                    <label>Dias: <?php echo $dias?></label>
                </div>
                <div class="form-group col-sm-12">  
                    <label>Sigla: <?php echo $sigla?></label>
                </div>
                <div class="form-group col-sm-12"> 
                     <input class="form-control" placeholder="Data" type = "date">
                </div>
                <div class="form-group col-sm-12">  
                    <input class="form-control" placeholder="Numero de alunos presentes">
                </div>
                <div class="form-group col-sm-12">
                    <label>Feriado</label>
                        <input type="checkbox">      
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