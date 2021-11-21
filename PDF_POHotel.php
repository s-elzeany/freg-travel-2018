<?php
session_start();
  if($_SESSION['user'] =="FregataUser1" || $_SESSION['user'] =="FregataUser2" || $_SESSION['user'] =="FregataUser3" || $_SESSION['user'] =="FregataUser4" || $_SESSION['user'] =="FregataUser5" || $_SESSION['user'] =="FregataUser6"){
  echo"	<style>
      #clearbtn{ visibility:hidden;}
      #clearTD{ visibility:hidden;}
    </style>";
  }elseif($_SESSION['user'] =="LeaAngelyne"){

    }
  else{
    header("location:index.php");
  }
   $user = $_SESSION['user'];
?>
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
    <link rel="stylesheet" href="styles/mystylePO.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

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
                <a class="nav-link" href="tablesTicket.php">
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
                <a class="nav-link" href="PDF.php">
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
                <a class="nav-link" href="PDF_POTicket.php">
                  <i class="material-icons">language</i>
                  <span>Add New PO Ticket</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="PDF_POHotel.php">
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

                    <p class="d-none d-md-inline-block" id="mainUser"><?php echo $user ?></p>
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
                <span class="text-uppercase page-subtitle"></span>
                <h3 class="page-title">Add New PO Hotel</h3>
              </div>
            </div>
            <!-- End Page Header -->

<div class="invoice-preview__body" id="Complete_data">

