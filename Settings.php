<?php
namespace Dfe\Zoho;
/**
 * 2017-07-05
 * @see \Dfe\ZohoBI\Settings
 * @see \Dfe\ZohoBooks\Settings
 * @method static Settings s()
 */
abstract class Settings extends \Df\Config\Settings {
	/**
	 * 2017-07-05 «Authentication Token
	 * @used-by \Dfe\ZohoBI\API\Client::headers()
	 * @used-by \Dfe\ZohoBI\Source\Organization::isRequirementMet()
	 * @used-by \Dfe\ZohoCRM\API\Client::commonParams()
	 */
	final function token():string {return $this->p();}

	/**
	 * 2017-07-05
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 */
	final protected function prefix():string {return dfc($this, function() {return
		'df_zoho/' . df_zoho_app($this)->titleLc()
	;});}
}