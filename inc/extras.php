<?php
/* -------------------------------------------------------------------------- */
/*                   SHOW FORM AGAIN AFTER SUBMIT (WPFORMS)                   */
/* -------------------------------------------------------------------------- */

function wpf_dev_frontend_output_success($form_data, $fields, $entry_id)
{

	// Optional, you can limit it to specific forms. Below, we restrict output to form #235.
	if (absint($form_data['id']) !== 27) {
		return;
	}
	// Reset the fields to blank
	unset(
		$_GET['wpforms_return'],
		$_POST['wpforms']['id']
	);

	// Uncomment this line out if you want to clear the form field values after submission
	unset($_POST['wpforms']['fields']);

	// Actually render the form.
	wpforms()->frontend->output($form_data['id']);
}

add_action('wpforms_frontend_output_success', 'wpf_dev_frontend_output_success', 10, 3);
