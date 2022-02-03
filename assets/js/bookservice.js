var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));
// $(document).ready(function() {


//   function loadcontent() {
//     $.ajax({
//       url: "./views/bs_setupservice.php",
//       success: function(result) {
//         $("#shawdata").html(result);
//       }
//     });


//   }
//   loadcontent();



//   $("#1").click(function() {
//     loadcontent();
//   });



//   $("#2").click(function() {
//     $.ajax({
//       url: "./views/bs_scheduleplan.php",
//       success: function(result) {
//         $("#shawdata").html(result);
//       }
//     });


//   });



//   $("#3").click(function() {
//     $.ajax({
//       url: "./views/bs_yourdetails.php",
//       success: function(result) {
//         $("#shawdata").html(result);
//       }
//     });

//   });


//   $("#4").click(function() {
//     $.ajax({
//       url: "./views/bs_makepayment.php",
//       success: function(result) {
//         $("#shawdata").html(result);
//       }
//     });

//   });

// });