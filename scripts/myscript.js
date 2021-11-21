$(function(){
    $(document).on('click', '#addMore',function() {
              var cont = $(this).parent().find('#tb');
              var data = $(this).parent().parent().find("#tb tr:eq(1)").clone(true).appendTo(cont);
              data.find(".base_name").html('');
               data.find(".base_value").html('');

     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
              $('.base_value').keyup();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});

$(function(){
  $(document).on('click', '#addMoreFlight', function() {
            var cont = $(this).parent().find('#tbF');
            var data = $(this).parent().parent().find("#tbF tr:eq(2)").clone(true).appendTo(cont);
            data.find(".base_name").html('');
             data.find(".base_value").html('');

   });
     $(document).on('click', '.remove_flight', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});

$(function(){

     $(document).on('click', '.remove_services', function() {
       var trIndex = $(this).closest(".outtero").index();
          if(trIndex>0) {
              $(this).closest(".outtero").remove();
         } else {
           alert("Sorry!! Can't remove first row!");
         }


      });
});

$(function(){
    $(document).on('click','#addSumTable', function() {
              var data = $("#wholeTB").clone(true).appendTo("#wholerTB");

     });
     $(document).on('click', '#removeSumTable', function() {
         var trIndex = $(this).closest("#wholeTB").index();
            if(trIndex>1) {
             $(this).closest("#wholeTB").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});

$(function(){
    $(document).on('click', '#addFlightTable', function() {
              var data = $("#wholeFlightTB").clone(true).appendTo("#wholerFlightTB");

     });
     $(document).on('click', '#minusFlightTable', function() {
       var trIndex = $(this).closest("#wholeFlightTB").index();
          if(trIndex>0) {
            $(this).closest("#wholeFlightTB").remove();
         } else {
           alert("Sorry!! Can't remove first row!");
         }


      });
});

var sum = 0;
var allsum = 0;
$(function(){
    $(document).on('keyup', '.base_value', function() {
      var x = $(this).closest("#wholeTB").find('.base_value');
      //  console.log(x);
      //var y = querySelector(x).querySelectorAll('.base_value');
            sum = 0;
        $(x).each(function(){
            sum += parseFloat($(this).text().replace(',', ''));  // Or this.innerHTML, this.innerText
        });
        $(this).closest("#wholeTB").find(".semi_total").html(sum.toLocaleString()) ;

     });

     $(document).on('keyup', '.base_value', function() {
             allsum = 0;
         $('.semi_total').each(function(){
             allsum += parseFloat($(this).text().replace(',', ''));  // Or this.innerHTML, this.innerText
         });
         $(".overall_total").html("PHP " + allsum.toLocaleString()) ;

      });

});

$(function(){
    $(document).on('click', '#addMoreItinerary',function() {
          var data = $("#ItineraryTB").clone(true).appendTo("#wholeItinerary");
     });
     $(document).on('click', '.remove_itenirary', function() {
         var trIndex = $(this).closest("#ItineraryTB").index();
         console.log(trIndex);
            if(trIndex>1) {
             $(this).closest("#ItineraryTB").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});

$(function(){
    $(document).on('click', '#addMoreFareDetails',function() {
      var data = $(this).parent().parent().find(".wholetform tbody:eq(2)").clone(true).appendTo(".wholetform");
     });
     $(document).on('click', '.remove_FDetails', function() {
         var trIndex = $(this).closest("tbody").index();
         console.log(trIndex);
            if(trIndex>=0) {
             $(this).closest("tbody").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});

$(function(){
  $(document).on('click', '#addMoreFlightD', function() {
            var data = $(this).parent().parent().parent().parent().parent().parent().find("#t2 tr:eq(2)").clone(true).appendTo("#t2");
            console.log(data);

   });
   $(document).on('click', '.remove_flights', function() {
       var trIndex = $(this).closest("tr").index();
          if(trIndex>2) {
           $(this).closest("tr").remove();
         } else {
           alert("Sorry!! Can't remove first row!");
         }
    });
});

$(function(){
  $(document).on('click', '#addDets', function() {
            var data = $(this).parent().parent().find(".t1 tr:eq(2)").clone(true).appendTo(".t1");


   });
   $(document).on('click', '.remove_details', function() {
       var trIndex = $(this).closest("tr").index();
          if(trIndex>2) {
           $(this).closest("tr").remove();
         } else {
           alert("Sorry!! Can't remove first row!");
         }
    });
});

$(function(){
    $(document).on('click', '#cebu',function() {

      $('#tb').html("<TR> <TD colspan=2 class='tr4 td9'><P class='p4 ft5' contenteditable='true'>AIRLINE FARE DETAILS:</P></TD> <TD class='tr4 td5'><P class='p3 ft4'> </P></TD> <TD class='tr4 td6'><P class='p3 ft4'> </P></TD> <TD class='tr4 td7'><P class='p3 ft4'> </P></TD> <TD class='tr4 td8'><P class='p3 ft4'> </P></TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Base Fare</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'  class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Aviation Security Fee</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'   class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Passenger Service Charge</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'   class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true' >DPSC Value Added Tax</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'   class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>PH VAT</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'   class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Manila Aviation Security Fee</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'   class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Administrative Fee</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'   class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Other Taxes </P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'  class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Prepaid Baggage</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'   class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <a href='javascript:void(0);' style='font-size:18px;' id='addMore' title='Add More Fares'><i style=' margin-right:30px;' class='fas fa-plus pull-right'></i></a>");
          $("#btngrphide").remove();
     });
     $(document).on('click', '#pal',function() {
       $('#tb').html("<TR> <TD colspan=2 class='tr4 td9'><P class='p4 ft5' contenteditable='true'>AIRLINE FARE DETAILS:</P></TD> <TD class='tr4 td5'><P class='p3 ft4'> </P></TD> <TD class='tr4 td6'><P class='p3 ft4'> </P></TD> <TD class='tr4 td7'><P class='p3 ft4'> </P></TD> <TD class='tr4 td8'><P class='p3 ft4'> </P></TD> </TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Base Fare</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'  class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Aviation Security Fee</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'  class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Passenger Service Charge</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'  class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Value Added Tax</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'  class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <TR> <TD class='tr2 td3'><P class='p5 ft3 base_name' contenteditable='true'>Baggage</P></TD> <TD class='tr2 td4'><P class='p3 ft4'> </P></TD> <TD class='tr2 td5'><P class='p3 ft4'> </P></TD> <TD class='tr2 td6'><P class='p3 ft4'><a href='javascript:void(0);'  class='remove'><i style='font-size:18px' class='fas fa-times'></i></a></P></TD> <TD colspan=2 class='tr2 td10'><P class='p6 ft3 base_value' contenteditable='true'>0.00</P> </TD> </TR> <a href='javascript:void(0);' style='font-size:18px;' id='addMore' title='Add More Fares'><i style=' margin-right:30px;' class='fas fa-plus pull-right'></i></a>");
           $("#btngrphide").remove();
      });
});

$(function(){
    $(document).on('click', '#info1',function() {

      $('#page_2').html("<br> <DIV class='dclr'></DIV> <P class='p13 ft1'>Positive identification required for airport check in</P> <P class='p14 ft1'>Notice:</P> <P class='p15 ft22'>IF THE PASSENGERS JOURNEY INVOLVES AN ULTIMATE DESTINATION OR STOP IN A COUNTRY OTHER THAN THE COUNTRY OF DEPARTURE THE WARSAW CONVENTION OR THE MONTREAL CONVENTION MAY BE APPLICABLE AND THESE CONVENTIONS GOVERN AND MAY LIMIT THE LIABILITY OF CARRIERS FOR DEATH OR BODILY INJURY AND IN RESPECT OF LOSS OF OR DAMAGE TO BAGGAGE. MANY AIR CARRIERS HAVE WAIVED THE WARSAW CONVENTION LIMITS. FOR DEATH OR BODILY INJURY. FURTHER INFORMATION MAY BE</P> <P class='p16 ft23'>OBTAINED FROM THE CARRIER. SEE ALSO NOTICES HEADED ADVICE TO INTERNATIONAL PASSENGERS ON LIMITATION LIABILITY AND NOTICE OF BAGGAGE LIABILITY LIMITATIONS.</P> <P class='p17 ft1'>Notice of Incorporated Terms</P> <P class='p18 ft25'>Air transportation whether domestic or international is subject to the conditions of carriage of the transporting carrier(s), which are herein incorporated by reference and made part of the contract of carriage. Other carriers on which you may be ticketed may have different conditions of carriage. International air transportation, including the carriers’ liability may be governed by applicable tariffs on file with the U.S. and other governments and by Warsaw or Montreal Convention.Passengers may obtain further information or inspect the full text, from any location where the carrier’s tickets are sold,or at <A href='https://www.philippineairlines.com/AboutUs/LegalNotices'><SPAN class='ft24'>https://www.philippineairlines.com/AboutUs/LegalNotices</SPAN></A>,, which include, but are not limited to:</P> <P class='p19 ft25'><SPAN class='ft25'>(a)</SPAN><SPAN class='ft26'>Limits on liability for injury or death, and for loss, damage, or delay of baggage, including fragileor perishable goods;</SPAN></P> <P class='p20 ft23'><SPAN class='ft23'>(b)</SPAN><SPAN class='ft27'>Claim restrictions, including time periods within which passengers must file a claim or bringaction against the carrier;</SPAN></P> <P class='p21 ft23'><SPAN class='ft23'>(c)</SPAN><SPAN class='ft28'>Rights of the carrier to change terms of the contract of carriage;</SPAN></P> <P class='p22 ft25'><SPAN class='ft25'>(d)</SPAN><SPAN class='ft29'>Rules on reservations, baggage allowance, </SPAN><NOBR>check-in</NOBR> times, travel documentary requirements &refusal to carry;</P> <P class='p23 ft23'><SPAN class='ft30'>(e)</SPAN><SPAN class='ft31'>Rights of the carrier & limits of liability for delay, cancellations or failure to perform serviceincluding scheduled changes, substitution of air carrier or aircraft and rerouting; (f) Refund and rebooking policies; and (g) Other important reminders.</SPAN></P> <P class='p24 ft2'>Data Protection Notice: Your personal data will be processed in accordance with <SPAN class='ft32'>Philippine Airlines' Data Privacy Policy</SPAN> which may be viewed <A href='https://www.philippineairlines.com/AboutUs/LegalNotices/Disclaimer'><SPAN class='ft24'>here</SPAN></A> and/or the applicable carrier's privacy policy and, if your booking is made via a system provider ('GDS'), with its privacy policy. These are available at <A href='https://www.iatatravelcentre.com/privacy'><SPAN class='ft24'>https://www.iatatravelcentre.com/privacy</SPAN></A> or from the carrier(s) or GDS directly. You should read this documentation, which applies to your booking and specifies, for example, how your personal data is collected, stored, used, disclosed and transferred.</P> <P class='p25 ft23'>The Data Privacy Policy, General Conditions of Carriage, and other legal notices, which may be viewed <A href='https://www.philippineairlines.com/AboutUs/LegalNotices'><SPAN class='ft33'>here</SPAN></A> are incorporated herein by reference.</P> <P class='p26 ft34'><A href='https://www.philippineairlines.com/en/aboutus/legalnotices/generalconditionsofcarriage/'>Important Legal Notices</A></P>");
          $("#btngrphide").remove();
     });
     $(document).on('click', '#info2',function() {
       $('#page_2').html("<br> <DIV class='dclr'> </DIV> <P class='p13 ft1'>Positive identification required for airport check in</P> <P class='p14 ft1'>Notice:</P> <P class='p15 ft22'>IF THE PASSENGERS JOURNEY INVOLVES AN ULTIMATE DESTINATION OR STOP IN A COUNTRY OTHER THAN THE COUNTRY OF DEPARTURE THE WARSAW CONVENTION OR THE MONTREAL CONVENTION MAY BE APPLICABLE AND THESE CONVENTIONS GOVERN AND MAY LIMIT THE LIABILITY OF CARRIERS FOR DEATH OR BODILY INJURY AND IN RESPECT OF LOSS OF OR DAMAGE TO BAGGAGE. MANY AIR CARRIERS HAVE WAIVED THE WARSAW CONVENTION LIMITS. FOR DEATH OR BODILY INJURY. FURTHER INFORMATION MAY BE</P> <P class='p16 ft23'>OBTAINED FROM THE CARRIER. SEE ALSO NOTICES HEADED ADVICE TO INTERNATIONAL PASSENGERS ON LIMITATION LIABILITY AND NOTICE OF BAGGAGE LIABILITY LIMITATIONS.</P> <P class='p17 ft1'>Disclosure</P> <P class='p18 ft25'>DATA PROTECTION NOTICE: YOUR PERSONAL DATA WILL BE PROCESSED IN ACCORDANCE WITH THE APPLICABLE CARRIER’S PRIVACY POLICY AND, IF YOUR BOOKING IS MADE VIA A RESERVATION SYSTEM PROVIDER (“GDS”), WITH ITS PRIVACY POLICY. THESE ARE AVAILABLE AT http://www.iatatravelcenter.com/privacy OR FROM THE CARRIER OR GDS DIRECTLY. YOU SHOULD READ THIS DOCUMENTATION, WHICH APPLIES TO YOUR BOOKING AND SPECIFIES, FOR EXAMPLE, HOW YOUR PERSONAL DATA IS COLLECTED, STORED, USED, DISCLOSED AND TRANSFERRED.</P>");
           $("#btngrphide").remove();
      });
});
