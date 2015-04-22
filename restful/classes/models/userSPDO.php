<?php

	class userSPDO extends PDO{

		private static $instance=null;

		CONST dsn = 'mysql:host=localhost;dbname=usuaris';
		CONST user = '2daw06_root';
		CONST password = 'slb123';

		function __construct(){
			try {
    				parent::__construct(self::dsn,self::user,self::password);
			} catch (PDOException $e) {
    			echo 'Connection failed: '.$e->getMessage();
			}
			 
		}

		static function singleton(){
                    if( self::$instance == null )
                    {
                            self::$instance = new self();
                    }
                    return self::$instance;
            }
		
		

	}