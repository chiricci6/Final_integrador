# nuevo_integrador
Hay un lugar donde se puede iniciar sesion
User: Admin
Pass: Admin123

Tengo q terminar el usuario
poner lindo los forms
poner un fondo q no de asco
ver si puedo ordenar los vinos
ver si puedo hacer otra pagina mas ineresante? una de contacto capaz



 <label for="nombre">Nombre:</label>
      <input type="varchar" name="nombre" id="nombre" required>
      <br>
      <label for="apellido">Apellido:</label>
      <input type="varchar" name="apellido" id="apellido" required>
      <br>
      <label for="comentarios">Informacion que desea:</label>
      <textarea name="comentarios" id="comentarios" required></textarea>
      <br>

<form class="completar_compra" action="formulario_2.php" onsubmit="event.preventDefault();" method="post"> <!--Formulario de compra-->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <br>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="cantidad">Cantidad de tickets:</label>
        <input type="number" name="cantidad" id="quantity" required>
        <br>
        <input type="submit" value="Guardar informacion">
        <div class="tamaño">
          <p>Promoción</p> <!--Para la promo-->
          <select name="promotion" id="promotion" class="vista_form">
            <option value="none">-</option>
            <option value="student">Primera vez</option>
            <option value="trainee">Socio</option>
            <option value="junior">Juvilado</option>
          </select>
        </div>
        <div class="contenedor_total">
          <p>Total a pagar: <span id="price">$0</span></p>
        </div>
        <div class="form_botones">
          <button id="reset" class="btn btn-primary ticket-btn">Restablecer</button>
          <button id="resume" class="btn btn-primary ticket-btn">Total a pagar</button> <!--Esto es lo de javascript-->
        </div>
      </form>
    </div>