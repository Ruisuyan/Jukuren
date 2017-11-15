var rows = $('tbody.listOfCourses tr');

$(function(){
    rows.show();
});

$('#cycleOfCourse').change(function(){
    var idValue = $(this).val();        
    if(idValue.length == 0){
        rows.show();       
    }else{
        rows.filter('.course'+idValue).show();
        rows.not('.course'+idValue).hide();     
    }    
    //rows.not('.course'+idValue).find(':checkbox').prop('checked', false);
});