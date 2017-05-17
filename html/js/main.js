$( function() {
  $( "#slider-range-max" ).slider({
    range: "max",
    min: 1,
    max: 100,
    value: 10,
    slide: function( event, ui ) {
      $( "#langue_1_niveau" ).val( ui.value );
    }
  });
  $( "#langue_1_niveau" ).val( $( "#slider-range-max" ).slider( "value" ) );
} );
