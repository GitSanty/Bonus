$( function() {
 
let x = document.getElementsByTagName('div');
let i;
let NameAttibute;
    for (i = 0; i < x.length; i++) {

		NameAttibute = x[i].getAttribute('id');

       	//$("#" + x[i].getAttribute('id')).draggable();

		$( "#sortable" ).sortable({
		      revert: true
		    });

       	$("#" + x[i].getAttribute('id')).draggable({
			      connectToSortable: "#sortable",
			     //helper: "clone",
			      //revert: "invalid"
		    	});

    $( "div" ).disableSelection();
  }

});




$(document).ready(
    function()
    {
        $("input:checkbox").change(
            function()
            {
                if( $(this).is(":checked") )
                {
                    $("#Form_tasks").submit();
                }
            }
        )
    }
);