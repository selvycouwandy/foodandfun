<?php
/* helper for like button function by I.K.A */

defined('BASEPATH') OR exit('No direct script access allowed');


// ------------------------------------------------------------------------

if ( ! function_exists('get_real_ip'))
{
function get_real_ip()
	{
	    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
	    {
	      $ip=$_SERVER['HTTP_CLIENT_IP'];
	    }
	    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
	    {
	      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
	    else
	    {
	      $ip=$_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
    	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('check_ip'))
{
	function check_ip($item_id,$ip) {
		//$query = mysql_query("SELECT * FROM likes WHERE item_id='$item_id' AND ip='$ip' LIMIT 1");
		//$likes = mysql_num_rows($query);
		
		$con=mysqli_connect("localhost","root","","foodandfun");
		$query = mysqli_query($con,"SELECT * FROM likes WHERE item_id='$item_id' AND ip='$ip' LIMIT 1");
		$likes = mysqli_num_rows($query);
		return $likes;
	}
}


// ------------------------------------------------------------------------

if ( ! function_exists('likes'))
{

	function likes($item_id) {
		//$query = mysql_query("SELECT * FROM likes WHERE item_id='$item_id'");
		//$likes = mysql_num_rows($query);
		
		$con=mysqli_connect("localhost","root","","foodandfun");
		$query = mysqli_query($con,"SELECT * FROM likes WHERE item_id='$item_id'");
		$likes = mysqli_num_rows($query);
		return $likes;
	}
}

// ------------------------------------------------------------------------