//== Class Definition
var SnippetLogin = function() {
<<<<<<< HEAD
    var login = $('#m_login');

    $.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
=======

    var login = $('#m_login');
>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b

    var showErrorMsg = function(form, type, msg) {
        var alert = $('<div class="m-alert m-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
			<span></span>\
		</div>');
<<<<<<< HEAD
=======

>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
        form.find('.alert').remove();
        alert.prependTo(form);
        //alert.animateClass('fadeIn animated');
        mUtil.animateClass(alert[0], 'fadeIn animated');
        alert.find('span').html(msg);
    }
<<<<<<< HEAD
    //== Private Functions
    // var displaySignUpForm = function() {
    //     login.removeClass('m-login--forget-password');
    //     login.removeClass('m-login--signin');
    //     login.addClass('m-login--signup');
    //     mUtil.animateClass(login.find('.m-login__signup')[0], 'flipInX animated');
    // }
    var displaySignInForm = function() {
        login.removeClass('m-login--forget-password');
        login.removeClass('m-login--signup');
=======

    //== Private Functions

    var displaySignUpForm = function() {
        login.removeClass('m-login--forget-password');
        login.removeClass('m-login--signin');

        login.addClass('m-login--signup');
        mUtil.animateClass(login.find('.m-login__signup')[0], 'flipInX animated');
    }

    var displaySignInForm = function() {
        login.removeClass('m-login--forget-password');
        login.removeClass('m-login--signup');

>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
        login.addClass('m-login--signin');
        mUtil.animateClass(login.find('.m-login__signin')[0], 'flipInX animated');
        //login.find('.m-login__signin').animateClass('flipInX animated');
    }
<<<<<<< HEAD
    var displayForgetPasswordForm = function() {
        login.removeClass('m-login--signin');
        login.removeClass('m-login--signup');
        login.addClass('m-login--forget-password');
        //login.find('.m-login__forget-password').animateClass('flipInX animated');
        mUtil.animateClass(login.find('.m-login__forget-password')[0], 'flipInX animated');
    }
=======

    var displayForgetPasswordForm = function() {
        login.removeClass('m-login--signin');
        login.removeClass('m-login--signup');

        login.addClass('m-login--forget-password');
        //login.find('.m-login__forget-password').animateClass('flipInX animated');
        mUtil.animateClass(login.find('.m-login__forget-password')[0], 'flipInX animated');

    }

>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
    var handleFormSwitch = function() {
        $('#m_login_forget_password').click(function(e) {
            e.preventDefault();
            displayForgetPasswordForm();
        });
<<<<<<< HEAD
=======

>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
        $('#m_login_forget_password_cancel').click(function(e) {
            e.preventDefault();
            displaySignInForm();
        });
<<<<<<< HEAD
=======

>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
        $('#m_login_signup').click(function(e) {
            e.preventDefault();
            displaySignUpForm();
        });
<<<<<<< HEAD
=======

>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
        $('#m_login_signup_cancel').click(function(e) {
            e.preventDefault();
            displaySignInForm();
        });
    }
<<<<<<< HEAD
=======

>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
    var handleSignInFormSubmit = function() {
        $('#m_login_signin_submit').click(function(e) {
            e.preventDefault();
            var btn = $(this);
            var form = $(this).closest('form');

<<<<<<< HEAD
            console.log(form);

=======
>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
            form.validate({
                rules: {
                    cpf: {
                        required: true,
<<<<<<< HEAD
                        cpf: true
=======
                        digits:true,
                        minlength:11,
                        maxlength:11
                        
>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
                    },
                    password: {
                        required: true
                    }
<<<<<<< HEAD
=======
                },
                messages:{
                    cpf:{
                        required: "Esse campo é obrigatório",
                        digits: "CPF inválido. Insira apenas números",
                        minlength:"CPF inválido. Insira 11 dígitos",
                        maxlength:"CPF inválido. Insira 11 dígitos"


                    },
                    
                    password:{
                        required: "Esse campo é obrigatório"
                    }
>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
                }
            });

            if (!form.valid()) {
                return;
            }

            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
<<<<<<< HEAD

            form.ajaxSubmit({
                url: '127.0.0.1:8000/main/checklogin',
=======
            var cpf = $('#cpf').val();
            var senha = $('#password').val();
            form.ajaxSubmit({
                url: "teste/checklogin",
                type: "POST",
                async:false,
                dataType:"string",
                contentType: "json",
                data: [cpf, senha ],
               
                success: function(response, status, xhr, $form) {
                    console.log("chegou sucesso");
                }
            });
            /*form.ajaxSubmit({
                url: '',
>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
                success: function(response, status, xhr, $form) {
                	// similate 2s delay
                	setTimeout(function() {
	                    btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
	                    showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');
                    }, 2000);
                }
<<<<<<< HEAD
=======
            });*/
        });
    }

    var handleSignUpFormSubmit = function() {
        $('#m_login_signup_submit').click(function(e) {
            e.preventDefault();

            var btn = $(this);
            var form = $(this).closest('form');

            form.validate({
                rules: {
                    fullname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    },
                    rpassword: {
                        required: true
                    },
                    agree: {
                        required: true
                    }
                }
            });

            if (!form.valid()) {
                return;
            }

            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

            form.ajaxSubmit({
                url: '',
                success: function(response, status, xhr, $form) {
                	// similate 2s delay
                	setTimeout(function() {
	                    btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
	                    form.clearForm();
	                    form.validate().resetForm();

	                    // display signup form
	                    displaySignInForm();
	                    var signInForm = login.find('.m-login__signin form');
	                    signInForm.clearForm();
	                    signInForm.validate().resetForm();

	                    showErrorMsg(signInForm, 'success', 'Thank you. To complete your registration please check your email.');
	                }, 2000);
                }
>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
            });
        });
    }

<<<<<<< HEAD
    // var handleSignUpFormSubmit = function() {
    //     $('#m_login_signup_submit').click(function(e) {
    //         e.preventDefault();
    //         var btn = $(this);
    //         var form = $(this).closest('form');
    //         form.validate({
    //             rules: {
    //                 cpf: {
    //                     required: true
    //                 },
    //                 cpf: {
    //                     required: true,
    //                     cpf: true
    //                 },
    //                 password: {
    //                     required: true
    //                 },
    //                 rpassword: {
    //                     required: true
    //                 },
    //                 agree: {
    //                     required: true
    //                 }
    //             }
    //         });
    //         if (!form.valid()) {
    //             return;
    //         }
    //         btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
    //         form.ajaxSubmit({
    //             url: '',
    //             success: function(response, status, xhr, $form) {
    //             	// similate 2s delay
    //             	setTimeout(function() {
    //                  btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
    //                  form.clearForm();
    //                  form.validate().resetForm();
    //                  // display signup form
    //                  displaySignInForm();
    //                  var signInForm = login.find('.m-login__signin form');
    //                  signInForm.clearForm();
    //                  signInForm.validate().resetForm();
    //                  showErrorMsg(signInForm, 'success', 'Thank you. To complete your registration please check your cpf.');
    //              }, 2000);
    //             }
    //         });
    //     });
    // }
    var handleForgetPasswordFormSubmit = function() {
        $('#m_login_forget_password_submit').click(function(e) {
            e.preventDefault();
            var btn = $(this);
            var form = $(this).closest('form');
            form.validate({
                rules: {
                    cpf: {
                        required: true,
                        cpf: true
                    }
                }
            });
            if (!form.valid()) {
                return;
            }
            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
            form.ajaxSubmit({
                url: '',
                success: function(response, status, xhr, $form) {
                    // similate 2s delay
                    setTimeout(function() {
                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false); // remove 
                        form.clearForm(); // clear form
                        form.validate().resetForm(); // reset validation states
                        // display signup form
                        displaySignInForm();
                        var signInForm = login.find('.m-login__signin form');
                        signInForm.clearForm();
                        signInForm.validate().resetForm();
                        showErrorMsg(signInForm, 'success', 'Cool! Password recovery instruction has been sent to your cpf.');
                    }, 2000);
=======
    var handleForgetPasswordFormSubmit = function() {
        $('#m_login_forget_password_submit').click(function(e) {
            e.preventDefault();

            var btn = $(this);
            var form = $(this).closest('form');

            form.validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                }
            });

            if (!form.valid()) {
                return;
            }

            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

            form.ajaxSubmit({
                url: '',
                success: function(response, status, xhr, $form) { 
                	// similate 2s delay
                	setTimeout(function() {
                		btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false); // remove 
	                    form.clearForm(); // clear form
	                    form.validate().resetForm(); // reset validation states

	                    // display signup form
	                    displaySignInForm();
	                    var signInForm = login.find('.m-login__signin form');
	                    signInForm.clearForm();
	                    signInForm.validate().resetForm();

	                    showErrorMsg(signInForm, 'success', 'Cool! Password recovery instruction has been sent to your email.');
                	}, 2000);
>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
                }
            });
        });
    }
<<<<<<< HEAD
=======

>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
    //== Public Functions
    return {
        // public functions
        init: function() {
            handleFormSwitch();
            handleSignInFormSubmit();
<<<<<<< HEAD
            // handleSignUpFormSubmit();
            handleForgetPasswordFormSubmit();
        }
    };
}();
//== Class Initialization
jQuery(document).ready(function() {
    SnippetLogin.init();
});
=======
            handleSignUpFormSubmit();
            handleForgetPasswordFormSubmit();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    };
}();

//== Class Initialization
jQuery(document).ready(function() {
    SnippetLogin.init();
});
>>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
