<!DOCTYPE html>
<html>
<head>
	<title>Art Media Group | Реклама на радио в Нальчике и КБР</title>	
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />    
</head>


<?php


function getcount($arg_1)
{
	$listeners = 0 ;
	
if($arg_1==1){
  							$data = json_decode(file_get_contents("http://a3.radioheart.ru:8039/json.xsl?mount=/RH888"));
 }	

if($arg_1==3){
  							$data = json_decode(file_get_contents("http://a3.radioheart.ru:8052/json.xsl?mount=/RH931"));
 }	
 
if($arg_1==2){
  							$data = json_decode(file_get_contents("http://a6.radioheart.ru:8035/json.xsl?mount=/RH930"));
 }	
 
if($arg_1==4){
  							$data = json_decode(file_get_contents("http://a6.radioheart.ru:8047/json.xsl?mount=/RH932"));
 }	
  
  		
  		  							
  							
                            if (!count($data->mounts) || strlen($data->mounts[0]->server_name) < 2) {
                                //NONSTOP
                                
                               if($arg_1==1){
                                $data = json_decode(file_get_contents("http://a3.radioheart.ru:8039/json.xsl?mount=/nonstop"));
                           		}
                           		
                           		   if($arg_1==3){
                                $data = json_decode(file_get_contents("http://a3.radioheart.ru:8052/json.xsl?mount=/nonstop"));
                           		}
                           		
                           		   if($arg_1==2){
                                $data = json_decode(file_get_contents("http://a6.radioheart.ru:8035/json.xsl?mount=/nonstop"));
                           		}
                           		
                           		   if($arg_1==4){
                                $data = json_decode(file_get_contents("http://a6.radioheart.ru:8047/json.xsl?mount=/nonstop"));
                           		}
                           
                            }
                            $stream_title = $data->mounts[0]->server_name;
                            //Если сайт в кодировке windows-1251 (cp-1251), раскомментируйте следующую строчку
                            //$stream_title = iconv("UTF-8", "WINDOWS-1251", $stream_title);
                            $stream_description = $data->mounts[0]->description;
                            $listeners = $data->mounts[0]->listeners;




    return $listeners;
}

?>


<body>

<?php
 $listeners = getcount(1);
 echo "Дорожное радио : ".$listeners."<br />";
 
 $listeners = getcount(2);
 echo "Ретро FM: ".$listeners."<br />";
 
 
 $listeners = getcount(3);
 echo "Русское Радио: ".$listeners."<br />";
 
 
 $listeners = getcount(4);
 echo "Energy FM: ".$listeners."<br />";
 
?>

</body>
</html>


