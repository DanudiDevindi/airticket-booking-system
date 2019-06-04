$(document).ready(function () {
    $('#cityCombo').empty();
    $.ajax({
        url:"api/service/TicketService.php",
        method:"GET",
        async:true,
        data:"&operation=getCity",
        dataType:"json"
    }).done(function (resp) {
      for (var i in resp){
          var name=resp[i];
          var n=name[0];
          var row=$('<option>'+n+'</option>');
          $('#cityCombo').append(row);
      }
    })


});

$(document).ready(function () {
    $('#ToCityCombo').empty();
    $.ajax({
        url:"api/service/TicketService.php",
        method:"GET",
        async:true,
        data:"&operation=getAllToCity",
        dataType:"json"
    }).done(function (resp) {
        for (var i in resp){
            var name=resp[i];
            var n=name[0];
            var row=$('<option>'+n+'</option>');
            $('#ToCityCombo').append(row);
        }
    })


});


$('#searchButton').click(function () {
    let form=$('#TicketForm').serialize();
    $.ajax({
        url:"api/service/FlightService.php",
        method:"GET",
        async:true,
        data:form+"&operation=searchFlights",
        dataType:"json"
    }).done(function (resp) {
        for (let i = 0; i < resp.length; i++) {
            $('#flightBody').append("<tr><td>"+resp[i][0]+"</td><td>"+resp[i][1]+"</td><td>"+resp[i][2]+"</td><td>"+resp[i][3]+"</td><td>"+resp[i][4]+"</td><td>"+resp[i][5]+"</td><td>"+resp[i][6]+"</td></tr>");
        }
    }).fail(function (xxr,resp) {
        alert(xxr+resp);
    });


});

$(document).ready(function () {
    $('#FromCityCombo').empty();
    $.ajax({
        url:"api/service/TicketService.php",
        method:"GET",
        async:true,
        data:"&operation=getAllFromCity",
        dataType:"json"
    }).done(function (resp) {
        for (var i in resp){
            var name=resp[i];
            var n=name[0];
            var row=$('<option>'+n+'</option>');
            $('#FromCityCombo').append(row);
        }
    })


});

$('#addTicketBtn').click(function () {
    var formData=$('#TicketForm').serialize();
    $.ajax({
        url:"api/service/ticketService1.php",
        method:"GET",
        async:true,
        data:formData+"&operation=add"
    }).done(function (resp) {
        alert(resp);

    });

});