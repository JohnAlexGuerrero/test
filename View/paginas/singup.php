<div class="container">
  <center><h2>Formulario de Registro</h2></center>
  <form action="/action_page.php">
  <label for="text">Datos Personales:</label>
    <div class="form-group">
      <label for="nom">Nombres:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      <label for="apel">Apellidos:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter your Lastname" name="lastname">
    </div>
    <div class="form-group">
      <label for="pwd">Nro. Identificación:</label>
      <input type="number" class="form-control" id="id" placeholder="Enter Nro. Identificación" name="iduser">
    </div>
    <div class="form-group form-check">
    <label for="pwd">Genero:</label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="male"> Masculino
      </label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="female"> Femenino
      </label>
    </div>
    <div class="form-group">
      <label for="nom">Nor. Telefono:</label>
      <input type="number" class="form-control" id="telefono" placeholder="Enter Telefono" name="telefono">
    </div>
    <div class="form-group">
      <label for="apel">Celular:</label>
      <input type="number" class="form-control" id="celular" placeholder="Enter celular" name="celular">
    </div>
    <div class="form-group">
      <label for="pwd">Departamento de Nacimiento:</label>
      <select name="dpt" id="departamento">
      <option value="Seleccione">Seleccion</option>
                        <option value="Seleccione">Amazonas</option>
                        <option value="Seleccione">Antioquia</option>
                        <option value="Seleccione">Arauca</option>
                        <option value="Seleccione">Bolivar</option>
                        <option value="Seleccione">Boyaca</option>
                        <option value="Seleccione">Caldas</option>
                        <option value="Seleccione">Nariño</option>
                        <option value="Seleccione">Putumayo</option>
      </select>
    </div>
    <div class="form-group">
      <label for="pwd">Ciudad de Residencia:</label>
      <select name="ciudad" id="city">
      <option value="Seleccione">Seleccion</option>
      <option value="">Selecione</option>
                        <option value="">Barranquilla</option>
                        <option value="">Bogota</option>
                        <option value="">Pasto</option>
                        <option value="">Cali</option>
                        <option value="">Tunja</option>
      </select>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
      <label for="nom">Password:</label>
      <input type="password" class="form-control" id="name" placeholder="Enter Password" name="name">
    </div>
    <div class="form-group">
      <label for="nom">Comfirmar Password:</label>
      <input type="password" class="form-control" id="name" placeholder="Enter nuevamente Password" name="name">
    </div>
    <div class="form-group">
      <label for="email">Foto:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Tipo de Identificación:</label>
      <select name="ciudad" id="city">
      <option value="Seleccione">Seleccion</option>
      <option value="">Seleccione</option>
                        <option value="">Cedula de ciudadania</option>
                        <option value="">Tarjeta de Identidad</option>
                        <option value="">Cedula de Extranjeria</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>
    </form>
</div>