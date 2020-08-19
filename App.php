<?php
namespace Df\Zoho;
/**
 * 2017-07-06
 * @see \Df\ZohoBI\App
 * @see \Dfe\ZohoCRM\App
 */
abstract class App {
	/**
	 * 2017-07-06
	 * @final I do not use the PHP «final» keyword here to allow refine the return type using PHPDoc.
	 * @return Settings
	 */
	function ss() {return dfs($this);}

	/**
	 * 2017-07-06 It returns one of the following strings: «Books», «CRM», «Inventory».
	 * @used-by titleLc()
	 * @used-by \Df\ZohoBI\API\Validator::title()
	 * @return string
	 */
	final function title() {return dfc($this, function() {return df_assert_in(df_result_sne(
		# 2017-07-09 An alternative implementation is: df_explode_camel(df_class_second($this))[1]
		df_trim_text_left(df_class_second($this), 'Zoho')
	), ['Books', 'CRM', 'Inventory']);});}

	/**
	 * 2017-07-06 It returns one of the following strings: «books», «crm», «inventory»
	 * @used-by \Df\ZohoBI\API\Client::urlBase()
	 * @used-by \Df\Zoho\Settings::prefix()
	 * @return string
	 */
	final function titleLc() {return strtolower($this->title());}

	/**
	 * 2017-07-07
	 * @used-by df_zoho_app()
	 * @param string|object $c
	 * @return self
	 */
	final static function s($c) {return dfs_con($c);}
}