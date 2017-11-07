var rows = $('tbody.listOfQuestions tr');

$(function(){
    rows.hide();
});

$('#competenceOfQuestions').change(function(){
    var idValue = $(this).val();
    rows.filter('.competence'+idValue).show();
    rows.not('.competence'+idValue).hide();
    rows.not('.competence'+idValue).find(':checkbox').prop('checked', false);
});