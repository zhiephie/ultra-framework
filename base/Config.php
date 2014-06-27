<?php defined('APP') OR exit('No direct script access allowed');
/**
 * ************************************
 *  @author : Yudi Purwanto
 *  @link   : http://yudi-purwanto.com
 *  @since  : 14 May 2014
 *  File    : Config.php
 *  
 * 
 **************************************/
class Config
{
	private $vars;
	private static $instance;
	
	private function __construct()
	{
		$this->vars = array();
	}
	
	 public function set( $name, $value )
	 {
	 	if( !isset( $this->vars[ $name ] ) )
		{
			$this->vars[ $name ] = $value;
		}
	 }
	 
	  public function get( $name )
	  {
	  	if( isset( $this->vars[ $name ] ) )
		{
			return $this->vars[ $name ];
		}
	  }
	  
	  public static function conn()
	  {
	  	if( !isset( self::$instance ) )
		{
			$c = __CLASS__;
			self::$instance = new $c;
		}
		
		return self::$instance;
	  }
	
} //<------------ * End Class * ------------->

/* End of file Config.php */
/* Location: ./base/Config.php */