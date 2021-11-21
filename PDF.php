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
    <link rel="stylesheet" href="styles/mystyle.css">
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
                <a class="nav-link active" href="PDF.php">
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

                    <span class="d-none d-md-inline-block" id="mainUser"><?php echo $_SESSION['user']; ?></span>
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
                <h3 class="page-title">Add New Invoice</h3>
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
  </div>
    <br>

    <div class="address">
      <div class="address__field"></div>
      <div class="address__field"></div>
      <div class="address__field"></div>
      <div class="address__field"></div>
      <div class="address__field"></div></div></div>
    </section>
    <P class="pTitle ft2">STATEMENT OF ACCOUNT</P>
    <TABLE cellpadding=0 cellspacing=0 class="t0">
    <tr>
      <td class="tr0 td0"><P class="p3 ft3">Date:</P></td>
      <?php
      $today = date("F j, Y");
        ?>
      <td class="tr0 td1"><P class="p3 ft3" contenteditable="true" id="dateToday"><?php echo $today?></P></td>

      <?php
      include "connection.php";
      $sql = 'SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = "fregata_db_2018" AND TABLE_NAME = "tbl_data"';
      $result = $conn ->query($sql);
      while($row = $result->fetch_assoc()){
        $dbValue = $row['AUTO_INCREMENT'];
      }
        ?>
      <td class="tr0 td2"><P class="p3 ft3">Bill no.: <NOBR id="customID"><?php echo "FREG-".str_pad($dbValue, 7, "0", STR_PAD_LEFT); ?></NOBR></P></td>

    </tr>
    <tr>

      <td style="position:absolute;"><br><P >To:</P></td>

      <td class="tr1 td1"><br><div class="p3 ft3" contenteditable="true"><div>Urban Ecosystems Research Division (UERD)</div><div>Ecosystems Research and Development Bureau</div><div>Department of Environment and Natural Resources <NOBR>(ERDB-DENR)</NOBR></div><div>College, Laguna</div></div>
    </td>

    </tr>
    <tr>
      <td class="tr1 td0"><P class="p3 ft3">To Bill You For</P></td>
      <td class="tr1 td1"><div class="p3 ft3" contenteditable="true"></div></td>
    </tr>
    <tr>

      <td class="tr0 td0"><br><P class="psho ft3">RC Code:</P></td>
      <td class="tr0 td4"><div class="p3 ft4" contenteditable="true"></div></td>
    </tr>
    </TABLE>


<div id="wholerTB">
<a href="javascript:void(0);" style="font-size:20px;" id="addSumTable" title="Add More Tables"><i style="padding-right:10px"class="far fa-calendar-plus pull-right"></i></i></a>
<div id="wholeTB">
<a href="javascript:void(0);" style="font-size:20px;" id="removeSumTable" title="Remove Sum Table"> <i class="far fa-calendar-minus pull-right"></i></a>
<center><span id="btngrphide"><a href="javascript:void(0);" style="font-size:20px;" class="fg-button btn " id="cebu"> Cebu Pacific</a>
<a href="javascript:void(0);" style="font-size:20px;" class="fg-button btn" id="pal">Philippine Airlines</a></span></center>
    <TABLE cellpadding=0 cellspacing=0 class="t1 tb" id="tb">
      </TABLE>

      <TABLE cellpadding=0 cellspacing=0 class="t1">
    <tr>
      <td class="tr5 td3"><P class="p5 ft5">BOOKING FEE:</P></td>
      <td class="tr5 td4"><P class="p3 ft4"> </P></td>
      <td class="tr5 td5"><P class="p3 ft4"> </P></td>
      <td class="tr5 td6"><P class="p3 ft4"> </P></td>
      <td colspan=2 class="tr6 td11"><P class="p6 ft3 base_value" contenteditable="true">0.00</P></td>
    </tr>
    <tr>
      <td class="tr2 td3"><P class="p3 ft4"> </P></td>
      <td class="tr2 td4"><P class="p3 ft4"> </P></td>
      <td class="tr2 td5"><P class="p3 ft4"> </P></td>
      <td class="tr2 td6"><P class="p3 ft4"> </P></td>
      <td class="tr2 td7"><P class="p3 ft4"> </P></td>
      <td class="tr2 td8"><span class="p7 ft5">PHP<span class="p7 ft5 semi_total">0</span><span></td>
    </tr>
  </table>

</div>
</div>
<TABLE cellpadding=0 cellspacing=0 class="t1">
  <tr>
    <td class="tr5 td3"><P class="p5 ft5">OVERALL TOTAL:</P></td>
    <td class="tr5 td4"><P class="p3 ft4"> </P></td>
    <td class="tr5 td5"><P class="p3 ft4"> </P></td>
    <td class="tr5 td6"><P class="p3 ft4"> </P></td>
    <td class="tr2 td8"><P class="p7 ft5 overall_total">PHP 0</P></td>
  </tr>
