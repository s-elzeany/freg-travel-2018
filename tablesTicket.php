<?php
session_start();
  if($_SESSION['user'] =="FregataUser1" || $_SESSION['user'] =="FregataUser2" || $_SESSION['user'] =="FregataUser3" || $_SESSION['user'] =="FregataUser4" || $_SESSION['user'] =="FregataUser5" || $_SESSION['user'] =="FregataUser6"){
  echo"	<style>
      #clearbtn{ visibility:hidden;}
      #clearTD{ visibility:hidden;}
    </style>";
  }elseif($_SESSION['user'] =="BlueSho"){

    }
  else{
    header("location:index.php");
  }
?>
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

    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <i class="material-icons" style="color:#007bff;">
  airplanemode_active
</i>
                  <span class="d-none d-md-inline ml-1">Fregata</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">

                </div>
              </div>
          </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="tables.php">
                  <i class="material-icons">table_chart</i>
                  <span>Invoice List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="tablesTicket.php">
                  <i class="material-icons">featured_play_list</i>
                  <span>E-Ticket List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="POT.php">
                  <i class="material-icons">card_travel</i>
                  <span>PO Ticket List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="POH.php">
                  <i class="material-icons">home</i>
                  <span>PO Hotel List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="PDF.php">
                  <i class="material-icons">note_add</i>
                  <span>Add New Invoice</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="PDFTicket.php">
                  <i class="material-icons">book</i>
                  <span>Add New E-Ticket</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="PDF_POTicket.php">
                  <i class="material-icons">language</i>
                  <span>Add New PO Ticket</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="PDF_POHotel.php">
                  <i class="material-icons">loyalty</i>
                  <span>Add New PO Hotel</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="logout.php">
                  <i class="material-icons">meeting_room</i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">

                    </div>
                  </div>
                   </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">

                <li class="nav-item dropdown">
                  <a class="nav-link  text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

                    <span class="d-none d-md-inline-block"><?php echo $_SESSION['user']; ?></span>
                  </a>

                </li>
              </ul>
              <nav class="nav">

              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">E-Tickets</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">E-Ticket</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Ticket No.</th>
                          <th scope="col" class="border-0">Date</th>
                          <th scope="col" class="border-0">Name</th>
                          <th scope="col" class="border-0">Res. Code</th>
                          <th scope="col" class="border-0">Amount Due</th>
                          <th scope="col" class="border-0">Added By</th>
													<th scope="col" class="border-0">Edited By</th>
                          <th scope="col" class="border-0">Edit/Preview</th>
                          <th id="clearTD" scope="col" class="border-0">Delete</th>
                        </tr>
                      </thead>
                      <?php
                      include "connection.php";
                      $sql = "SELECT * FROM tbl_ticket";
                      $result = $conn ->query($sql);
                      while($row = $result->fetch_assoc()){
                      ?>
                      <tbody>
                        <tr>
                          <td> <?php echo $row['ticket_id']?></td>
                          <td> <?php echo $row['ticket_date']?></td>
                          <td> <?php echo $row['ticket_name']?></td>
                          <td> <?php echo $row['ticket_rescode']?></td>
                          <td> <?php echo $row['ticket_due']?></td>
                          <td> <?php echo $row['ticket_addedby']?></td>
                          <td> <?php echo $row['ticket_editedby']?></td>
                          <td><a onclick="editDataTicket('<?php echo $row['ticket_id'];?>')"><i style="font-size:160%;" class="material-icons  setColor">create</i></a></td>
                          <td><a id= "clearbtn" onclick= "deleteDataTicket('<?php echo $row['ticket_id'];?>')"><i style="font-size:180%;" class="material-icons  setColor">clear</i></a></td>
                        </tr>
                      </tbody>
                    <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.0.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.0.0.min.js"></script>
  </body>
</html>
<script>

function editDataTicket(str){
  var id = str;
 $.ajax({

 type:"POST",
 url:"api/edit_ticket.php",
 data:"id="+id,
 success:function(data){
     window.location.href = "PDFeditTicket.php";
 }

 });

 }

 function deleteDataTicket(strID){
  var id = strID;

  $.ajax({

  type:"GET",
  url:"api/delete_ticket.php",
  data:"id="+id,
  success:function(data){
    alert('Deleted!');
  window.location.href="tablesTicket.php";
  }

  });

  }

</script>
