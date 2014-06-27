<?php defined('APP') OR exit('No direct script access allowed');
/**
 * ************************************
 *  @author : Yudi Purwanto
 *  @link   : http://yudi-purwanto.com
 *  @since  : 14 May 2014
 *  File    : DBPDO.php
 *  
 * 
 **************************************/
class DBPDO extends PDO
{
	private static $instance = null;
	
	public function __construct()
	{
		$config = Config::conn();
		parent::__construct('mysql:host=' . $config->get('dbhost') .';dbname=' . $config->get('dbname'), $config->get('dbuser'), $config->get('dbpass'), 
		array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . $config->get('dbchar')
                    )
					);
	}
	
	public static function conn() 
	{
		if( self::$instance == null )
		{
			self::$instance = new self();
		}
		
		return self::$instance;
		
	} //<--- * conn * --->
	
} //<------------ * End Class * ------------->

 /* End of file DBPDO.php */
/* Location: ./base/DBPDO.php */