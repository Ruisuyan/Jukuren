var n=1;
$("#add").click(function() {
    var x = $("#add").attr('disabled');
    if (typeof x !== typeof undefined && x !== false) {return;	}
    if(n==5){return;}
    n++; 
    $("#opciones").append('<div class="form-group preg"><label class="control-label col-md-2 col-sm-2 col-xs-1 col-md-offset-0 col-sm-offset-0 col-xs-offset-5"> - </label><div class="col-md-8 col-sm-8 col-xs-6"><div class="input-group"><input type="text" name="clave['+n+']" class="form-control tCerrada" required maxlength="500"><span class="input-group-addon"><input type="number" required class="tCerr" value="0" name="puntaje['+n+']" > Puntaje </span></div></div>	</div>');

});
$("#remove").click(function() {
    var x = $("#remove").attr('disabled');
    if (typeof x !== typeof undefined && x !== false) {return;	}
    if(n==1){return}
        $(".preg:last-child").remove();
    n--;
});
$("#performanceId").change(function() {
    //alert('im here');
    $("#competencia").text($('option:selected').attr('data-content'));    
}).change();
