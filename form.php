<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'amywest.net' // Put you mail domain here
	, 
	'AW Design' // Put your site name / form name here
	, 
	'amylou@ufl.edu' // Where will the form notification be sent?
	, 
	'donotreply@amywest.net' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field
	
);


?>

<!-- HTML bottom code goes here -->