<?php
/**
 * 2017-07-06
 * «\Dfe\ZohoBooks\API\Client» => «Books»
 * «\Dfe\ZohoCRM\T\Basic» => «CRM»
 * «\Dfe\ZohoInventory\Settings» => «Inventory»
 * @used-by df_zoho_app_lc()
 * @param string|object $c
 * @return string
 */
function df_zoho_app($c) {return dfcf(function($c) {return df_assert_in(df_result_sne(
	df_trim_text_left(df_class_second($c), 'Zoho')
), ['Books', 'CRM', 'Inventory']);}, [$c]);}

/**
 * 2017-07-06
 * «\Dfe\ZohoBooks\API\Client» => «books»
 * «\Dfe\ZohoCRM\T\Basic» => «crm»
 * «\Dfe\ZohoInventory\Settings» => «inventory»
 * @used-by \Df\ZohoBI\API\Client::uriBase()
 * @used-by \Df\Zoho\Settings::prefix()
 * @param string|object $c
 * @return string
 */
function df_zoho_app_lc($c) {return dfcf(function($c) {return strtolower(df_zoho_app($c));}, [$c]);}