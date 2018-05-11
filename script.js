$(document).ready(function () {
    
    $(function (){
        var $checkedValues = [];
    
    var $tablo = $('#tablo');
    var $delSayi;
        $.ajax({
            type:'GET',
            url:'get.php',
            success: function(data){
                data = JSON.parse(data);
                $.each(data, function(i, data){
                    $tablo.append("<tr><td><input type='checkbox' name='cb[]'value="+data.id+"></td><td>" + data.ad + "</td><td>" + data.soyad + "</td><td>" + data.adres + "</td><td>" + data.tur + "</td></tr>");        
               })  
            },
            error: function () {
                alert('bişeyler oldu ama ben de anlamadım')
            }
        });
        
    
    
    
         
})});
