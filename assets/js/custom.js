(function($){

    // jQuery.validate() for forms
    validateCreateUser = function() {
        $("#userCreateForm").validate({
            rules: {
                name: "required",
                dob: {
                    required: true,
                    date: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: { 
                name: "Name required",
                dob: "Date of Birth required",
                email: "Valid email required"
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    beforeSubmit: ajaxizeData,
                    success: ajaxSuccess,
                    error: ajaxError
                });
                return false;
            }
        });
    }

    // Callbacks for ajaxSubmit plugin
    var errmsg = "<h2>Sorry!</h2><p>Error processing request.</p>";

    ajaxizeData = function (formData, jqForm, options) {
        formData['is_ajax'] = '1';
    }

    ajaxSuccess = function (responseText, statusText, xhr, $form) {
        //$('.text').attr('disabled','true');
        $('.loading').show();
        $('#formDiv').fadeOut('slow');
        $('#success').fadeIn('slow');
    }

    ajaxError = function() {
        $('#success').html(errmsg);
        $('#formDiv').fadeOut('slow');
        $('#success').fadeIn('slow');
    }

})(jQuery);
