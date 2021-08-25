$(function() {

    $('.js-check-all').on('click', function() {
      
      if ( $(this).prop('checked') ) {
        $('.control--checkbox input[type="checkbox"]').each(function() {
          $(this).prop('checked', true);
        })
      } else {
        $('.control--checkbox input[type="checkbox"]').each(function() {
          $(this).prop('checked', false);
        })
      }
  
    });
  
    $('.js-ios-switch-all').on('click', function() {
      
      if ( $(this).prop('checked') ) {
        $('.ios-switch input[type="checkbox"]').each(function() {
          $(this).prop('checked', true);
          $(this).closest('tr').addClass('active');
        })
      } else {
        $('.ios-switch input[type="checkbox"]').each(function() {
          $(this).prop('checked', false);
          $(this).closest('tr').removeClass('active');
        })
      }
  
    });
  
    
  
    $('.ios-switch input[type="checkbox"]').on('click', function() {
      if ( $(this).closest('tr').hasClass('active') ) {
        $(this).closest('tr').removeClass('active');
      } else {
        $(this).closest('tr').addClass('active');
      }
    });
  
      
  
  });

(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    

})(jQuery);