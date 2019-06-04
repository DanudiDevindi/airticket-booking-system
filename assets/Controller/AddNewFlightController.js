
$('#saveNewFlightBtn').click(function () {
    var formData=$('#addNewFlightForm').serialize();
    $.ajax({
        url:"api/service/FlightService.php",
        method:"GET",
        async:true,
        data:formData+"&operation=add"
    }).done(function (resp) {
        alert(resp);

    });

});

$('#deleteFlightBtn').click(function () {
    var formData=$('#addNewFlightForm').serialize();
    $.ajax({
        url:"api/service/FlightService.php",
        method:"GET",
        async:true,
        data:formData+"&operation=delete",
    }).done(function (resp) {
        alert(resp);

    });

});

$('#updateFlightBtn').click(function () {
    var formData=$('#addNewFlightForm').serialize();
    $.ajax({
        url:"api/service/FlightService.php",
        method:"GET",
        async:true,
        data:formData+"&operation=update",
    }).done(function (resp) {
        alert(resp);

    });

});