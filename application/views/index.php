<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biochemistry's Project</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>ext/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>ext/vendor/css/1-col-portfolio.css" rel="stylesheet">

    <style type="text/css">

      .animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
      .animate-opacity{animation:opac 0.8s}@keyframes opac{from{opacity:0} to{opacity:1}}
      .animate-top{position:relative;animation:animatetop 0.4s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
      .animate-left{position:relative;animation:animateleft 0.4s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
      .animate-right{position:relative;animation:animateright 0.4s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
      .animate-bottom{position:relative;animation:animatebottom 0.4s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}

    </style>

    <style type="text/css">

      /*@media (min-width: 768px) {
          .col-md-2half, .col-md-9half {
            float: left;
          }
          .col-md-2half {    
            -ms-flex: 0 0 20%;
                flex: 0 0 20%;
            max-width: 20%;
          }
          .col-md-2half {
            -ms-flex: 0 0 80%;
                flex: 0 0 80%;
            max-width: 80%;
          }
      }*/

      .card-collapse{
        visibility: collapse;
      }

      @media (min-width: 576px) {
        .card-collapse {
          visibility: collapse;
        }
      }

      @media (min-width: 768px) {
        .card-collapse {
          visibility: visible;
        }
      }


      .col-md-2half, .col-md-9half {
          position: relative;
          width: 100%;
          min-height: 1px;
          padding-right: 0px;
          padding-left: 15px;
      }

      .col-md-2half{
        width:21%;
        padding-bottom: 0;
      }
      .col-md-9half{
        width:79%;
        padding-bottom: 0;
      }

      .container {
        margin-right: 0;
        margin-left: 0;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%;
      }
      .list-group-item:hover {
        background-color:#eee; 
        color:#444;  
      }
      .list-group-item {
        color:#444;  
      }
      .list-group-item-heading{
        color:#444;  
      }
      .list-group-item-text {
        color:#444;  
      }
      .card-title{
        padding:unset;
      }
      .card-number{
        padding-top:4px;
      }
      .card-image{
        padding:unset;
      }
      /*.card-text{
        padding-bottom:4px;
      }*/
      .card-item{
        padding-bottom:4px;
        padding-top:4px;
      }

      .col-md-3{
        /*padding-right:0px;*/
        /*margin-right:0px;*/
      }
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">BioChemistry Group</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid">
    <div class="row">


      <div class="col-md-3 card-collapse">
        <!-- <div class="row"> -->
          <div class="card my-4">
            <h5 class="card-header">Hot</h5>
            <!-- <div class="card-body"> -->
              <div class="list-group">
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-4 card-image">
                      <img class="img-fluid" src="<?php echo base_url(); ?>uploads/src/molekul.png">
                    </div>
                    <div class="col-md-8 card-text">
                      <p>Biomolekuler Fantastik</p>
                    </div>
                  </div>
                </a>
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-4 card-image">
                      <img class="img-fluid" src="<?php echo base_url(); ?>uploads/src/dna-helix.gif">
                    </div>
                    <div class="col-md-8 card-text">
                      <p>Informasi DNA</p>
                    </div>
                  </div>
                </a>
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-4 card-image">
                      <img class="img-fluid" src="<?php echo base_url(); ?>uploads/src/nukleotida.png">
                    </div>
                    <div class="col-md-8 card-text">
                      <p>Ikatan Polinukleotida</p>
                    </div>
                  </div>
                </a>
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-4 card-image">
                      <img class="img-fluid" src="<?php echo base_url(); ?>uploads/src/eukariot.png">
                    </div>
                    <div class="col-md-8 card-text">
                      <p>Keajaiban Eukariotik</p>
                    </div>
                  </div>
                </a>
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-4 card-image">
                      <img class="img-fluid" src="<?php echo base_url(); ?>uploads/src/molekul.png">
                    </div>
                    <div class="col-md-8 card-text">
                      <p>Biomolekuler Fantastik</p>
                    </div>
                  </div>
                </a>

              </div>
            <!-- </div> -->
          </div>
          <!-- </div> -->
          
        </div>

      <div class="col-md-6">

      <!-- Page Heading -->
      <h1 class="my-4 animate-top">Biochemistry
        <small>Article</small>
      </h1>

      <!-- Project One -->
      <div class="row animate-left">
        <div class="col-md-4">
          <a href="<?php echo site_url('home/article');?>">
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url(); ?>uploads/src/molekul.png" alt="">
          </a>
        </div>
        <div class="col-md-8">
          <a href="<?php echo site_url('home/article');?>">
          <h3 style="color:black">Biomolekuler Fantastik</h3>
          </a>
          <p>Biologi Molekuler merupakan cabang ilmu pengetahuan yang mempelajari tentang hubungan molekul.</p>
          <!-- <a class="btn btn-primary" href="#">View Project</a> -->
        </div>

      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Two -->
      <div class="row animate-right">
        <div class="col-md-4">
          <a href="<?php echo site_url('home/article');?>">
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url(); ?>uploads/src/eukariot.png" alt="">
          </a>
        </div>
        <div class="col-md-8">
          <a href="<?php echo site_url('home/article');?>">
          <h3 style="color:black">Keajaiban Eukariotik</h3>
          </a>
          <p>Pengaturan ekspresi gen pada sel eukariotik hanya memungkinkan ekspresi sebagian kecil genom dalam suatu waktu.</p>
          <!-- <a class="btn btn-primary" href="#">View Project</a> -->
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Three -->
      <div class="row animate-left">
        <div class="col-md-4">
          <a href="<?php echo site_url('home/article');?>">
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url(); ?>uploads/src/dna-helix.gif" alt="">
          </a>
        </div>
        <div class="col-md-8">
          <a href="<?php echo site_url('home/article');?>">
          <h3 style="color:black">Informasi DNA</h3>
          </a>
          <p>DNA adalah polimer asam nukleat yang merupakan pembawa informasi genetik yang diturunkan kepada jasad keturunannya. </p>
          <!-- <a class="btn btn-primary" href="#">View Project</a> -->
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Four -->
      <div class="row">

        <div class="col-md-4">
          <a href="<?php echo site_url('home/article');?>">
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url(); ?>uploads/src/nukleotida.png" alt="">
          </a>
        </div>
        <div class="col-md-8">
          <a href="<?php echo site_url('home/article');?>">
          <h3 style="color:black">Ikatan Polinukleotida</h3>
          </a>
          <p>Dua rantai polinukleotida saling berikatan melalui ikatan hydrogen antara basa basa nitrogen dari rantai yang berbeda.</p>
          <!-- <a class="btn btn-primary" href="#">View Project</a> -->
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

      </div> <!-- end of md-8-->


      <div class="col-md-3">
        <!-- <div class="row"> -->
          <div class="card my-4">
            <h5 class="card-header">Trending</h5>
            <!-- <div class="card-body"> -->
              <div class="list-group">
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-2half card-number">
                      <h3>01</h3>
                    </div>
                    <div class="col-md-9half card-text">
                      Biomolekuler Fantastik Lorem Ipsum
                    </div>
                  </div>
                  <!-- <h6 class="list-group-item-heading">Biomolekuler Fantastik</h6> -->
                  <!-- <p class="list-group-item-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                </a>
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-2half card-number">
                      <h3>02</h3>
                    </div>
                    <div class="col-md-9half card-text">
                      Informasi DNA
                    </div>
                  </div>
                </a>
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-2half card-number">
                      <h3>03</h3>
                    </div>
                    <div class="col-md-9half card-text">
                      Ikatan Polinukleotida
                    </div>
                  </div>
                </a>
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-2half card-number">
                      <h3>04</h3>
                    </div>
                    <div class="col-md-9half card-text">
                      Keajaiban Eukariotik
                    </div>
                  </div>
                </a>
                <a class="list-group-item card-item" href="#">
                  <div class="row">
                    <div class="col-md-2half card-number">
                      <h3>05</h3>
                    </div>
                    <div class="col-md-9half card-text">
                      Biomolekuler Fantastik Lorem Ipsum
                    </div>
                  </div>
                </a>


              </div>
          </div>

          <div class="card my-4">
            <h5 class="card-header">Trending</h5>
            <!-- <div class="card-body"> -->
              <div class="list-group">
                <a class="list-group-item" href="#">
                  Ikatan Polinukleotida
                </a>
                <a class="list-group-item" href="#">
                  Keajaiban Eukariotik
                </a>
                <a class="list-group-item" href="#">
                  Biomolekuler Fantastik
                </a>
                <a class="list-group-item" href="#">
                  Biomolekuler Fantastik
                </a>
                <a class="list-group-item" href="#">
                  Informasi DNA
                </a>
                <a class="list-group-item" href="#">
                  Ikatan Polinukleotida
                </a>
                <a class="list-group-item" href="#">
                  Keajaiban Eukariotik
                </a>
                <a class="list-group-item" href="#">
                  Biomolekuler Fantastik
                </a>

              </div>
          </div>

                
          <!-- </div> -->
          
        </div>
    </div>


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container-fluid">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>ext/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>ext/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>ext/vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
