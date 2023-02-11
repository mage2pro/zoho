<?php
use Df\Zoho\App;
/**
 * 2017-07-06
 * @used-by \Df\ZohoBI\Source\Organization::app()
 * @param string|object $c
 */
function df_zoho_app($c):App {return App::s($c);}