<div class="container">
    <h2>Registro de Usuario</h2>
    <form action="?controller=usuario&&action=save" method="POST">
        <div class="form-group">
            <label for="text">Datos Personales:</label>
            <input type="text" class="form-control" name="nameuser" id="nombres" placeholder="Ingrese su Nombre">
        </div>
        <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control" name="lastnameuser" placeholder="Ingrese su Apellido">

        </div>
        <div class="form-group">
            <label for="text"></label>
            <input type="text" class="form-control" name="iduser" placeholder="Nro. Identificación" pattern="[0-9]´{7,12}" title="Solo se aceptan numeros">
        </div>
        <div class="form-group">
            <label for="text"></label>
            <label for="text">Genero        Masculino</label>
            <input type="radio" class="form-control" name="maleuser">
            <label for="text">Femenino</label>
            <input type="radio" class="form-control" name="femaleuser">
        </div>
        <div class="form-group">
            <label for=""></label>
            <input type="number" class="form-control" name="telefonouser" placeholder="Numero de Telefono">

        </div>       
        <div class="form-group">
            <label for=""></label>
            <input type="number" class="form-control" name="celularuser" placeholder="Número de Célular">
        </div>            
        <div class="form-group">
            <label for="text"></label>
            <label for="text">Departamento</label>
                    <select name="dpt_born" id="">
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
        <div>
            <label for="text"></label>
                    <label for="">Ciudad Nacimiento: </label>
                    <select name="ciudad" id="">
                        <option value="">Selecione</option>
                        <option value="">Barranquilla</option>
                        <option value="">Bogota</option>
                        <option value="">Pasto</option>
                        <option value="">Cali</option>
                        <option value="">Tunja</option>
                    </select>
        </div>
        <div>
            <label for=""></label>
            <input type="text" name="emailuser" placeholder="Correo Electronico" pattern="[a-z]{0,10}" title="Solo minusculas">
        </div>
                <div>
                    <label for="">Contraseña: </label><input type="password" name="passuser" minlength="8" maxlength="12">
                </div>
                <div>
                    <label for="">Confirmar contraseña: </label> <input type="password" name="passuser_2"  minlength="8" maxlength="12">
                </div>
                <div>
                    <label for="">Foto: </label> <input type="text" name="photouser"> <input type="submit" value="Examinar">
                </div>
                <div>
                    <label for="">Tipo Identificación: </label>
                    <select name="" id="">
                        <option value="">Seleccione</option>
                        <option value="">Cedula de ciudadania</option>
                        <option value="">Tarjeta de Identidad</option>
                        <option value="">Cedula de Extranjeria</option>
                    </select><br><br>
                </div>
                
                <input type="submit" value="Registrar">

        </div>
    </form>
</div>