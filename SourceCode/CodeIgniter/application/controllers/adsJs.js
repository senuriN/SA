$( function() {
    $( "#datepicker" ).datepicker();

} );

function showPromtBox() {
    var choice=document.getElementById("reason");
    var selectedReason = choice.options[choice.selectedIndex].text;

    if(selectedReason=="Other")
    {
        // prompt("Please enter a Reason for cancellation", "");
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
}