</table>
<TABLE cellpadding=0 cellspacing=0 class="t1">
    <tr>
      <td class="tr1 td3"><P class="p4 ft5">GUEST DETAILS:</P></td>
      <td class="tr1 td4"><P class="p3 ft4"> </P></td>
      <td class="tr1 td5"><P class="p3 ft4"> </P></td>
      <td class="tr1 td6"><P class="p3 ft4"> </P></td>
      <td class="tr1 td7"><P class="p3 ft4"> </P></td>
      <td class="tr1 td8"><P class="p3 ft4"> </P></td>
    </tr>
    <tr>
      <td colspan=2 class="tr3 td9"><P class="p7 ft3" contenteditable="true"></P></td>
      <td class="tr3 td5"><P class="p3 ft4"> </P></td>
      <td class="tr3 td6"><P class="p3 ft4"> </P></td>
      <td class="tr3 td7"><P class="p3 ft4"> </P></td>
      <td class="tr3 td8"><P class="p3 ft4"> </P></td>
    </tr>
  </table>

  <span class = "pull-right">
  <a href="javascript:void(0);" style="font-size:20px;" id="addFlightTable" title="Add More Flight Details and Services"><i style="padding-right:20px;" class="far fa-calendar-plus"></i></a>
</span>
  <div id="wholerFlightTB">
  <div id ="wholeFlightTB">
<P class="pServ ft5" contenteditable="true">FLIGHT DETAILS:</P>
    <TABLE cellpadding=0 cellspacing=0 class="t1" id="tbF">

    <tr>
      <td class="tr2 td18"><P class="p8 ft5">Route</P></td>
      <td class="tr2 td19"><P class="p9 ft5">Airline - Flight</P></td>
      <td class="tr2 td20"><P class="p4 ft5">Date</P></td>
      <td class="tr2 td21"><P class="p10 ft5">Departure</P></td>
      <td class="tr2 td22"><P class="p3 ft4"> </P></td>
      <td class="tr2 td23"><P class="p4 ft5">Arrival</P></td>

    </tr>
    <tr>
      <td class="tr7 td12"><P class="p8 ft6" contenteditable="true"></P></td>
      <td class="tr7 td13"><P class="p9 ft6" contenteditable="true"></P></td>
      <td class="tr7 td14"><P class="p4 ft6" contenteditable="true"></P></td>
      <td class="tr7 td15"><P class="p10 ft6" contenteditable="true"></P></td>
      <td class="tr7 td16"><P class="p3 ft7" ><a href='javascript:void(0);'  class='remove_flight'><i style="font-size:18px" class="fas fa-times"></i></a></P></td>
      <td class="tr7 td17"><P class="p4 ft6" contenteditable="true"></P></td>
    </tr>
    <tr>
      <td class="tr7 td12"><P class="p8 ft6" contenteditable="true"></P></td>
      <td class="tr7 td13"><P class="p9 ft6" contenteditable="true"></P></td>
      <td class="tr7 td14"><P class="p4 ft6" contenteditable="true"></P></td>
      <td class="tr7 td15"><P class="p10 ft6" contenteditable="true"></P></td>
      <td class="tr7 td16"><P class="p3 ft7" ><a href='javascript:void(0);'  class='remove_flight'><i style="font-size:18px" class="fas fa-times"></i></a></P></td>
      <td class="tr7 td17"><P class="p4 ft6" contenteditable="true"></P></td>
    </tr>
    <a href="javascript:void(0);" style="font-size:18px;" id="addMoreFlight" title="Add More Flight details"><i style=" margin-right:60px;" class="fas fa-plus pull-right"></i></a>
    </TABLE>

  <span><P class="p11 ft5" contenteditable="true">ADDITIONAL SERVICES:</P> <a href="javascript:void(0);" style="font-size:20px;" id="minusFlightTable" title="Remove Flight Details and Services"> <i style="padding-right:20px;" class="far fa-calendar-minus pull-right"></i></a> </span>
    <TABLE cellpadding=0 cellspacing=0 class="t2">
  <tbody class="outtero">
    <tr>
      <td class="tr7 td24"><P class="p8 ft6" contenteditable="true">ONWARD FLIGHT</P></td>
      <td class="tr7 td25"><P class="p3 ft6">SEAT</P></td>
      <td colspan=2 class="tr7 td26"><P class="p3 ft6">MEALS</P></td>
      <td class="tr7 td27"><P class="p3 ft4"><a href='javascript:void(0);'  class='remove_services'><i style="font-size:18px" class="fas fa-times"></i></a></P></td>
      <td colspan=2 class="tr7 td28"><P class="p3 ft6">BAGGAGE</P></td>
    </tr>
    <tr>
      <td class="tr2 td29"><P class="p3 ft4"> </P></td>
      <td class="tr2 td30"><P class="p3 ft4"> </P></td>
      <td class="tr2 td31"><P class="p3 ft4"> </P></td>
      <td class="tr2 td32"><P class="p3 ft4"> </P></td>
      <td class="tr2 td33"><P class="p12 ft3"><NOBR>Check-in</NOBR> Baggage:</P></td>
      <td colspan=2 class="tr2 td34"><P class="p3 ft3" contenteditable="true">20 kg, Pre included Baggage</P></td>
    </tr>
    <tr>
      <td class="tr3 td35"><P class="p3 ft4"> </P></td>
      <td class="tr3 td36"><P class="p3 ft3" contenteditable="true">YES</P></td>
      <td colspan=2 class="tr3 td37"><P class="p3 ft3" contenteditable="true">YES</P></td>
      <td class="tr3 td38"><P class="p12 ft3">Hand Baggage:</P></td>
      <td colspan=2 class="tr3 td39"><P class="p3 ft3" contenteditable="true">7 kg</P></td>
    </tr>
  </tbody>
    <tbody class="outtero">
    <tr>
      <td class="tr7 td24"><P class="p8 ft6 " contenteditable="true">RETURN FLIGHT</P></td>
      <td class="tr7 td25"><P class="p3 ft6">SEAT</P></td>
      <td colspan=2 class="tr7 td26"><P class="p3 ft6">MEALS</P></td>
      <td class="tr7 td27"><P class="p3 ft4"><a href='javascript:void(0);'  class='remove_services'><i style="font-size:18px" class="fas fa-times"></a></P></td>
      <td colspan=2 class="tr7 td28"><P class="p3 ft6">BAGGAGE</P></td>
    </tr>
    <tr>
      <td class="tr2 td29"><P class="p3 ft4"> </P></td>
      <td class="tr2 td30"><P class="p3 ft4"> </P></td>
      <td class="tr2 td31"><P class="p3 ft4"> </P></td>
      <td class="tr2 td32"><P class="p3 ft4"> </P></td>
      <td class="tr2 td33"><P class="p12 ft3"><NOBR>Check-in</NOBR> Baggage:</P></td>
      <td colspan=2 class="tr2 td34"><P class="p3 ft3" contenteditable="true">20 kg, Pre included Baggage</P></td>
    </tr>
    <tr>
      <td class="tr3 td35"><P class="p3 ft4"> </P></td>
      <td class="tr3 td36"><P class="p3 ft3" contenteditable="true">YES</P></td>
      <td colspan=2 class="tr3 td37"><P class="p3 ft3" contenteditable="true">YES</P></td>
      <td class="tr3 td38"><P class="p12 ft3">Hand Baggage:</P></td>
      <td colspan=2 class="tr3 td39"><P class="p3 ft3" contenteditable="true">7 kg</P></td>
    </tr>
  </tbody>
  </table>
