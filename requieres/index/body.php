
  <!-- Se Muestra unicamente el carousel en disp. <576 -->
  <article>

    <div class="container-fluid px-4">

      <div id="carouselExampleSlidesOnly" class="carousel slide d-xs-block d-sm-none carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">

          <div class="carousel-item active rounded-4 py-5" id="panelCarousel">
            <div class="row">
              <div class="row align-items-center justify-content-center ms-2">
                  <img src="imgs/books/index/carousel-img-1.png" class="d-block w-75">
              </div>
              <div class="row">
                  <label class="h1 text-center text-muted display-4 ms-2" id="tituloPaneles">
                    Descubre nuevas<br/>
                    <label class="display-3 ms-2" id="subTituloPaneles"> <strong> Historias </strong> </label>
                  </label>
              </div>
            </div>
          </div>

          <div class="carousel-item rounded-4 py-5" id="panelCarousel">
            <div class="row">
              <div class="row align-items-center justify-content-center ms-2">
                  <img src="imgs/books/index/carousel-img-2.png" class="d-block w-75">
              </div>
              <div class="row">
                  <label class="h1 text-center text-muted display-4 ms-2" id="tituloPaneles">
                    Comparte tus lecturas<br/>
                    <label class="display-3 ms-2" id="subTituloPaneles"> <strong> con los demás </strong> </label>
                  </label>
              </div>
            </div>
          </div>

          <div class="carousel-item rounded-4 py-5" id="panelCarousel">
            <div class="row">
              <div class="row align-items-center justify-content-center ms-4">
                  <img src="imgs/books/index/carousel-img-3.png" class="d-block w-50">
              </div>
              <div class="row">
                  <label class="h1 text-center text-muted display-4 ms-2 pt-3" id="tituloPaneles">
                    Lleva tu libro<br/>
                    <label class="display-3 ms-2" id="subTituloPaneles"> <strong> hacia la cima </strong> </label>
                  </label>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>

        </div>

     </div>

    </div>



  </article>

  <!-- Se muestra el panel sobre en disp. <576 -->
  <article class="container-fluid h-100 mt-4  d-xs-block d-sm-none px-4" id="panelSobre">

    <div class="container d-flex rounded-4 flex-column justify-content-center align-items-center">
      <h1 class="fs-1 mt-5" id="tituloPaneles" style="color: #ff8200;">¿Qué es Bargo?</h1>
      <label class="fs-5 text-center px-3" id="tituloPaneles">Una página que te permite </label>
      <label class="fs-5 text-center px-3" id="tituloPaneles">llevar a cualquier lugar tus libros</label>
      <label class="fs-5 text-center px-3" id="tituloPaneles">compartir, escribir reseñas y calificar.</label>
      <label class="fs-4 mb-5" id="tituloPaneles" style="color: #ff8200;">Sé tu escritor favorito.</label>
    </div>

  </article>

  <!-- Se muestra el panel de desarrollo en disp. <576 -->
  <article class="container-fluid mb-2 h-100 mt-4 d-xs-block d-sm-none px-4" id="sobre" >

    <div class="cotainer d-flex rounded-4 flex-column justify-content-center align-items-center pb-5" style="background-color:#fee3d9  ;">
      <h1 class="fs-2 mt-5" id="tituloPaneles" style="color: #ff8200 ;">Contáctenos</h1>
      <div class="d-flex mt-3 w-50 align-items-center justify-content-between">

        <a href="https://github.com/jaglux12">
            <img src="imgs/iconos/menus/github.svg" alt="Bootstrap" width="35" height="35">
        </a>

        <a href="https://www.instagram.com/gonzalolopez3471/">
            <img src="imgs/iconos/menus/instagram.svg" alt="Bootstrap" width="35" height="35">
        </a>

        <a href="https://mastodon.social/web/@bananapants87">
            <img src="imgs/iconos/menus/mastodon.svg" alt="Bootstrap" width="35" height="35">
        </a>


      </div>
    </div>

  </article>

<!-- Este contenido se muestra en tablets y computadoras -->
<section class="container-fluid mb-4 px-4 d-none d-sm-block">

      <div class="container-fluid rounded-4">

        <div class="row">

          <div id="carouselTabCom" class="carousel slide d-none d-sm-block" data-bs-ride="carousel">

            <div class="carousel-inner">

              <div class="carousel-item active rounded-4 py-5" id="panelCarousel">

                <div class="row">

                  <div class="col-sm-6 d-flex justify-content-center align-items-center">
                      <label class="h1 text-center text-muted display-4 ms-2" id="tituloPaneles">
                        Descubre nuevas<br/>
                        <label class="display-3 ms-2" id="subTituloPaneles"> <strong> Historias </strong> </label>
                      </label>
                  </div>


                  <div class="col-sm-6">
                    <div class="row align-items-center justify-content-center ms-2">
                        <img src="imgs/books/index/carousel-img-1.png" class="d-block w-75">
                    </div>
                  </div>

                </div>

              </div>

              <div class="carousel-item rounded-4 py-5" id="panelCarousel">

                <div class="row">

                  <div class="col-sm-6 d-flex justify-content-center align-items-center">
                      <label class="h1 text-center text-muted display-4 ms-2" id="tituloPaneles">
                        Comparte tus lecturas<br/>
                        <label class="display-3 ms-2" id="subTituloPaneles"> <strong> con los demás </strong> </label>
                      </label>
                  </div>


                  <div class="col-sm-6">
                    <div class="row align-items-center justify-content-center ms-2">
                        <img src="imgs/books/index/carousel-img-2.png" class="d-block w-75">
                    </div>
                  </div>

                </div>

              </div>

              <div class="carousel-item rounded-4 py-5" id="panelCarousel">

                <div class="row">

                  <div class="col-sm-6 d-flex justify-content-center align-items-center">
                      <label class="h1 text-center text-muted display-4 ms-2" id="tituloPaneles">
                        Lleva tu libro<br/>
                        <label class="display-3 ms-2" id="subTituloPaneles"> <strong> hacia la cima </strong> </label>
                      </label>
                  </div>


                  <div class="col-sm-6">
                    <div class="row align-items-center justify-content-center ms-2">
                        <img src="imgs/books/index/carousel-img-3.png" class="d-block w-50">
                    </div>
                  </div>

                </div>

              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselTabCom" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselTabCom" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>

            </div>

         </div>

        </div>

      </div>

      <div class="container-fluid rounded-4 mt-4" style="background-color:#fce0cd ;">

        <div class="row">

          <div class="col-sm-* d-flex flex-column justify-content-center align-items-center flex-column p-4">

            <h1 class="fs-1 mt-5" id="tituloPaneles" style="color: #ff8200;">Sobre</h1>
            <label class="fs-4 text-center " id="tituloPaneles">Lleva tus lecturas a cualquier lugar, </label>
            <label class="fs-4 text-center" id="tituloPaneles">comparte, escribe reseñas y califica.</label>
            <label class="fs-4 mb-5" id="tituloPaneles" style="color:#ff8200;">Sé tu escritor favorito.</label>
          </div>

        </div>

      </div>

      <div class="container-fluid rounded-4 mt-4" style="background-color:#fee3d9  ;">

        <div class="row">

          <div class="col-sm-* d-flex justify-content-center align-items-center flex-column p-4">
            <h1 class="fs-1" id="tituloPaneles" style="color: white;">Desarrollo</h1>
            <a class="fs-4 text-dark" style="" id="tituloPaneles" href="https://www.github.com/jaglux12">Jaglux12</a>
          </div>

        </div>

      </div>

</section>
