<?php 
    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
      <h1>Crear</h1>

      <a href="/admin" class="boton boton-verde">Volver</a>

    <form action="/admin/propiedades/crear.php" method="POST" class="formulario">
        <fieldset>
            <legend>Información general</legend>

            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" placeholder="Titulo de propiedad" id="titulo">

            <label for="precio">Precio</label>
            <input type="number" name="precio" placeholder="Precio de propiedad" id="precio">

            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" id="imagen">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" min="1" max="9" placeholder="Ej: 3" id="habitaciones">

            <label for="wc">Baños</label>
            <input type="number" min="1" max="9" placeholder="Ej: 2" id="wc">

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" min="1" max="9" placeholder="Ej: 2" id="estacionamiento">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select id="vendedor">
                <option selected disabled value="">Seleccione</option>
                <option value="1">Adrian Teran</option>
                <option value="2">Ruth Ramos</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear propiedad" class="boton boton-verde">
    </form>

    </main>

<?php
  incluirTemplate('footer');
?>