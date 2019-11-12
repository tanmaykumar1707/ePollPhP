<?php
$filepath= realpath(dirname(__FILE__));
include($filepath."../../database/link.php");
    
class poll
{
    private $db;
    
    public function __construct()
	{
		$this->db = new Database();	// class available in link.php file of database folder

	}

	public function insert_data($data){
			$ip=$this->get_client_ip();
			$q1=	$data['Q_1'];
			$q2=	$data['Q_2'];
			$q3=	$data['Q_3'];
			$q4=	$data['Q_3'];
			$q4=	$data['Q_4'];
			$q5=	$data['Q_5'];
			$q6=	$data['Q_6'];
			$q7=	$data['Q_7'];
			$q8=	$data['Q_8'];
			$q9=	$data['Q_9'];
			$q10=	$data['Q_10'];
			$q11=	$data['Q_11'];
			$query = "INSERT into poll (poll_ip,poll_1,poll_2,poll_3,poll_4,poll_5,poll_6,poll_7,poll_8,poll_9,poll_10,poll_11) values('$ip','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11')";
			$result= $this->db->insert($query);
			if($result)
				return true;
			else
				return false;	
	}



	public function get_percentage($quest_no,$option)
	{
	
		$query1 = "select * from poll";
		$result1 = $this->db->select($query1);
		if($result1)
		{ 	

			$total = $result1->num_rows;

				$query = "select * from poll where poll_".$quest_no."='$option'";
		$result= $this->db->select($query);
		if($result)
		{
			$poll = $result->num_rows;
			
		}else
            return 0;

		$percent = round(($poll/$total)*100);
		return $percent;

		} 
        else 
            return 0;

	}


	public function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


public function check_ip()
{
		$ip = $this->get_client_ip();
		$query = "select * from poll where poll_ip='$ip'";
		$result=$this->db->select($query);
		if($result)
			return true;
		else
			return false;

}

public function total(){
	$query = "select * from poll";
	$result = $this->db->select($query);
	if($result)
		return $result->num_rows;
	else 
		return 0;
}

public function test(){
    $query = "select  * from nit_paytm";
    	$result = $this->db->select($query);
    	return $result;
    
}


}