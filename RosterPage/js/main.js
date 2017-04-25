$(document).ready(function(){

    //Confirm delete script
    $('a.delete').click(function(e){
		var theHREF = $(this).attr("href"),
		    j = confirm("Do you really wish to delete this patroller record?");
		    if(j == false) {
		        e.preventDefault();
		        }
		    if(j == true) {
		        if ( theHREF && theHREF.length ) {
		            window.location.href = theHREF;
		        }
		    }
    });
});