<?php
/*
*@author  Johnson
*/

class Response{
	/*
	*按json方式输出通信数据
	*@param integer $code 状态码
	*@param string $message 提示信息
	*@param array $code 数据
	*return string
	*/

	public static function json($code,$message='',$data=array())
	{
		# code...
		if (!is_numeric($code)) {
			# code...
			return '';
		}
		$result = array(
				'code' => $code,
				'message' => $message,
				'data' => $data
			);
		echo json_encode($result);
		exit;
	}
	#json end 方法结束


	/*
	*按xml方式输出通信数据
	*@param integer $code 状态码
	*@param string $message 提示信息
	*@param array $code 数据
	*return string
	*/

	public static function xml($code,$message='',$data=array())
	{
		# code...
		if (!is_numeric($code)) {
			# code...
			return '';
		}
		$result = array(
				'code' => $code,
				'message' => $message,
				'data' => $data
			);
		header("Content-Type:text/xml");
		$xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
		$xml.="<root>\n";
		$xml.=self::xmlToEncode($result);
		$xml.="</root>";
		echo $xml; 
	}
	public static function xmlToEncode($data){
		$xml = $attr = '';
		foreach ($data as $key => $value) {
			# code...
			if (is_numeric($key)) {
				# code...
				$attr = " id='{$key}'";
				$key = "item";
			}
			$xml.="<{$key}{$attr}>";
			$xml.=is_array($value)?self::xmlToEncode($value):$value;
			$xml.="</{$key}>\n";
		}
		return $xml;
	}
	#xml end方法结束
}



/*
$arr = array("id"=>1,"name"=>"john","vip"=>array(1,2,3),"type"=>array("apple","banana","vagetable"));
Response::xml(200,"成功",$arr);
?>

*/