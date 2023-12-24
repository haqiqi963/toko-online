$(document).ready(function() {

    var nilai = $('#qty').val();
    var total = $('#total').val();
    var price = $('#price').val();
    var subtotal = parseInt(nilai) * parseInt(price);

    if(nilai>0){
        $('#total').val(subtotal);
    }

    if(nilai > 0){
        $("#minus").prop("disabled", false);
    }

    $("#plus").click(function (){

        var nilai = $('#qty').val();
        var penjumlahan = parseInt(nilai) + parseInt(1);
        $("#qty").val(penjumlahan);
        var price = $('#price').val();
        var subtotal = parseInt(penjumlahan) * parseInt(price);
        $('#total').val(subtotal);

        console.log(penjumlahan);
        if(penjumlahan > 0){
            $("#minus").prop("disabled", false);
        }
    });
    $("#minus").click(function (){

        var nilai = $('#qty').val();
        var penjumlahan = parseInt(nilai) - parseInt(1);
        $("#qty").val(penjumlahan);
        var price = $('#price').val();
        var subtotal = parseInt(penjumlahan) * parseInt(price);
        $('#total').val(subtotal);
        console.log(penjumlahan);
        if(penjumlahan == 0){
            $("#minus").prop("disabled", true);
        }
    });
});

$(document).ready(function(){
    $("#diterima").on('input', function(){
    var total = $("#dibayarkan").val();
    var diterima = $("#diterima").val();
    var hasil = diterima - total;

    if(diterima <= total){
        $("#dikembalikan").val(0);
    }
    else{
        $("#dikembalikan").val(hasil);
    }
    });
});
