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
                <h1> Cadastro de Turma</h1>
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
                    <input class="form-control" placeholder="Numero de alunos">
                </div>
                <div class="form-group col-sm-12">
                    <label>Dias da semana</label>
                        <div class="checkbox">
                             <label>
                                <input type="checkbox" value="">Domingo
                             </label>
                             <label>
                                <input type="checkbox" value="">Segunda
                             </label>
                             <label>
                                <input type="checkbox" value="">Terça
                             </label>
                             <label>
                                <input type="checkbox" value="">Quarta
                             </label>
                             <label>
                                <input type="checkbox" value="">Quinta
                             </label>
                             <label>
                                <input type="checkbox" value="">Sexta
                             </label>
                             <label>
                                <input type="checkbox" value="">Sabado 
                             </label>
                        </div>
                </div>
                <div class="form-group col-sm-12"> 
                    <input class="form-control" placeholder="Hora Inicio">
                </div>
                <div class="form-group col-sm-12"> 
                    <input class="form-control" placeholder="Hora Fim">
                </div>
                <div class="form-group col-sm-12">  
                    <select id="" class="form-control ">
                        <option>Instrutor</option>
                    </select>
                </div>
                <div class="form-group col-sm-12"> 
                    <input class="form-control" placeholder="Sigla">
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