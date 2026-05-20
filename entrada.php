<?php 
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Guia para la decoración de tu hogar</h1>

      <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp" />
        <source srcset="build/img/destacada2.jgp" type="image/jpeg" />
        <img
          src="./build/img/destacada2.jpg"
          alt="Imagen de la propiedad"
          loading="lazy"
        />
      </picture>
      <p class="informacion-meta">
        Escrito el <span>20/10/2025</span> por: <span>Admin</span>
      </p>

      <div class="resumen-propiedad">
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam
          deserunt ad obcaecati non a, repudiandae nostrum culpa ex sunt, nisi,
          tempora quibusdam porro distinctio placeat odio at beatae maxime
          eveniet? Ducimus odit hic rerum illo ipsam autem a nulla distinctio
          incidunt saepe, eius quisquam eum maiores aspernatur ipsa quae
          asperiores dolor corporis? Quia accusantium itaque distinctio
          blanditiis velit, ipsam dolorum? Qui minus culpa iusto corrupti,
          temporibus, ab neque voluptatum magnam perferendis, laborum veniam at
          ipsum doloremque expedita? Illo molestias labore ipsum id a, aliquid
          voluptate nesciunt rem voluptates beatae. Ratione. Ipsa laborum
          maiores libero. Odio quam soluta tenetur corporis explicabo culpa nam
          mollitia velit quo amet nihil eligendi inventore recusandae, illo non,
          provident nulla quia ut excepturi repudiandae in natus. Quos
          necessitatibus quibusdam pariatur odio suscipit. Repudiandae unde
          aliquam eius, quod laudantium delectus atque ad sequi nulla,
          distinctio repellat eum. Modi delectus quidem ad ipsa eius ut dicta
          quam ipsum. Iste sed modi accusamus dolores corrupti! Ab autem vero
          temporibus quis nemo doloribus. Velit qui assumenda, corrupti animi
          accusantium vero voluptates aperiam eum placeat? Illum mollitia vero
          commodi amet dolorum?
        </p>
      </div>
    </main>

<?php
  incluirTemplate('footer');
?>