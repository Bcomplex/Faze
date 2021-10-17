$(document).ready(function () {
    $("#submit").click(function () {
        var umnozstvi = $("#mnozstvy").val();
        var ufrakce = $("#select :selected").val(); // The value of the selected option
        console.log(ufrakce)
        $.ajax
        (
            {
                type  : 'POST',
                url   : 'vypocet.php',
                data  :  {m:umnozstvi,f:ufrakce},
                success:  function (data)
        {
            $('#msg').html(data)
        }
            })

    })
})