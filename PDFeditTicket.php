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

$ticket_id=$_SESSION['ticket_id'];
$ticket_html=$_SESSION['ticket_html'];
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
    <link rel="stylesheet" href="styles/mystyleTicket.css">
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
              <p id="ticketID" hidden><?php echo $ticket_id?></p>
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
                <h3 class="page-title">Update E-Ticket</h3>
              </div>
            </div>
            <!-- End Page Header -->

<div class="invoice-preview__body" id="Complete_data">
<div class="la-template">
  <div  id="Comp_data">
  <div  id="Completes_data">
      <?php echo $ticket_html?>
  </div>
    <DIV id="page_2">
      <br>
    <DIV class="dclr"></DIV>
    <P class="p13 ft1">Positive identification required for airport check in</P>
    <P class="p14 ft1">Notice:</P>
    <P class="p15 ft22">IF THE PASSENGERS JOURNEY INVOLVES AN ULTIMATE DESTINATION OR STOP IN A COUNTRY OTHER THAN THE COUNTRY OF DEPARTURE THE WARSAW CONVENTION OR THE MONTREAL CONVENTION MAY BE APPLICABLE AND THESE CONVENTIONS GOVERN AND MAY LIMIT THE LIABILITY OF CARRIERS FOR DEATH OR BODILY INJURY AND IN RESPECT OF LOSS OF OR DAMAGE TO BAGGAGE. MANY AIR CARRIERS HAVE WAIVED THE WARSAW CONVENTION LIMITS. FOR DEATH OR BODILY INJURY. FURTHER INFORMATION MAY BE</P>
    <P class="p16 ft23">OBTAINED FROM THE CARRIER. SEE ALSO NOTICES HEADED ADVICE TO INTERNATIONAL PASSENGERS ON LIMITATION LIABILITY AND NOTICE OF BAGGAGE LIABILITY LIMITATIONS.</P>
    <P class="p17 ft1">Notice of Incorporated Terms</P>
    <P class="p18 ft25">Air transportation whether domestic or international is subject to the conditions of carriage of the transporting carrier(s), which are herein incorporated by reference and made part of the contract of carriage. Other carriers on which you may be ticketed may have different conditions of carriage. International air transportation, including the carriers’ liability may be governed by applicable tariffs on file with the U.S. and other governments and by Warsaw or Montreal Convention.Passengers may obtain further information or inspect the full text, from any location where the carrier’s tickets are sold,or at <A href="https://www.philippineairlines.com/AboutUs/LegalNotices"><SPAN class="ft24">https://www.philippineairlines.com/AboutUs/LegalNotices</SPAN></A>,, which include, but are not limited to:</P>
    <P class="p19 ft25"><SPAN class="ft25">(a)</SPAN><SPAN class="ft26">Limits on liability for injury or death, and for loss, damage, or delay of baggage, including fragileor perishable goods;</SPAN></P>
    <P class="p20 ft23"><SPAN class="ft23">(b)</SPAN><SPAN class="ft27">Claim restrictions, including time periods within which passengers must file a claim or bringaction against the carrier;</SPAN></P>
    <P class="p21 ft23"><SPAN class="ft23">(c)</SPAN><SPAN class="ft28">Rights of the carrier to change terms of the contract of carriage;</SPAN></P>
    <P class="p22 ft25"><SPAN class="ft25">(d)</SPAN><SPAN class="ft29">Rules on reservations, baggage allowance, </SPAN><NOBR>check-in</NOBR> times, travel documentary requirements &refusal to carry;</P>
    <P class="p23 ft23"><SPAN class="ft30">(e)</SPAN><SPAN class="ft31">Rights of the carrier & limits of liability for delay, cancellations or failure to perform serviceincluding scheduled changes, substitution of air carrier or aircraft and rerouting; (f) Refund and rebooking policies; and (g) Other important reminders.</SPAN></P>
    <P class="p24 ft25">Data Protection Notice: Your personal data will be processed in accordance with <SPAN class="ft32">Philippine Airlines' Data Privacy Policy</SPAN> which may be viewed <A href="https://www.philippineairlines.com/AboutUs/LegalNotices/Disclaimer"><SPAN class="ft24">here</SPAN></A> and/or the applicable carrier's privacy policy and, if your booking is made via a system provider ("GDS"), with its privacy policy. These are available at <A href="https://www.iatatravelcentre.com/privacy"><SPAN class="ft24">https://www.iatatravelcentre.com/privacy</SPAN></A> or from the carrier(s) or GDS directly. You should read this documentation, which applies to your booking and specifies, for example, how your personal data is collected, stored, used, disclosed and transferred.</P>
    <P class="p25 ft23">The Data Privacy Policy, General Conditions of Carriage, and other legal notices, which may be viewed <A href="https://www.philippineairlines.com/AboutUs/LegalNotices"><SPAN class="ft33">here</SPAN></A> are incorporated herein by reference.</P>
    <P class="p26 ft34"><A href="https://www.philippineairlines.com/en/aboutus/legalnotices/generalconditionsofcarriage/">Important Legal Notices</A></P>
    </DIV>
</div>
</div>
</div>
<center>
  <button type = "button" style="margin-left:0px;" class="fg-button btn btn-primary " onclick="updateDataTicket()">Update and Continue</button>
  <button type = "button" style="margin-left:50px;" class="fg-button btn btn-primary " onclick="addDataTicket()">Save new and Continue</button>
  <button type = "button" style="margin-left:50px;" class="fg-button btn btn-primary " onclick="printDiv('Comp_data')">Print</button>
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

 function updateDataTicket(){
   var ticketID = $("#ticketID").html();
   var ticketData = $("#Completes_data").html();
   var ticketName = $("#ticketName").html();
   var ticketResCode = $("#ticketResCode").html();
   var ticketDue= $("#ticketDue").html();
   var dateToday= $("#dateToday").html();
   var mainUser = $("#mainUser").html();
 	$.ajax({

 	type:"POST",
 	url:"api/update_ticket.php",
  data:"ticketData="+ticketData+"&ticketID="+ticketID+"&ticketName="+ticketName+"&ticketResCode="+ticketResCode+"&ticketDue="+ticketDue+"&dateToday="+dateToday+"&mainUser="+mainUser,
 	success:function(data){
 		alert('Updated!');
    window.location.href = "tablesTicket.php";
 	}

 	});


 	}

  function addDataTicket(){

    var ticketData = $("#Completes_data").html();
    var ticketName = $("#ticketName").html();
    var ticketResCode = $("#ticketResCode").html();
    var ticketDue= $("#ticketDue").html();
    var dateToday= $("#dateToday").html();
    var mainUser = $("#mainUser").html();
  	$.ajax({

  	type:"POST",
  	url:"api/add_ticket.php",
   data:"ticketData="+ticketData+"&ticketName="+ticketName+"&ticketResCode="+ticketResCode+"&ticketDue="+ticketDue+"&dateToday="+dateToday+"&mainUser="+mainUser,
  	success:function(data){
  		alert('Saved!');
     window.location.href = "tablesTicket.php";
  	}

  	});

  	}

</script>
</body>
</html>
