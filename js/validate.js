(function ( $ ) {
    $.validator.addMethod("customemail",
        function(value, element) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(value);
        },
        "Tu correo no es válido"
    );
    /**
     * Validación del formulario usando jQuery Validate
     */
    function featureForm() {
        formulario = $('.feature__form');
        $('<div class="message"></div>').appendTo(formulario);
        $('<div class="loader"><div class="loader--scale"><div class="assembly"><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="hex"></div></div></div></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                    featurename: "required",
                    featurelastname: "required",
                    featuremail: {
                        required: true,
                        customemail: true
                    },
                    featurephone: {
                        required: true,
                        number: true
                    }
                },
                messages: {
                    featurename: "Este campo es requerido",
                    featurelastname: "Este campo es requerido",
                    featuremail: {
                        required: "Este campo es requerido",
                        email: "Correo no válido"
                    },
                    featurephone: {
                        required: "Este campo es requerido",
                        number: "Sólo números"
                    }
                },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').fadeIn();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').fadeOut();
                        formulario.find('.message').addClass('form-error').html('<h2>Mensaje de Error</h2><p class="warning-msg">Error inesperado, intentalo mas tarde.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('form-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').fadeOut();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<h2>Mensaje de Exito</h2><p class="warning-msg">Tu Mensaje ha sido enviado con éxito.</p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function contactForm() {
        formulario = $('.contact__form');
        $('<div class="message"></div>').appendTo(formulario);
        $('<div class="loader"><div class="loader--scale"><div class="assembly"><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="hex"></div></div></div></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                    username: "required",
                    userlastname: "required",
                    usermail: {
                        required: true,
                        customemail: true
                    },
                    userphone: {
                        required: true,
                        number: true
                    },
                    mensaje: "required"
                },
                messages: {
                    username: "Este campo es requerido",
                    userlastname: "Este campo es requerido",
                    usermail: {
                        required: "Este campo es requerido",
                        email: "Correo no válido"
                    },
                    userphone: {
                        required: "Este campo es requerido",
                        number: "Sólo números"
                    },
                    mensaje: "Este campo es requerido"
                },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').fadeIn();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').fadeOut();
                        formulario.find('.message').addClass('message--error').html('<p><strong>Hemos tenido un error al enviar tu correo,</strong> por favor, inténtalo nuevamente.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('message-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').fadeOut();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<p>Tu mensaje ha sido <strong>enviado con exito</strong></p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p>Tu mensaje ha sido <strong>enviado con exito</strong></p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function registroForm() {
        formulario = $('.form__registro');
        $('<div class="message"></div>').appendTo(formulario);
        $('<div class="loader"><div class="loader--scale"><div class="assembly"><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="hex"></div></div></div></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                    regname: "required",
                    reglastname: "required",
                    regmail: {
                        required: true,
                        customemail: true
                    },
                    regpass: "required"
                },
                messages: {
                    regname: "Este campo es requerido",
                    reglastname: "Este campo es requerido",
                    regmail: {
                        required: "Este campo es requerido",
                        email: "Correo no válido"
                    },
                    regpass: "Este campo es requerido"
                },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').fadeIn();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').fadeOut();
                        formulario.find('.message').addClass('message--error').html('<p><strong>Hemos tenido un error al enviar tu correo,</strong> por favor, inténtalo nuevamente.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('message-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').fadeOut();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<p>Tu mensaje ha sido <strong>enviado con exito</strong></p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p>Tu mensaje ha sido <strong>enviado con exito</strong></p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    function accesoForm() {
        formulario = $('.form__acceso');
        $('<div class="message"></div>').appendTo(formulario);
        $('<div class="loader"><div class="loader--scale"><div class="assembly"><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="tri"></div><div class="hex"></div></div></div></div>').appendTo(formulario);
        formulario.validate({
            rules: {
                    accname: "required",
                    accpass: "required"
                },
                messages: {
                    accname: "Este campo es requerido",
                    accpass: "Este campo es requerido"
                },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.loader').fadeIn();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.loader').fadeOut();
                        formulario.find('.message').addClass('message--error').html('<p><strong>Hemos tenido un error al enviar tu correo,</strong> por favor, inténtalo nuevamente.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('message-error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        formulario.find('.loader').fadeOut();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<p>Tu mensaje ha sido <strong>enviado con exito</strong></p>').slideDown().delay(3000).slideUp();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<p>Tu mensaje ha sido <strong>enviado con exito</strong></p>').slideDown().delay(3000).slideUp();
                        }
                    }
                } );
                return false;
            }
        });
    }
    featureForm();
    contactForm();
    registroForm();
    accesoForm();
}(jQuery));