$('#payBtn').click(function () {
    var formData=$('#paymentForm').serialize();
    $.ajax({
        url:"api/service/PaymentService.php",
        method:"GET",
        async:true,
        data:formData+"&operation=add",
        dataType:"json"
    }).done(function (resp) {
        alert(resp);

    });
    //alert("done")

});


