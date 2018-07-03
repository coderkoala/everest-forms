<?php
/**
 * Hidden field
 *
 * @package EverestForms\Fields
 * @since   1.2.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * EVF_Field_Hidden Class.
 */
class EVF_Field_Hidden extends EVF_Form_Fields {

	/**
	 * Constructor.
	 */
	public function init() {
		$this->name  = esc_html__( 'Hidden Field', 'everest-forms' );
		$this->type  = 'hidden';
		$this->icon  = 'evf-icon evf-icon-hidden-field';
		$this->order = 40;
		$this->group = 'advanced';
		$this->is_pro = true;
	}
}
