<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Iniciar sesión para ventilar</title>

    	
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

    <style>
    
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body{
        background: #fff;
      }

      .row{
        background-color: #Ffff;
        border-radius: 30px;
        box-shadow: 12px 12px 22px grey;
      }

      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
      }

      .btn-1{
        border:none;
        outline:none;
        height:60px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight:bold;
        margin-top: 0px;
        margin-bottom:30px;
      }

      .btn-1:hover{
        background-color: white;
        border: 1px solid black;
        color: black;
      }

      a{
        outline:none;
        color: black;
      }

      a:hover{
        color:grey;
      }

      @media (max-width:1000px){
        img{
          border-top-right-radius:30px;
          margin:0;
          border-bottom-left-radius: 0px;
          border-bottom-right-radius: 0px;
        }

      }

      .clave{
        margin-top: 0px;
      }

      @media (min-width:1200px){
        .clave{
          margin-top: 20px;
        }

        .btn-1{
          margin-top: 20px;
        }
      }

      @media (max-width:1199px){
        .clave{
          margin-top: 10px;
        }

        .btn-1{
          margin-top: 20px;
          margin-bottom: 8px;
        }

        h4{
          margin-top:-10px;
        }

      }

      @media (max-width:990px){

        .btn-1{
          margin-top: 40px;
          margin-bottom: 30px;
        }

        h4{
          margin-top:10px;
        }
      }

      .row.no-pad {
        margin-right:0;
        margin-left:0;
      }
      .row.no-pad > [class*='col-'] {
        padding-right:0;
        padding-left:0;
      }

    </style>

  </head>
  <body>
    
    <section class="form my-5 mx-5">
      <div class="container">
        <div class="row no-pad">
          <!--  no-gutters elimina la separación predeterminada de las secciones de 15px--->
              <div class="col-lg-5">
                  <img src="img/logoseg.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-7 clave px-5 pt-4">
                <h2 class="font-weight-bold py-3">¡Bienvenido!</h2>
                <h4>Inicia sesión para continuar</h4>
                <form id="formulario" action="login.php" method="post">
                  <div class="form-row">
                    <div class="col-lg-7">
                      <input name="correo" pattern="[A-Za-z0-9_-@]{1,30}" type="email" class="form-control my-4 p-3" placeholder="Correo electrónico" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-7">
                      <input name="pass" pattern="[A-Za-z0-9_-]{1,30}" type="password" class="form-control my-4 p-3" placeholder="*********" required>
                    </div>
                  </div>
                  	
                  <div class="g-recaptcha" data-sitekey="6LflTqoaAAAAAI-MUBu4XZYeUUdcPieOOEmAGtTG"></div>
                  <div class="form-row">
                    <div class="col-lg-7">
                      <button type="submit" class="btn-1">Iniciar</button>
                    </div>
                  </div>
                  <a class="clave2" href="forgopassword.html">¿Contraseña olvidada?</a>
                  <p>¿No tienes una cuenta?<a href="registro.html"> ¡Registrate con nosotros!</a></p>
                </form>

                <div id="message" class="text-center"></div>

              </div>
          </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  </body>
</html>