<div class="la-template">
  <div  id="Completes_data">
  <section class="la-template__header"
  <div class="la-template__header__logo"><img src="images/logo.png" style="width:47%; height:16%">
  <div class="la-template__header__info">

    <div class="address" contenteditable>
    <div class="address__field">
    <span class="fg-text fg-text--body">Grove, Brgy. Batong Malake,</span></div>
    <div class="address__field">
    <span class="fg-text fg-text--body">Los Ba&ntilde;os, Laguna 4031</span></div>
    <div class="address__field">
    <span class="fg-text fg-text--body">TeleFax: (049) 543 6750</span></div>
    <div class="address__field">
    <span class="fg-text fg-text--body">Phone: (049) 572 0328</span></div>
    <div class="address__field">
    <span class="fg-text fg-text--body">www.facebook.com\fregatatravelandtours</span></div>
    <div class="address__field">
    <span class="fg-text fg-text--body">Email: admin@fregatatravelandtours.com</span></div>
    <div class="address__field">
    <span class="fg-text fg-text--body"> TIN: <NOBR>479-621-052-000</NOBR></span></div>
    <br>
    <?php
    include "connection.php";
    $sql = 'SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = "fregata_db_2018" AND TABLE_NAME = "tbl_poh"';
    $result = $conn ->query($sql);
    while($row = $result->fetch_assoc()){
      $dbValue = $row['AUTO_INCREMENT'];
    }
      ?>
    <div class="address__field">
    <span class="fg-text fg-text--body"> PO No.:<?php echo str_pad($dbValue, 4, "0", STR_PAD_LEFT); ?></span></div>
  </div>
    <br>

    <div class="address">
      <div class="address__field"></div>
      <div class="address__field"></div>
      <div class="address__field"></div>
      <div class="address__field"></div>
      <div class="address__field"></div></div></div>
    </section>
    <P class="p4 ft2">PURCHASE ORDER</P>
    <TABLE cellpadding=0 cellspacing=0 class="t0">
      <?php
      $today = date("F j, Y");
        ?>
        <p hidden id="dateToday"><?php echo $today?></p>
    <TR>
    	<TD class="tr0 td0"><P class="p5 ft3" contenteditable="true">Date</P></TD>
    	<TD class="tr0 td1"><P class="p6 ft4">:</P></TD>
    	<TD class="tr0 td2"><P class="p7 ft4" contenteditable="true"><?php echo $today?></P></TD>
    </TR>
    <TR>
    	<TD class="tr1 td0"><P class="p5 ft3" contenteditable="true">To</P></TD>
    	<TD class="tr1 td1"><P class="p6 ft4">:</P></TD>
    	<TD class="tr1 td2"><P class="p7 ft4" contenteditable="true"></P></TD>
    </TR>
    <TR>
    	<TD class="tr1 td0"><P class="p5 ft3" contenteditable="true">Attention</P></TD>
    	<TD class="tr1 td1"><P class="p6 ft4">:</P></TD>
    	<TD class="tr1 td2"><P class="p7 ft4" contenteditable="true"></P></TD>
    </TR>
    <TR>
    	<TD class="tr2 td0"><P class="p5 ft3" contenteditable="true">Travel date</P></TD>
    	<TD class="tr2 td1"><P class="p6 ft4">:</P></TD>
    	<TD class="tr2 td2"><P class="p7 ft4" contenteditable="true"></P></TD>
    </TR>
    <TR>
      <TD class="tr2 td0"><P class="p5 ft3" contenteditable="true">Rooms</P></TD>
      <TD class="tr2 td1"><P class="p6 ft4">:</P></TD>
      <TD class="tr2 td2"><P class="p7 ft4" contenteditable="true"></P></TD>
    </TR>
    <TR>
      <TD class="tr2 td0"><P class="p5 ft3" contenteditable="true">No. of pax</P></TD>
      <TD class="tr2 td1"><P class="p6 ft4">:</P></TD>
      <TD class="tr2 td2"><P class="p7 ft4" contenteditable="true"></P></TD>
    </TR>
    <TR>
      <TD class="tr2 td0"><P class="p5 ft3" contenteditable="true">Lead Guest Name</P></TD>
      <TD class="tr2 td1"><P class="p6 ft4">:</P></TD>
      <TD class="tr2 td2"><P class="p7 ft4" contenteditable="true" id="Cname"></P></TD>
    </TR>

  </TABLE>
    <TABLE cellpadding=0 cellspacing=0 class="t2">
    <TR>
    	<TD class="tr8 td22"><P class="p5 ft5"></P></TD>
    	<TD colspan=2 class="tr8 td23"><P class="p10 ft9" contenteditable="true">FLIGHT DETAILS:</P></TD>
    	<TD class="tr8 td50"><P class="p5 ft5"></P></TD>
    	<TD class="tr8 td51"><P class="p5 ft5"></P></TD>
    	<TD class="tr8 td52"><P class="p5 ft5"></P></TD>
    	<TD class="tr8 td51"><P class="p5 ft5"></P></TD>
    	<TD class="tr8 td53"><P class="p5 ft5"></P></TD>
    	<TD class="tr8 td54"><P class="p5 ft5"></P></TD>
    	<TD class="tr8 td10"><P class="p5 ft5"><a href="javascript:void(0);" style="font-size:18px;" id="addMoreFlightD" title="Add More Flight details"><i style=" margin-right:-21px;" class="fas fa-plus pull-right"></i></a></P></TD>
    </TR>
      </TABLE>
        <TABLE cellpadding=0 cellspacing=0 class="t2" id="t2">
    <TR>
    	<TD class="tr10 td22"><P class="p5 ft10"></P></TD>
    	<TD class="tr11 td29"><P class="p5 ft11"></P></TD>
    	<TD class="tr11 td30"><P class="p5 ft11"></P></TD>
    	<TD class="tr11 td31"><P class="p5 ft11"></P></TD>
    	<TD class="tr11 td32"><P class="p5 ft11"></P></TD>
    	<TD colspan=2 class="tr11 td33"><P class="p5 ft11"></P></TD>
    	<TD class="tr11 td34"><P class="p5 ft11"></P></TD>
    	<TD class="tr11 td35"><P class="p5 ft11"></P></TD>
    	<TD class="tr11 td36"><P class="p5 ft11"></P></TD>
    </TR>
    <TR>
    	<TD class="tr12 td22"><P class="p5 ft5"></P></TD>
    	<TD class="tr13 td37"><P class="p10 ft12">Route</P></TD>
    	<TD class="tr13 td38"><P class="p11 ft12">Airline - Flight</P></TD>
    	<TD class="tr13 td39"><P class="p5 ft5"> </P></TD>
    	<TD class="tr13 td40"><P class="p5 ft12">Date</P></TD>
    	<TD colspan=2 class="tr13 td41"><P class="p5 ft12">Departure</P></TD>
    	<TD class="tr13 td42"><P class="p5 ft5"></P></TD>
    	<TD class="tr13 td43"><P class="p5 ft12">Arrival</P></TD>
    	<TD class="tr13 td44"><P class="p5 ft5"></P></TD>
    </TR>
    <TR>
    	<TD class="tr14 td22"><P class="p5 ft5"></P></TD>
    	<TD class="tr14 td45"><P class="p10 ft0" contenteditable="true"></P></TD>
    	<TD class="tr14 td46"><P class="p11 ft0" contenteditable="true"></P></TD>
    	<TD class="tr14 td24"><P class="p5 ft5"></P></TD>
    	<TD class="tr14 td25"><P class="p5 ft0" contenteditable="true"></P></TD>
    	<TD colspan=2 class="tr14 td47"><P class="p5 ft0" contenteditable="true"></P></TD>
    	<TD class="tr14 td27"><P class="p5 ft5"><a href="javascript:void(0);" class="remove_flights"><i style="font-size:18px" class="fas fa-times"></i></a></P></TD>
    	<TD class="tr14 td28"><P class="p5 ft0" contenteditable="true"></P></TD>
    	<TD class="tr14 td10"><P class="p5 ft5"></P></TD>
    </TR>
    </TABLE>
    <P class="p12 ft14" contenteditable="true">Thank you very much!</P>
    <P class="p13 ft9" contenteditable="true">Kate Aljama</P>
    <P class="p14 ft15" contenteditable="true">Sales and Marketing Assistant</P>
    <P class="p14 ft15" contenteditable="true">Fregata Travel and Tours</P>
    <P class="p14 ft15" contenteditable="true">09365037338</P>
<br>
<br>
</div>
</main>
</div>
</div>
</div>
<center>
  <button type = "button" style="margin-left:350px;" class="fg-button btn btn-primary " onclick="addData()">Save and Continue</button>
  <button type = "button" style="margin-left:350px;" class="fg-button btn btn-primary " onclick="printDiv('Completes_data')">Print</button>
<br>
<br>
<br>
</center>
</div>
</div>
</div>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="scripts/extras.1.0.0.min.js"></script>
<script src="scripts/shards-dashboards.1.0.0.min.js"></script>
<script src="scripts/myscript.js"></script>
<script>



 function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();

      document.body.innerHTML = originalContents;
 }

 function addData(){

   var CData = $("#Complete_data").html();
   var Cname = $("#Cname").html();
   var dateToday = $("#dateToday").html();
   var mainUser = $("#mainUser").html();
 	$.ajax({

 	type:"POST",
 	url:"api/add_POH.php",
  data:"CData="+CData+"&Cname="+Cname+"&dateToday="+dateToday+"&mainUser="+mainUser,
 	success:function(data){
 		alert('Saved!');
    window.location.href = "POH.php";
 	}

 	});

 	}

</script>
</body>
</html>
