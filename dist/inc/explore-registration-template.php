<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Explore GCC 9/18
 * Template for WPForms.
 */
class WPForms_Template_explore_gcc_918 extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Explore GCC 9/18';

		// Template slug
		$this->slug = 'explore_gcc_918';

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
		'form_title' => 'Explore GCC 9/18',
		'submit_text' => 'Register for Event',
		'submit_text_processing' => 'Sending Registration...',
		'submit_class' => 'btn-primary',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => '{admin_email}',
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
				'message' => '<p>Thanks for contacting us! We will be in touch with you shortly.</p>',
				'message_scroll' => '1',
				'page' => '2',
			),
		),
	),
	'providers' => array (
		'constant-contact' => array (
			'connection_5d6ed21251830' => array (
				'connection_name' => 'Explore GCC 9/18 Registration',
				'account_id' => '5d6ed276d127d',
				'list_id' => '1494686281',
				'fields' => array (
					'email' => '5.value.email',
					'full_name' => '',
					'first_name' => '1.value.first',
					'last_name' => '2.value.last',
					'work_phone' => '6.value.text',
					'url' => '',
					'address' => '',
					'job_title' => '',
					'company_name' => '',
				),
			),
		),
	),
	'meta' => array (
		'template' => 'explore_gcc_918',
	),
);
	}
}
new WPForms_Template_explore_gcc_918;
endif;