$(function() {//on document load
    $('.client').hide();
    $('.seller').hide();
    $('.supervisor').hide();
    $('#formType').change(function(){
        showForm($("#formType option:selected").val());
    });
});

function showForm(formValue){
    if(formValue === '1'){
        $('.client').show();
        //$(".client :input").prop("disabled", false);
        $('.seller').show();
        //$(".seller :input").prop("disabled", false);
        $('.supervisor').show();
        //$(".supervisor :input").prop("disabled", false);
        //$(".reset").click(function () {
        $(".client").closest('form').find("input[type=text], input[type=number]").val("");
        //});
    }
    else if(formValue === '2'){
        $('.seller').show();
        //$(".seller :input").prop("disabled", false);
        $('.client').hide();
        //$(".client :input").prop("disabled", true);
        $('.supervisor').show();
        //$(".supervisor :input").prop("disabled", false);
        $(".client").find("input[type=text]").val("null");
        $(".client").find("input[type=number]").val("0");
    }
    else if(formValue === '3'){
        $('.supervisor').show();
        //$(".supervisor :input").prop("disabled", false);
        $('.client').hide();
        //$(".client :input").prop("disabled", true);
        $('.seller').hide();
        //$(".seller :input").prop("disabled", true);
        $(".client").find("input[type=text]").val("null");
        $(".client").find("input[type=number]").val("0");
        $(".seller").find("input[type=number]").val("0");
    }
    else {
        $('.client').hide();
        $('.server').hide();
        $('.supervisor').hide();
    }
}