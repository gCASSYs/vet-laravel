var $contactForm = $("#contactForm");

if ($contactForm.length) {
    $contactForm.validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            formError();
            submitMSG(false, "Revise os campos obrigatórios.");
        } else {
            event.preventDefault();
            submitForm();
        }
    });
}


function submitForm(){
    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: $contactForm.serialize(),
        success : function(text){
            if ($.trim(text) === "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $contactForm[0].reset();
    submitMSG(true, "Mensagem enviada com sucesso.");
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#success").removeClass().addClass(msgClasses).text(msg);
}
