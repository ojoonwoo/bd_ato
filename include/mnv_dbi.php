<?
/*
*
*	DB 연결 정보
*
*/
class mnv_dbi
{
	var $my_db;
	public function Connect_MySQL()
	{
		$my_db = new mysqli("localhost", "root", "alslqj~1", "bd_ato");

		if (mysqli_connect_error()) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		}

		mysqli_query ($my_db,"set names utf8");

		return $my_db;
	}
}