<!DOCTYPE html>
<?php
  require_once('conexao.php');
  // require_once('scripts_php/utils.php');
?>
<html lang="pt-br">

<head>
  <?php
    include('init-page.php');
  ?>
</head>

<body class="page-services">

  <?php
    include('header.php');
  ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/cards-4.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Vídeos</h2>
        <ol>
          <li><a href="index.php">Início</a></li>
          <li>Vídeos</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <?php
      mysqli_select_db($mysqli, $db) or die("Could not select database");
      
      $pagina = 1;

      if (isset($_GET['pagina'])) {
        $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
      }

      if (!$pagina) {
        $pagina = 1;
      }

      $limite = 10;
      $inicio = ($pagina * $limite) - $limite;

      $query = "SELECT COUNT(nome) num_artefatos FROM artefato";
      $num_artefatos = mysqli_query($mysqli, $query);
      $num_artefatos = mysqli_fetch_array($num_artefatos)['num_artefatos'];

      $paginas = ceil($num_artefatos / $limite);

      $query = "SELECT * FROM artefato ORDER BY ano DESC LIMIT $inicio, $limite";
      $artefatos_result = mysqli_query($mysqli, $query);
      $num_artefatos_pagina = mysqli_num_rows($artefatos_result);
    ?>

    <!-- ======= Seção biblioteca ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="row gy-5 posts-list">
              <p>
              A seguir você encontrará diversos vídeos sobre Educação Popular em Saúde, visando facilitar sua compreensão sobre o assunto.
              </p>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/oZhC25gqa4Q?si=vEX9_ALw6gwIZq_J">
                        O que é Educação Popular em Saúde
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/oZhC25gqa4Q?si=vEX9_ALw6gwIZq_J">
                            <time datetime="2023">
                              2023
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: seriesus
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/oZhC25gqa4Q?si=vEX9_ALw6gwIZq_J">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/yGQKIlmDCvo?si=FuTE4RiQrCSh3Kb_">
                        Qual a diferença entre a Educação em Saúde e a Educação Popular em Saúde?
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/yGQKIlmDCvo?si=FuTE4RiQrCSh3Kb_">
                            <time datetime="2024">
                              2023
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: seriesus
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/yGQKIlmDCvo?si=FuTE4RiQrCSh3Kb_">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>
   
              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/h4KCp3qd-T4?si=kPVH3giFUBKA5IuL">
                        Educação Popular em Saúde. Versão estendida
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/h4KCp3qd-T4?si=kPVH3giFUBKA5IuL">
                            <time datetime="2024">
                              2024
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: seriesus
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/h4KCp3qd-T4?si=kPVH3giFUBKA5IuL">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/IECJgE3RKHo?si=DX3bc7d-o7lC9EMM">
                        Educação Popular em Saúde e a criação do SUS
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/IECJgE3RKHo?si=DX3bc7d-o7lC9EMM">
                            <time datetime="2023">
                              2023
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: seriesus
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/IECJgE3RKHo?si=DX3bc7d-o7lC9EMM">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/TE3U_9sa6rs?si=R0uvmjP-7Ddgo96u">
                        Qual a relação entre os Princípios do SUS e a Educação Popular?
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/TE3U_9sa6rs?si=R0uvmjP-7Ddgo96u">
                            <time datetime="2023">
                              2023
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: seriesus
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/TE3U_9sa6rs?si=R0uvmjP-7Ddgo96u">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/jl_kXIi6wEw?si=euxewPZF_Dr2yYaU">
                        Política Nacional de Educação Popular em Saúde Série SUS
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/jl_kXIi6wEw?si=euxewPZF_Dr2yYaU">
                            <time datetime="2023">
                              2023
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: seriesus
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/jl_kXIi6wEw?si=euxewPZF_Dr2yYaU">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/3Jybx-8-kU8?si=IUU3ZUdyFgf29nfC">
                        O que é mais antigo, o SUS ou a Educação Popular em Saúde.
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/3Jybx-8-kU8?si=IUU3ZUdyFgf29nfC">
                            <time datetime="2019">
                              2019
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: seriesus
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/3Jybx-8-kU8?si=IUU3ZUdyFgf29nfC">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/MCg4vtIwT28?si=8Jw2Oe8kN280e4in ">
                        O que NÃO é Educação Popular?
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/MCg4vtIwT28?si=8Jw2Oe8kN280e4in ">
                            <time datetime="2023">
                              2023
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: seriesus
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/MCg4vtIwT28?si=8Jw2Oe8kN280e4in ">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/o6j4Hm63x6U?si=iZ9BFStjcL0AYk1O ">
                        Política Nacional de Educação Popular em Saúde - PNEPS/SUS
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/o6j4Hm63x6U?si=iZ9BFStjcL0AYk1O ">
                            <time datetime="2021">
                              2021
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: Osvaldo Bonetti
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/o6j4Hm63x6U?si=iZ9BFStjcL0AYk1O ">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://youtu.be/S_ySkyDl0gw?si=YIfQLpdtc3t2g0tT">
                        Educação Popular: apontamentos e reflexões
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://youtu.be/S_ySkyDl0gw?si=YIfQLpdtc3t2g0tT">
                            <time datetime="2020">
                              2020
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Canal: PINAB UFPB
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://youtu.be/S_ySkyDl0gw?si=YIfQLpdtc3t2g0tT">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              




              <!-- End post list item -->

          </div>
          
          
          
          <!-- End blog posts list -->

            

            <div class="blog-pagination">
              <ul class="justify-content-center">
                
                <li>
                  <a href="?pagina=1">
                    1
                  </a>
                </li>
                <li>
                  <a href="?pagina=<?php print_r($pagina-1)?>">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active">
                  <a href="?pagina=<?php print_r($pagina)?>">
                    <?php print_r($pagina)?>
                  </a>
                </li>
                <li>
                  <a href="?pagina=<?php print_r($pagina+1)?>">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
                <li>
                  <a href="?pagina=<?php print_r($paginas)?>">
                    <?php print_r($paginas)?>
                  </a>
                </li>
                
              </ul>
            </div><!-- End blog pagination -->

          
        </div>

      </div>
    </section><!-- End Blog Section -->

    
     
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include('footer.php');
  ?>
  <!-- End Footer -->

  <?php
  include('end-page.php');
  ?>

</body>

</html>