<?php 
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

    <main class="contenedor seccion">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jgp" type="image/jpeg" />
        <img
          src="./build/img/destacada3.jpg"
          alt="Imagen contacto"
          loading="lazy"
        />
      </picture>
      <h2>Llene el formulario de contacto</h2>

      <form action="#" class="formulario">
        <fieldset>
          <legend>Información Personal</legend>

          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" />

          <label for="email">Email</label>
          <input type="email" id="email" name="email" />

          <label for="telefono">Telefono</label>
          <input type="tel" id="telefono" name="telefono" />

          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje"></textarea>
        </fieldset>

        <fieldset>
          <legend>Información sobre la propiedad</legend>
          <label for="opciones">Venta | Compra</label>
          <select name="opciones" id="opciones">
            <option value="" disabled selected>-- Seleccione --</option>
            <option value="Compra">Compra</option>
            <option value="Vende">Vende</option>
          </select>
          <label for="presupuesto">Precio o Presupuesto</label>
          <input type="number" id="presupuesto" name="presupuesto" />
        </fieldset>

        <fieldset>
          <legend>Contacto</legend>
          <p>¿Como desea ser contactado?</p>

          <div class="forma-contacto">
            <label for="contactar-telefono">Télefono</label>
            <input
              name="contacto"
              type="radio"
              id="contactar-telefono"
              value="telefono"
            />
            <label for="contactar-email">Email</label>
            <input
              name="contacto"
              type="radio"
              id="contactar-email"
              value="email"
            />
          </div>

          <p>Si elegié teléfono, elija fecha y la hora</p>

          <label for="fecha">Fecha</label>
          <input type="date" id="fecha" name="fecha" />
          <label for="hora"></label>
          <input type="time" name="hora" id="hora" min="09:00" max="18:00" />
        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde" />
      </form>
    </main>

<?php
  incluirTemplate('footer');
?>
