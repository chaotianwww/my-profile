<?php /**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/1/2
 * Time: 21:19
 */


	function success( $data = [ ] , $header = [ ] )
	{
		return response( [ 'code' => 0 , 'data' => $data ] , 200 , $header );
	}


	function failed( $msg = "no params error" , $header = [ ] )
	{
		return response( [ 'code' => 1 , 'msg' => $msg ] , 200 , $header );
	}