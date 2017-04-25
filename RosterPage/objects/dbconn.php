<?php

include_once 'objects/dbconn.php';

class DBConn {
    
    const SETTINGS_FILE = './config/db_settings.ini';
    private $settings;

    public function DBConn() {
        try {
           $this->getDBSettings();
        } 
        catch (Exception $e) {
             
        }
    }
     
    private function getDBSettings() {
        $this->settings = parse_ini_file(self::SETTINGS_FILE , true);
    }
        
    public function getConn() {
		try {
		    if (!isset($this->settings)) $this->getDBSettings ();

            $dsn = $this->settings['database_read']['dsn'];
            $conn = new PDO($dsn, 'wpsp_read', 'skipatrol');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			//self::$db = $conn;
			return $conn;
         }
         catch (Exception $e) {
             echo "<br>Errors occurred:: <br>" . $e;
         }
    }	
}

?>