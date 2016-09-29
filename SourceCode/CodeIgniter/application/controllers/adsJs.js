/**
 * Created by nayantara on 9/29/16.
 */

$( function() {
    $( "#datepicker" ).datepicker();

} );

function showPromtBox() {
    document.getElementById('dialog').style.display= 'block' ;
        $( function() {

            $( function() {
                $( "#dialog" ).dialog({
                    resizable: false,
                    height: "auto",
                    width: 700,
                    modal: true,
                    buttons: {
                        "Submit Reason": function() {
                            var reasonEntered= document.getElementById('reasonPrompt').value;
                            $( this ).dialog( "close" );
                        },
                        Cancel: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                });
            } );
            $( "#dialog" ).dialog();
        } );

}


