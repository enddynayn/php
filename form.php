<?php
require_once ('form_producer/form_producer.php');

add_fieldset('field1', 'Example Form');
add_form_element('field1', 'Name', 'text', '', true);
add_form_element('field1', 'Email', 'text', '', true);
add_form_element('field1', 'Website', 'text', 'http://');
add_form_element('field1', 'Message', 'textarea', '', true);

add_fieldset('field2', 'Further Information');
add_text('field2', 'This is some kind of question?');

$radio_options = array('Value 1', 'Value 2', 'Value 3');
add_form_element('field2', 'Radio', 'radio', $radio_options);

add_text('field2', 'And Another kind of question?');
$check_options = array('Value 1', 'Value 2', 'Value 3');
add_form_element('field2', 'Checkbox', 'checkbox', $check_options);

$select_options = array('Value 1', 'Value 2', 'Value 3');
add_form_element('field2', 'Drop Down', 'select', $select_options);

?>
<html>
<head>
<title>Website Title</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>

<div id="wrapper">

	<h2>PHP AJAX Form Producer</h2>
	<p>The simplest way to create AJAX forms for your website.</p>
	
	<?php generate_form(); ?>

</div>

</body>
</html>