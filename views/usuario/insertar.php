<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
    
    <h1>Pagina Usuario de insertar</h1>

    <form action="<?php echo constant('ROUTE_URL')?>usuario/insertar" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="id_user">Nombre de usuario</label>
    <input type="text" class="form-control"  placeholder="Nombre de usuario" name="id_user">
  </div>
  <div class="form-group">
    <label for="user_email">Correo electronico</label>
    <input type="email" class="form-control"  placeholder="Correo electronico" name="user_email">
  </div>
  <div class="form-group">
    <label for="user_name">Nombre</label>
    <input type="text" class="form-control"  placeholder="Nombre" name="user_name">
  </div>
  <div class="form-group">
    <label for="first_name">Apellido paterno</label>
    <input type="text" class="form-control" placeholder="Apellido paterno" name="first_name">
  </div>
  <div class="form-group">
    <label for="last_name">Apellido materno</label>
    <input type="text" class="form-control"  placeholder="Apellido materno" name="last_name">
  </div>
  <div class="form-group">
    <label for="user_password">Contraseña</label>
    <input type="password" class="form-control"  placeholder="Contraseña" name="user_password">
  </div>
  <div class="form-group col-md-4">
      <label for="rol">Rol</label>
      <select id="inputState" class="form-control" name="rol">
        <option selected value="0">Comprador</option>
        <option value="1">Vendedor</option>
      </select>
  </div>
  <div class="form-group col-md-4">
      <label for="gender">Genero</label>
      <select id="inputState" class="form-control" name="gender">
        <option selected value="0">Hombre</option>
        <option value="1">Mujer</option>
      </select>
  </div>
  <div class="form-group col-md-4">
      <label for="private">Privacidad</label>
      <select id="inputState" class="form-control" name="private">
        <option selected value="0">Si</option>
        <option value="1">No</option>
      </select>
  </div>
  <div class="form-group">
      <label for="user_date">Fecha de nacimiento</label>
      <input type="date" class="form-control" name="user_date">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    <?php require 'views/footer.php'; ?>
</body>
</html>