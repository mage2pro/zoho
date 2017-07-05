<?php
namespace Df\Zoho\API;
use \Df\Zoho\Settings as S;
/**
 * 2017-07-05
 * @see \Df\Zoho\API\BI\Client
 */
abstract class Client extends \Df\API\Client {
	/**
	 * 2017-07-06
	 * @return S
	 */
	final protected function ss() {return S::convention($this, S::class);}

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