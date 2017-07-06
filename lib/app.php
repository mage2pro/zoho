<?php
use Df\Zoho\App;
/**
 * 2017-07-06
 * @used-by \Df\ZohoBI\API\Validator::title()
 * @used-by \Df\ZohoBI\Source\Organization::app()
 * @param string|object $c
 * @return App
 */
function df_zoho_app($c) {return App::s($c);}