<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FREGATA</title>
    <link rel="icon" href="images/logo.png">
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="styles/shards-dashboards.1.0.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.0.0.min.css">
    <link rel="stylesheet" href="styles/mainstyle.css">


  </head>
  <body class="h-100">
    <center>
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-4">
        </div>
        <!-- Input & Button Groups -->
        <div class="col-md-4">

        <div style="top:80%;"class="card card-small mb-4">
          <div class="card-header border-bottom">
            <h6 class="m-0">Fregata</h6>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item px-3">

          <form id ="check_form" >      <!-- Seamless Input Groups -->

                <div class="input-group mb-3">
                  <div class="input-group input-group-seamless">
                    <span class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">person</i>
                      </span>
                    </span>
                    <input type="text" class="form-control" name="user" placeholder="Username" value=""> </div>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group input-group-seamless">
                    <input type="password" class="form-control" name="pass" placeholder="password" value="" >
                    <span class="input-group-append">
                      <span class="input-group-text">
                        <i class="material-icons">lock</i>
                      </span>
                    </span>
                  </div>
                </div>
                <!-- / Seamless Input Groups -->
              <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1" >Login</button>
  </form>

            </li>
          </ul>
        </div>
              </div>

            </div>
            <!-- End Default Light Table -->

    </div>
      <center>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.0.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.0.0.min.js"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
    $(document).ready(function(){

    $('#check_form').on('submit',(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type:'POST',
                url: "api/login.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data){
                  if(data == "1"){
                  window.location.href = 'tables.php';
                  } else if(data == "0"){
                    alert("Invalid Username/Password!");
                  }
                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                }
            });
        }));

    });

    </script>

  </body>
</html>
