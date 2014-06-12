<?
	header('Content-Type: text/html; charset=utf-8');

    //settings
    define("db_host", "localhost");
    define("db_user", "onlc_user");
    define("db_pass", "M9cPcx6pKDFmnGMX");
    define("db_name", "onlc");
    define("db_charset", "UTF8");
    define("db_prefix", "");


	class implementation
	{
	    function __construct() {
	    	//try connect to db
	        $mysqli = new mysqli(db_host, db_user, db_pass, db_name);      
	        $mysqli->set_charset(db_charset);  
	       if ($mysqli->connect_error) {
	            printf("Connect error: %s\n", $mysqli->connect_error);           
	        }
	        else
	        $this->mysqli = $mysqli;
	    }

	    function search($string)
	    {
	    	$this->string = $string;
	    	$query = "SELECT DISTINCT * from `items` WHERE `name` LIKE '%$this->string%' OR `company` LIKE '%$this->string%' OR `id` LIKE '%$this->string%'";
	    	$result = $this->mysqli->query($query);
	    	echo json_encode($result->fetch_all(MYSQLI_ASSOC));
	    }

	    function get_all()
	    {
	    	$query = "Select * from `items`";
	    	$result = $this->mysqli->query($query);
	    	echo json_encode($result->fetch_all(MYSQLI_ASSOC));	    	
	    }
	}
?>