</div>
</div>
    <table cellpadding=0 cellspacing=0 class="t2">
    <tr>
      <td class="tr8 td29"><P class="p8 ft3">Prepared by:</P></td>
      <td class="tr8 td30"><P class="p3 ft4"> </P></td>
      <td class="tr8 td31"><P class="p3 ft4"> </P></td>
      <td class="tr8 td32"><P class="p3 ft4"> </P></td>
      <td class="tr8 td33"><P class="p3 ft4"> </P></td>
      <td class="tr8 td41"><P class="p3 ft4"> </P></td>
      <td class="tr8 td42"><P class="p4 ft3">Received by:</P></td>
    </tr>
    <tr>
      <td colspan=2 class="tr8 td43"><P class="p8 ft5">LEA ANGELI B. HERNANDEZ (SGD)</P></td>
      <td class="tr8 td44"><P class="p3 ft4"> </P></td>
      <td class="tr9 td32"><P class="p3 ft4"> </P></td>
      <td class="tr9 td33"><P class="p3 ft4"> </P></td>
      <td class="tr9 td41"><P class="p3 ft4"> </P></td>
      <td class="tr8 td45"><P class="p3 ft4"> </P></td>
    </tr>
    <tr>
      <td class="tr2 td29"><P class="p8 ft3">General Manager</P></td>
      <td class="tr2 td30"><P class="p3 ft4"> </P></td>
      <td class="tr2 td31"><P class="p3 ft4"> </P></td>
      <td class="tr2 td32"><P class="p3 ft4"> </P></td>
      <td class="tr2 td33"><P class="p3 ft4"> </P></td>
      <td class="tr2 td41"><P class="p3 ft4"> </P></td>
      <td class="tr2 td42"><P class="p4 ft3">Date:</P></td>
    </tr>
    </TABLE>

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
   var customID = $("#customID").html();
   var dateToday = $("#dateToday").html();
   var overall_total= $(".overall_total").html();
   var mainUser = $("#mainUser").html();
 	$.ajax({

 	type:"POST",
 	url:"api/add_data.php",
  data:"CData="+CData+"&customID="+customID+"&dateToday="+dateToday+"&overall_total="+overall_total+"&mainUser="+mainUser,
 	success:function(data){
 		alert('Saved!');
    window.location.href = "tables.php";
 	}

 	});

 	}

</script>
</body>
</html>
