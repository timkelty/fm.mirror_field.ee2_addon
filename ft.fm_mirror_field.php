<?php if ( ! defined('EXT')) exit('Invalid file request');

// Get config file
require(PATH_THIRD.'fm_mirror_field/config.php');

/**
* Mirror Field Fieldtype
*/
class Fm_mirror_field_ft extends EE_Fieldtype {
  
	// --------------------------------------------------------------------

	var $info = array(
		'name'		=> FM_MIRROR_NAME,
		'version'	=> FM_MIRROR_VERSION
	);
  
  // enable/disable tag pairs
  var $has_array_data = FALSE;
	

	// --------------------------------------------------------------------

	/**
	* Fieldtype Constructor
	* @return	void
	*/
	function __construct()
	{
		parent::EE_Fieldtype();
	}
	
	// --------------------------------------------------------------------

	/**
	 * Display Field Settings
	 * @param Array $data Field settings
	 */
	function display_settings($data)
	{
		
		$this->EE->lang->loadfile('fm_mirror_field');

		// Select Field
		$this->EE->table->add_row(
			lang('select_field', 'select_field'),
      'Select Goes Here'
		);

		// Regex
		$this->EE->table->add_row(
			lang('regex_to_perform', 'regex_to_perform'),
			'Regex input goes here'
		);
	}

	/**
	* Displays the field in publish form
	*
	* @param	string
	* @param	bool
	* @return	string
	*/
	function display_field($data, $cell = FALSE)
	{

	}

	// --------------------------------------------------------------------

	/**
	* Displays the field in matrix
	*
	* @param	string
	* @return	string
	*/
	function display_cell($cell_data)
	{	
		return $this->display_field($cell_data, TRUE);
	}

	// --------------------------------------------------------------------
	
	/**
	* Displays the field in Low Variables
	*
	* @param	string
	* @return	string
	*/
	function display_var_field($var_data)
	{
		return $this->display_field($var_data);
	}

	// --------------------------------------------------------------------

}

// End of file ft.fm_mirror_field.php