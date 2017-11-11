var rows = $('tbody.listOfCourses tr');

$(function(){
    rows.hide();
});

$('#cycleOfCourse').change(function(){
    var idValue = $(this).val();
    rows.filter('.course'+idValue).show();
    rows.not('.course'+idValue).hide();
    rows.not('.course'+idValue).find(':radio').prop('checked', false);
});