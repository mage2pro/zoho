<?php
namespace Df\Zoho;
/**
 * 2017-07-05
 * @see \Dfe\ZohoBooks\Settings
 * @see \Dfe\ZohoCRM\Settings
 * @see \Dfe\ZohoInventory\Settings
 * @method static Settings s()
 */
abstract class Settings extends \Df\Config\Settings {
	/**
	 * 2017-07-05 «Authentication Token
	 * @used-by \Df\Zoho\API\BI\Client::headers()
	 * @return string
	 */
	final function token() {return $this->p();}

	/**
	 * 2017-07-05
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 * @return string
	 */
	final protected function prefix() {return dfc($this, function() {return
		'df_zoho/' . df_zoho_app_lc($this)
	;});}
}