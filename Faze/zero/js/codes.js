$(document).ready(function (){

    $("#btn").click(function (){
        var strana_a = $("#strana_1").val();
        var strana_b = $("#strana_2").val();
        var vyska_a = $("#vyska").val();
       $.ajax
       (
           {
               type     :       'POST',
               url      :       'vypocet.php',
               data     :       {a:strana_a,b:strana_b,v:vyska_a},
               success  :       function (data)
               {
                   $("#msg").html(data);

               }
           }
       )
    })
})