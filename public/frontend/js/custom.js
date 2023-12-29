$(document).ready(function() {

    $(".plus").click(function (e) {
        e.preventDefault();
        let card = $(this).closest('.card-body');
        let price = card.find('#price').val();
        let qty = card.find('#qty').val();

        let plus = parseInt(qty) + 1;
        card.find('#qty').val(plus);

        let subtotal = parseInt(price) * parseInt(plus);
        card.find('.total').val(subtotal);

        if (qty > 0){
            card.find(".minus").prop('disabled', false)
        }
    })

    $(".minus").click(function (e) {
        e.preventDefault();
        let card = $(this).closest('.card-body');
        let price = card.find('#price').val();
        let qty = card.find('#qty').val();

        let plus = parseInt(qty) - 1;
        card.find('#qty').val(plus);

        let subtotal = parseInt(price) * parseInt(plus);
        card.find('.total').val(subtotal);

        if (qty <= 1){
            card.find(".minus").prop("disabled", true)
        }
    })



    $('.card-body').each(function() {
        var card = $(this);
        var price = card.find("#price").val();
        var qty = card.find("#qty").val();
        var total = parseInt(price) * parseInt(qty);
        card.find("#total").val(total);
    })
});

$(document).ready(function(){

    $(".expedition").change(function(e){
        e.preventDefault();
        let exp = $(".expedition").val();

        if (exp === "jnt") {
            let shipping = $(".shipping").val(9000);
        } else if (exp === "jne") {
            let shipping = $(".shipping").val(10000);
        } else if (exp === "sicepat") {
            let shipping = $(".shipping").val(8000);
        } else {
            let shipping = $(".shipping").val(9500);
        }

        $('.pembayaran').each(function(){
            let card = $(this);
            let totalShopping = card.find('.totalShopping').val();
            let totalPpn = parseInt(totalShopping) * 0.11;
            let ppn = card.find('.ppn').val(totalPpn);
            let disc = card.find('.discount').val();
            let totalDisc = parseInt(totalShopping) * parseFloat(disc);
            let shipping = card.find('.shipping').val();

            let subtotal = parseInt(totalShopping) + parseInt(totalPpn);
            let subtotal2 = parseInt(subtotal) + parseInt(shipping);
            card.find('.dibayarkan').val(subtotal2);
            // card.find('.ppn').val(ppn);
        });

    });
});
