<?php
namespace Df\Zoho\API;
use Df\Core\Exception as DFE;
use Dfe\ZohoBooks\Settings as S;
use Zend_Http_Client as C;
/**
 * 2017-07-05
 * @see \Dfe\ZohoBooks\API\Client 
 * @see \Dfe\ZohoInventory\API\Client
 */
abstract class Client extends \Df\API\Client {
	/**
	 * 2017-07-05
	 * @override
	 * @see \Df\API\Client::headers()
	 * @used-by \Df\API\Client::p()
	 * @return array(string => string)
	 */
	final protected function headers() {return ['Authorization' => 'Zoho-authtoken ' . S::s()->token()];}

	/**
	 * 2017-07-05
	 * @override
	 * @see \Df\API\Client::responseFilterC()
	 * @used-by \Df\API\Client::p()
	 * @used-by p()
	 * @return string
	 */
	protected function responseFilterC() {return \Df\API\Response\Filter\JSON::class;}
}