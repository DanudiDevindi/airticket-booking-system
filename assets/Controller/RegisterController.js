$(document).ready(function () {
    $('#CityCombo1').empty();
    $.ajax({
        url:"api/service/RegisterService.php",
        method:"GET",
        async:true,
        data:"&operation=getAllCity1",
        dataType:"json"
    }).done(function (resp) {
        for (var i in resp){
            var name=resp[i];
            var n=name[0];
            var row=$('<option>'+n+'</option>');
            $('#CityCombo1').append(row);
        }
    })


})

$(document).ready(function () {
    $('#CountryCombo').empty();
    $.ajax({
        url:"api/service/RegisterService.php",
        method:"GET",
        async:true,
        data:"&operation=getAllCountry",
        dataType:"json"
    }).done(function (resp) {
        for (var i in resp){
            var name=resp[i];
            var n=name[0];
            var row=$('<option>'+n+'</option>');
            $('#CountryCombo').append(row);
        }
    })


})

$('#AddRegisterBtn').click(function () {
    var formData=$('#RegisterForm').serialize();
    $.ajax({
        url:"api/service/registerService1.php",
        method:"GET",
        async:true,
        data:formData+"&operation=add"
    }).done(function (resp) {
        alert(resp);

    });

});
