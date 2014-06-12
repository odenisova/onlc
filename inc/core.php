<?
include_once($_SERVER['DOCUMENT_ROOT']."/inc/config.php");
//request for search
if (isset ($_GET['search']) && ($_GET['search'] !=""))
{
	$string = $_GET['search'];
	$search = new implementation();
	$search -> search($string);
}
//else return all data
else
{
	$all = new implementation();
	$all-> get_all();	
}
?>