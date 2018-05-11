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
                    $tablo.append("<tr><td><input type='checkbox'  value="+i+"/>" + data.ad + "</td><td>" + data.soyad + "</td></tr>");        
               })  
            },
            error: function () {
                alert('bişeyler oldu ama ben de anlamadım')
            }
        });
        $("#buton").click(function(){
            
            var $inputElements = $('input[type="checkbox"]');
            $inputElements.each(function () {
                if($(this).is(':checked')){
                    $checkedValues.push($(this).attr("id"));
                    alert($checkedValues);
                }
                
            });    
        });
  
    });  
    
    
    
         
});
