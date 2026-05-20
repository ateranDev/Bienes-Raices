<?php 

  require 'includes/funciones.php';

  incluirTemplate('header');
?>

    <main class="contenedor seccion">
      <h1>Conoce Sobre Nosotros</h1>

      <div class="contenido-nosotros">
        <div class="imagen">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp" />
            <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
            <img
              src="build/img/nosotros.jpg"
              loading="lazy"
              alt="Sobre nosotros"
            />
          </picture>
        </div>

        <div class="texto-nosotros">
          <blockquote>25 Años de Experiencia</blockquote>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit,
            dignissimos ipsa aliquam incidunt eaque ab voluptatibus nam
            veritatis mollitia. Vel quia itaque similique cumque illum ipsa
            voluptatum culpa amet aspernatur. Doloremque adipisci quis nihil
            dolor in aliquam quasi ut laborum sint? Rerum consectetur aliquid,
            omnis esse earum eos sequi quas, laudantium in culpa commodi aut
            facere porro corrupti, vitae exercitationem. Repudiandae aliquam
            facere ipsam voluptas ab! Veritatis nemo autem rerum fugit
            voluptatum, at, a, amet qui quia saepe voluptates perspiciatis quasi
            id earum. Dolores excepturi ab dolor voluptate assumenda
            praesentium? Libero at provident itaque deleniti, culpa voluptate
            eveniet? Tenetur explicabo quas facere delectus doloremque eos
            assumenda? Dicta alias labore, obcaecati itaque sunt laudantium
            eius. Laborum quas vero rerum nihil tempora.
          </p>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae
            quaerat veniam earum possimus deserunt, consectetur accusamus neque
            excepturi consequatur quasi perferendis vel pariatur mollitia? Nulla
            quod nihil aperiam necessitatibus blanditiis?
          </p>
        </div>
      </div>

      <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
          <div class="icono">
            <img
              src="build/img/icono1.svg"
              alt="Icono Seguridad"
              loading="lazy"
            />
            <h3>Seguridad</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolor
              deleniti recusandae ad! Soluta, laboriosam perferendis laudantium
              fuga ea nesciunt repellat error commodi doloremque quo voluptates
              odit obcaecati id cumque.
            </p>
          </div>
          <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
            <h3>Precio</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolor
              deleniti recusandae ad! Soluta, laboriosam perferendis laudantium
              fuga ea nesciunt repellat error commodi doloremque quo voluptates
              odit obcaecati id cumque.
            </p>
          </div>
          <div class="icono">
            <img
              src="build/img/icono3.svg"
              alt="Icono A Tiempo"
              loading="lazy"
            />
            <h3>A tiempo</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolor
              deleniti recusandae ad! Soluta, laboriosam perferendis laudantium
              fuga ea nesciunt repellat error commodi doloremque quo voluptates
              odit obcaecati id cumque.
            </p>
          </div>
        </div>
      </section>
    </main>

<?php
  incluirTemplate('footer');
?>
