<?php
namespace Df\Zoho;
/**
 * 2017-07-05
 * @see \Df\ZohoBI\Settings
 * @see \Dfe\ZohoBooks\Settings
 * @method static Settings s()
 */
abstract class Settings extends \Df\Config\Settings {
	/**
	 * 2017-07-05 «Authentication Token
	 * @used-by \Df\ZohoBI\API\Client::headers()
	 * @used-by \Df\ZohoBI\Source\Organization::isRequirementMet()
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
		'df_zoho/' . df_zoho_app($this)->titleLc()
	;});}
}