<?php
/**
 * TOP API: taobao.appip.get request
 * 
 * @author auto create
 * @since 1.0, 2013-07-25 16:49:24
 */
class AppipGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.appip.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
