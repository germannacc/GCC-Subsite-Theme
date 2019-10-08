<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Explore GCC 10/1
 * Template for WPForms.
 */
class WPForms_Template_explore_gcc_101 extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Explore GCC 10/1';

		// Template slug
		$this->slug = 'explore_gcc_101';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 8,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your first name...',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your last name...',
		),
		7 => array (
			'id' => '7',
			'type' => 'number',
			'label' => 'Number of Guest',
			'size' => 'large',
			'placeholder' => 'Enter the number of guest...',
		),
		5 => array (
			'id' => '5',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your email address...',
		),
		6 => array (
			'id' => '6',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'smart',
			'size' => 'large',
			'placeholder' => 'Enter your phone number...',
		),
	),
	'settings' => array (
		'form_title' => 'Explore GCC 10/1',
		'submit_text' => 'Register for Event',
		'submit_text_processing' => 'Sending Registration...',
		'submit_class' => 'btn-primary',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Registrant Notification',
				'email' => '{field_id="5"}',
				'subject' => 'Experience Germanna 10/1',
				'sender_name' => 'Germanna Community College Recruiting',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '<h1>Experience Germanna</h1>

Thank you for registering for our Experience Germanna session. We look forward to seeing you on our campus soon. If you have any questions about the event, please reach out to us at <a href="mailto:recruiting@germanna.edu">recruiting@germanna.edu</a>.

<h2>October 1</h2>
<hr>
Tuesday
6:30 pm - 7:30 pm
Barbara J. Fried Center
Stafford, Virginia',
			),
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'marketing@germanna.edu, kviarella@germanna.edu, wberry@germanna.edu',
				'subject' => 'New Entry: Explore GCC 9/18',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thank you for registering, we look forward to seeing you.</p>',
				'message_scroll' => '1',
			),
		),
	),
	'providers' => array (
		'constant-contact' => array (
			'connection_5d6ed21251830' => array (
				'connection_name' => 'Explore GCC 9/18 Registration',
				'account_id' => '5d72a45c933f9',
				'list_id' => '2116017465',
				'fields' => array (
					'email' => '5.value.email',
					'full_name' => '',
					'first_name' => '1.value.first',
					'last_name' => '2.value.last',
					'work_phone' => '',
					'url' => '',
					'address' => '',
					'job_title' => '',
					'company_name' => '',
				),
			),
		),
	),
	'meta' => array (
		'template' => 'explore_gcc_101',
	),
);
	}
}
new WPForms_Template_explore_gcc_101;
endif;