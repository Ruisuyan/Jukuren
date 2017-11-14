$('tbody tr.selectGrade td').click(function () {    
    $('#puntaje').val($(this).children('.puntos').val()+'');
});