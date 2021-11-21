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
              <a class="nav-link active" href="PDFTicket.php">
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
              <h3 class="page-title">Add New E-Ticket</h3>
            </div>
          </div>
          <!-- End Page Header -->

          <div class="invoice-preview__body" id="Complete_data">
            <div class="la-template">
              <div  id="Comp_data">
                <div  id="Completes_data">
                  <?php
                  $today = date("F j, Y");
                  ?>
                  <p hidden id="dateToday"><?php echo $today?></p>
                  <DIV id="page_1">
                    <IMG src="images/PAL.png" style="margin-left:40px; width:59%; height: -8%;">
                      <DIV class="dclr"></DIV>
                      <p class="pA"><p>
                        <P class="p0 ft0">eTicket Receipt</P><br>
                        <P class="p1 ft1">Prepared For</P>
                        <P class="p1 ft2"  contenteditable="true" id="ticketName"></P>

                        <TABLE cellpadding=0 cellspacing=0 class="t0">
                          <tr>
                            <td class="tr0 td0"><P class="p2 ft3" contenteditable="true">RESERVATION CODE</P></td>
                            <td class="tr0 td1"><P class="p3 ft3" contenteditable="true" id="ticketResCode" ></P></td>
                          </tr>
                          <tr>
                            <td class="tr1 td2"><P class="p2 ft3" contenteditable="true">ISSUE DATE</P></td>
                            <td class="tr1 td3"><P class="p3 ft3"  contenteditable="true"></P></td>
                          </tr>
                          <tr>
                            <td class="tr2 td2"><P class="p2 ft3" contenteditable="true">TICKET NUMBER</P></td>
                            <td class="tr2 td3"><P class="p3 ft3"  contenteditable="true"></P></td>
                          </tr>
                          <tr>
                            <td class="tr1 td2"><P class="p2 ft3" contenteditable="true">ISSUING AIRLINE</P></td>
                            <td class="tr1 td3"><P class="p3 ft3"  contenteditable="true"></P></td>
                          </tr>
                          <tr>
                            <td class="tr2 td2"><P class="p2 ft3" contenteditable="true">ISSUING AGENT</P></td>
                            <td class="tr2 td3"><P class="p3 ft3"  contenteditable="true"></P></td>
                          </tr>
                          <tr>
                            <td class="tr2 td2"><P class="p2 ft3" contenteditable="true">IATA NUMBER</P></td>
                            <td class="tr2 td3"><P class="p3 ft3"  contenteditable="true"></P></td>
                          </tr>
                          <tr>
                            <td class="tr3 td4"><P class="p4 ft4"></P></td>
                            <td class="tr3 td5"><P class="p4 ft4"></P></td>
                          </tr>
                        </TABLE>
                        <P class="p5 ft5">Itinerary Details</P>
                        <a href="javascript:void(0);" style="font-size:18px;" id="addMoreItinerary" title="Add More Itinerary"><i style=" margin-right:30px;" class="fas fa-plus pull-right"></i></a>
                        <TABLE cellpadding=0 cellspacing=0 class="t1" id="wholeItinerary">
                          <tr>
                            <td class="tr4 td6"><P class="p27 ft3">TRAVEL <br> DATE </P></td>
                            <td class="tr4 td7"><P class="p7 ft3">AIRLINE</P></td>
                            <td class="tr4 td8"><P class="p7 ft3">DEPARTURE</P></td>
                            <td class="tr4 td7"><P class="p7 ft3">ARRIVAL</P></td>
                            <td class="tr4 td9"><P class="p8 ft3">OTHER NOTES</P></td>
                          </tr>
                          <tr>
                            <td class="tr5 td10"><P class="p4 ft6"></P></td>
                            <td class="tr5 td11"><P class="p4 ft6"></P></td>
                            <td class="tr5 td12"><P class="p4 ft6"></P></td>
                            <td class="tr5 td11"><P class="p4 ft6"></P></td>
                            <td class="tr5 td13"><P class="p4 ft6"></P></td>
                          </tr>
                          <tbody id="ItineraryTB">

                            <tr>
                              <td class="tr0 td14"><P class="p9 ft7"  contenteditable="true"></P></td>
                              <td class="tr0 td15"><P class="p6 ft8"  contenteditable="true"></P></td>
                              <td class="tr0 td16"><P class="p10 ft8"  contenteditable="true"></P></td>
                              <td class="tr0 td15"><P class="p6 ft8"  contenteditable="true"></P></td>
                              <td class="tr0 td17"><P class="p10 ft8"  contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr6 td14"><P class="p10 ft8"  contenteditable="true"></P></td>
                              <td class="tr6 td15"><P class="p6 ft8"  contenteditable="true"></P></td>
                              <td class="tr6 td16"><P class="p10 ft8"  contenteditable="true"></P></td>
                              <td class="tr6 td15"><P class="p6 ft8"  contenteditable="true"></P></td>
                              <td class="tr6 td17"><P class="p10 ft8"  contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr6 td14"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr6 td15"><P class="p6 ft8" contenteditable="true"></P></td>
                              <td class="tr6 td16"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr6 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr6 td17"><P class="p10 ft8" contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr3 td14"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td16"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td17"><P class="p10 ft8" contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr3 td14"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td15"><P class="p10 ft8"  contenteditable="true"></P></td>
                              <td rowspan=2 class="tr7 td16"><P class="p10 ft8"  contenteditable="true"></P></td>
                              <td class="tr3 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td17"><P class="p10 ft8" contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr8 td14"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr8 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr8 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td rowspan=2 class="tr6 td17"><P class="p10 ft8" contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr9 td14"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr9 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td rowspan=2 class="tr7 td16"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr9 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr10 td14"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr10 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr10 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td rowspan=2 class="tr6 td17"><P class="p10 ft8" contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr11 td14"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr11 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td rowspan=2 class="tr7 td16"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr11 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr12 td14"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr12 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr12 td15"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr12 td17"><P class="p10 ft8" contenteditable="true"></P></td>
                            </tr>
                            <tr>
                              <td class="tr3 td10"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td11"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td12"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td11"><P class="p10 ft8" contenteditable="true"></P></td>
                              <td class="tr3 td13"><P class="p10 ft8" ><a href="javascript:void(0);" class="remove_itenirary"><i style="font-size:18px; margin-right:10px;" class="fas fa-times"></i></a></P></td>
                            </tr>

                          </tbody>

                        </TABLE>
                        <P class="p11 ft19">Payment/Fare Details</P>

                        <TABLE cellpadding=0 cellspacing=0 class="t2">
                          <a href="javascript:void(0);" style="font-size:18px;" id="addMoreFareDetails" title="Add More Fare Details"><i style=" margin-right:30px;" class="fas fa-plus pull-right"></i></a>
                          <tr>
                            <td class="tr17 td18"><P class="p12 ft7">Form of Payment</P></td>
                            <td class="tr17 td19"><P class="p6 ft20">CASH</P></td>
                          </tr>

                          <table class="wholetform t3" cellpadding=0 cellspacing=0 >
                            <tbody class="tform">
                              <tr>
                                <td class="tr12 td20"><P class="p4 ft14"></P></td>
                                <td class="tr12 td21"><P class="p4 ft14"></P></td>
                              </tr>
                              <tr>
                                <td class="tr17 td22"><P class="p12 ft8" contenteditable="true">Endorsement / Restrictions</P></td>
                                <td class="tr17 td23"><P class="p6 ft21" contenteditable="true"></P></td>
                                <td class="tr17 td24"><a href="javascript:void(0);" class="remove_FDetails"><i style="font-size:18px;" class="fas fa-times"></i></a></td>
                              </tr>
                            </tbody>
                            <tbody class="tform">
                              <tr>
                                <td class="tr12 td20"><P class="p4 ft14"></P></td>
                                <td class="tr12 td21"><P class="p4 ft14"></P></td>
                                <tr>
                                  <td class="tr17 td22"><P class="p12 ft8" contenteditable="true">Fare Calculation Line</P></td>
                                  <td class="tr17 td23"><P class="p6 ft21" contenteditable="true"></P></td>
                                  <td class="tr17 td24"><a href="javascript:void(0);" class="remove_FDetails"><i style="font-size:18px;" class="fas fa-times"></i></a></td>
                                </tr>
                              </tbody>
                              <tbody class="tform">
                                <tr>
                                  <td class="tr12 td20"><P class="p4 ft14"></P></td>
                                  <td class="tr12 td21"><P class="p4 ft14"></P></td>
                                </tr>
                                <tr>
                                  <td class="tr18 td22"><P class="p12 ft7" contenteditable="true">Fare</P></td>
                                  <td class="tr18 td23"><P class="p6 ft20" contenteditable="true">PHP </P></td>
                                  <td class="tr17 td24"><a href="javascript:void(0);" class="remove_FDetails"><i style="font-size:18px;" class="fas fa-times"></i></a></td>
                                </tr>
                              </tbody>
                              <tbody class="tform">
                                <tr>
                                  <td class="tr16 td20"><P class="p4 ft18"></P></td>
                                  <td class="tr16 td21"><P class="p4 ft18"></P></td>
                                </tr>
                                <tr>
                                  <td class="tr18 td22"><P class="p12 ft7" contenteditable="true">Taxes/Fees/Carrier-Imposed Charges</P></td>
                                  <td class="tr18 td23"><P class="p6 ft20" contenteditable="true">PHP </P></td>
                                  <td class="tr17 td24"><a href="javascript:void(0);" class="remove_FDetails"><i style="font-size:18px;" class="fas fa-times"></i></a></td>
                                </tr>
                              </tbody>
                              <tbody class="tform">
                                <tr>
                                  <td class="tr16 td20"><P class="p4 ft18"></P></td>
                                  <td class="tr16 td21"><P class="p4 ft18"></P></td>
                                </tr>
                                <tr>
                                  <td class="tr18 td22"><P class="p12 ft7" contenteditable="true"></P></td>
                                  <td class="tr18 td23"><P class="p6 ft20" contenteditable="true">PHP </P></td>
                                  <td class="tr17 td24"><a href="javascript:void(0);" class="remove_FDetails"><i style="font-size:18px;" class="fas fa-times"></i></a></td>
                                </tr>
                              </tbody>
                              <tbody class="tform">
                                <tr>
                                  <td class="tr12 td20"><P class="p4 ft14"></P></td>
                                  <td class="tr12 td21"><P class="p4 ft14"></P></td>
                                </tr>
                                <tr>
                                  <td class="tr17 td22"><P class="p12 ft7" contenteditable="true"></P></td>
                                  <td class="tr17 td23"><P class="p6 ft20" contenteditable="true">PHP </P></td>
                                  <td class="tr17 td24"><a href="javascript:void(0);" class="remove_FDetails"><i style="font-size:18px;" class="fas fa-times"></i></a></td>
                                </tr>
                              </tbody>
                              <tbody class="tform">
                                <tr>
                                  <td class="tr12 td20"><P class="p4 ft14"></P></td>
                                  <td class="tr12 td21"><P class="p4 ft14"></P></td>
                                </tr>
                                <tr>
                                  <td class="tr17 td22"><P class="p12 ft7" contenteditable="true"></P></td>
                                  <td class="tr17 td23"><P class="p6 ft20" contenteditable="true">PHP </P></td>
                                  <td class="tr17 td24"><a href="javascript:void(0);" class="remove_FDetails"><i style="font-size:18px;" class="fas fa-times"></i></a></td>
                                </tr>
                              </tbody>
                            </table>
                            <table class="t3" cellpadding=0 cellspacing=0 >
                              <tr>
                                <td class="tr12 td20"><P class="p4 ft14"></P></td>
                                <td class="tr12 td21"><P class="p4 ft14"></P></td>
                              </tr>
                              <tr>
                                <td class="tr17 td22"><P class="p12 ft7" contenteditable="true">Total Fare</P></td>
                                <td class="tr17 td23"><P class="p6 ft20" contenteditable="true"  id="ticketDue">PHP </P></td>
                                <td class="tr17 td24"><a href="javascript:void(0);" class="remove_FDetails"><i style="font-size:18px;" class="fas fa-times"></i></a></td>
                              </tr>
                              <tr>
                                <td class="tr12 td20"><P class="p4 ft14"></P></td>
                                <td class="tr12 td21"><P class="p4 ft14"></P></td>
                              </tr>
                            </table>
                          </TABLE>
                        </DIV>
                      </div>
                      <center>
                        <span id="btngrphide">
                          <a href="javascript:void(0);" style="font-size:20px;" class="fg-button btn " id="info1"> Info 1</a>
                          <a href="javascript:void(0);" style="font-size:20px;" class="fg-button btn" id="info2">Info 2</a>
                        </span>
                      </center>
                      <DIV id="page_2">

                              </DIV>

                    </div>
                  </div>
                </div>
                <center>
                  <button type = "button" style="margin-left:0px;" class="fg-button btn btn-primary " onclick="addDataTicket()">Save and Continue</button>
                  <button type = "button" style="margin-left:300px;" class="fg-button btn btn-primary " onclick="printDiv('Comp_data')">Print</button>
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
