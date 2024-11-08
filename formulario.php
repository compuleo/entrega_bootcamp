<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Pet-Urgent-Care</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>

  <div class="container">
  <!-- Content here -->

    <div id="background"></div>
			<div id="Layer1"><img src="images/Layer1.png"></div>
			<div id="Layer4"><img src="images/Layer4.png"></div>
			<div id="Layer9"><img src="images/Layer9.png"></div>


<div class="container mt-5">
    <div id="contacto" class="card p-4 shadow-lg">
        <h2 class="text-center mb-4">Registrar Mascota</h2>

        <!-- Mostrar mensaje de éxito o error -->
        <?php
        session_start();
        if (isset($_SESSION['mensaje'])) {
            $mensaje = $_SESSION['mensaje'];
            $mensaje_tipo = $_SESSION['mensaje_tipo'];
            echo "<div class='alert alert-$mensaje_tipo'>$mensaje</div>";
            unset($_SESSION['mensaje']); // Limpiar el mensaje de la sesión
            unset($_SESSION['mensaje_tipo']);
        }
        ?>

        <form action="procesar_formulario.php" method="POST">
            <div class="form-group">
                <label for="nombre_usuario">Nombre del Usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nombre_mascota">Nombre de la Mascota:</label>
                <input type="text" id="nombre_mascota" name="nombre_mascota" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="patologia">Patología de la Mascota:</label>
                <textarea id="patologia" name="patologia" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </form>
    </div>
</div>

<div id="HeaderBackground"><img src="images/HeaderBackground.png"></div>
			<div id="Layer6"><img src="images/Layer6.png"></div>
			<div id="Layer3"><img src="images/Layer3.png"></div>
			<div id="Layer7"><img src="images/Layer7.png"></div>
			<div id="DogImage"><img src="images/DogImage.png"></div>
			<div id="DogImage_0"><img src="images/DogImage_0.png"></div>
			<div id="Layer2"><img src="images/Layer2.png"></div>
			<div id="PET"><img src="images/PET.png"></div>
			<div id="URGENT"><img src="images/URGENT.png"></div>
			<div id="Serviciodeurgenciasd"><img src="images/Serviciodeurgenciasd.png"></div>
			<div id="CARE"><img src="images/CARE.png"></div>
			<div id="logo"><img src="images/logo.png"></div>
			<!--  <div id="DogImage_1"><img src="images/DogImage_1.png"></div> -->
			<div id="VectorSmartObject"><img src="images/VectorSmartObject.png"></div>
			<div id="Enmomentoscrticostum"><img src="images/Enmomentoscrticostum.png"></div>
			<div id="Servicios"><img src="images/Servicios.png"></div>
			<div id="Llamaya"><img src="images/Llamaya.png"></div>
			<div id="VectorSmartObject_0"><img src="images/VectorSmartObject_0.png"></div>
			<div id="VectorSmartObject_1"><img src="images/VectorSmartObject_1.png"></div>
			<div id="NUESTROS"><img src="images/NUESTROS.png"></div>
			<div id="Ambulanciamedicaliza"><img src="images/Ambulanciamedicaliza.png"></div>
			<div id="Veterinarioencasa"><img src="images/Veterinarioencasa.png"></div>
			<div id="Medicamentosincluido"><img src="images/Medicamentosincluido.png"></div>
			<div id="Examenesdelaboratori"><img src="images/Examenesdelaboratori.png"></div>
			<div id="Lneadeemergencias"><img src="images/Lneadeemergencias.png"></div>
			<div id="layer_018000123123"><img src="images/layer_018000123123.png"></div>
			<div id="layer_57311445678"><img src="images/layer_57311445678.png"></div>
			<div id="Lneadeafiliaciones"><img src="images/Lneadeafiliaciones.png"></div>
			<div id="Contctenos"><img src="images/Contctenos.png"></div>
			<div id="contactpetservicesco"><img src="images/contactpetservicesco.png"></div>
			<div id="VectorSmartObject_2"><img src="images/VectorSmartObject_2.png"></div>
			<div id="VectorSmartObject_3"><img src="images/VectorSmartObject_3.png"></div>
			<div id="Layer5"><img src="images/Layer5.png"></div>
			<div id="Layer8"><img src="images/Layer8.png"></div>
			<div id="photonobackground"><img src="images/photonobackground.png"></div>
			<div id="LeonardoAAldana"><img src="images/LeonardoAAldana.png"></div>
			<div id="VectorSmartObject_4"><img src="images/VectorSmartObject_4.png"></div>
			<div id="Title"><img src="images/Title.png"></div>
			<div id="Titlecopy"><img src="images/Titlecopy.png"></div>
			<div id="Shadow"><img src="images/Shadow.png"></div>
			<div id="Object"><img src="images/Object.png"></div>
		</div>

        </div>
         <!-- Enlace a Bootstrap JS y dependencias de jQuery y Popper -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
 </body>

 </html>

