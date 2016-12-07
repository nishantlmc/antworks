<?
defined('BASEPATH') OR exit('No direct script access allowed');

// ------------------------------------------------------------------------

if ( ! function_exists('valid_email'))
{
	/**
	 * Validate email address
	 *
	 * @deprecated	3.0.0	Use PHP's filter_var() instead
	 * @param	string	$email
	 * @return	bool
	 */
	function valid_email($email)
	{
		return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
	}
}

// ------------------------------------------------------------------------
if ( ! function_exists('unique_email'))
{
	/**
	 * Validate email address
	 *
	 * @deprecated	3.0.0	Use PHP's filter_var() instead
	 * @param	string	$email
	 * @return	bool
	 */
	function unique_email($str,$email)
	{
		$arr = explode(".",$str);
		$table = $arr[0];
		$field = $arr[1];
		$ci = & get_instance();
		$ci->load->database();
		$query = $ci->db->query("select ".$field." from ".$table." where ".$field."='$email'");
		$res = $query->result();
		if($res)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}

if(!function_exists('getNotificationHtml'))
{
	function getNotificationHtml()
	{
		$ci = & get_instance();
		if( $ci->session->flashdata('notification'))
		{
			$notificationData = $ci->session->flashdata('notification');
			if( $notificationData['error'] == 0 )
			{
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$notificationData['message'].'</div>';
			}
			elseif( $notificationData['error'] == 1 )
			{
				echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$notificationData['message'].'</div>';
			}
		}
		if( $ci->session->flashdata('validation_errors'))
		{
			$errorData = $ci->session->flashdata('validation_errors');
			if($errorData['error'] == 1)
			{
				echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
				foreach($errorData['message'] as $key => $value)
				{
					echo $value."<br>";
				}
				echo '</div>';
			}
		}
	}
}