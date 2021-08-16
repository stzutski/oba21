/*
 * scripts dashboard
 * */

      $( document ).ready(function() {

        $( ".stp" ).click(function(e) {
          e.preventDefault();
          let pa = $(this).attr("data-st")
          $( "#"+pa ).slideToggle('fast');
        });

      }); 
