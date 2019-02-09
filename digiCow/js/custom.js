    $("#cattle").click( function () {
        location.href = "newcattle.php";
    }) ;
     $("#invetory").click(function () {
        location.href = "inventory.php";
    });
     $("#report").click(
     	function () {
        location.href = "report.php";
    }) ;


    $("#milk").click( function () {
        location.href = "milkRecord.php";
    }) ;

     $("#health").click(function () {
        location.href = "healthRecord.php";
    });

     $("#breeding").click(
        function () {
        location.href = "breedingRecords.php";
    }) ;

      $("#records").click(function () {
        location.href = "records.php";
    }) ;

      $("#Milk").click(function () {
        location.href = "viewMilkRecords.php";
    });

     $("#Health").click(
        function () {
        location.href = "viewHealthRecords.php";
    }) ;
     
      $("#Breeding").click(function () {
        location.href = "viewBreedingRecords.php";
    }) ;

      $("#forum").click(function () {
        location.href = "forum.php";
    }) ;





     //div id="div1"
     //onclick="printContent('div1')";
function printContent(el){
var restorepage=document.body.innerHTML;
var printcontent= document.getElementById(el).innerHTML;
document.body.innerHTML=printcontent;
window.print();
document.body.innerHTML=restorepage;
}