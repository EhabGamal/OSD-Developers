var Login = function() {

    var handleLogin = function() {

        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                },
                remember: {
                    required: false
                }
            },

            messages: {
                username: {
                    required: "Username is required."
                },
                password: {
                    required: "Password is required."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit
                $('.alert-danger', $('.login-form')).show();
            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                //form.submit();
                console.log($('.login-form').serialize());
                $('#spinner-bg').show();
                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: '../controllers/osdapi.php',
                    data:$('.login-form').serialize(),
                    success: function(data){
                        console.log(data);
                        var res = JSON.parse(data);
                        console.log(res);
                        if(res.success)
                            window.location = "../controllers/home.php";
                        else{
                            $('#login-error').html(res.errors.msg);
                            $('.alert-danger', $('.login-form')).show();
                        }
                    },
                    error: function(){
                        $('#connectionModal').modal('show');
                    }
                });
                $('#spinner-bg').hide();
            }
        });

        $('.login-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    $('.login-form').submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });
    }

    var handleRegister = function() {

        function format(state) {
            if (!state.id) return state.text; // optgroup
            return "<img class='flag' src='../assets/global/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
        }

        if (jQuery().select2) {
	        $("#select2_sample4").select2({
	            placeholder: '<i class="fa fa-map-marker"></i>&nbsp;Select a Country',
	            allowClear: true,
	            formatResult: format,
	            formatSelection: format,
	            escapeMarkup: function(m) {
	                return m;
	            }
	        });


	        $('#select2_sample4').change(function() {
	            $('.register-form').validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
	        });
    	}

        $('.register-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                fname: {
                    required: true
                },
                lname: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                gender: {
                    required: true
                },
                username: {
                    required: true
                },
                password: {
                    required: true
                },
                rpassword: {
                    equalTo: "#register_password"
                },
                tnc: {
                    required: true
                }
            },

            messages: { // custom messages for radio buttons and checkboxes
                tnc: {
                    required: "Please accept Terms of Service & Privacy Policy first."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit

            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                if (element.attr("name") == "tnc") { // insert checkbox errors after the container
                    error.insertAfter($('#register_tnc_error'));
                } else if (element.closest('.input-icon').size() === 1) {
                    error.insertAfter(element.closest('.input-icon'));
                } else {
                    error.insertAfter(element);
                }
            },

            submitHandler: function(form) {
                //form.submit();
                $('#spinner-bg').show();
                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: '../controllers/osdapi.php',
                    data:$('.register-form').serialize(),
                    success: function(data){
                        $('.register-form').validate().resetForm();
                        console.log(data);
                        var res = JSON.parse(data);
                        console.log(res);
                        if(res.success  && res.redirect)
                            window.location = "../controllers/home.php";
                        else if(res.success  && !res.redirect)
                            window.location.reload();
                        else
                            $('.register-form').validate().showErrors(res.errors);
                    },
                    error: function(){
                        $('#connectionModal').modal('show');
                    }
                });
                $('#spinner-bg').hide();
            }
        });

        $('.register-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.register-form').validate().form()) {
                    $('.register-form').submit();
                }
                return false;
            }
        });

        jQuery('#register-btn').click(function() {
            //jQuery('.login-form').hide();
            //jQuery('.register-form').fadeIn();

            jQuery('.login-form').effect('blind','swing',500,function(){
                jQuery('.register-form').toggle('blind');
            });
        });

        jQuery('#register-back-btn').click(function() {
            //jQuery('.register-form').hide();
            //jQuery('.login-form').fadeIn();
            jQuery('.register-form').effect('blind','swing',500,function(){
                jQuery('.login-form').toggle('blind');
            });
        });
    }

    return {
        //main function to initiate the module
        init: function() {

            handleLogin();
            handleRegister();

        }

    };

}();
