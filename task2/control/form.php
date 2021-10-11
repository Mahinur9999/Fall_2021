<?php 	   	 

	 if($_SERVER["REQUEST_METHOD"]=="POST")
	    {
		    $lan="";
				  
			 if(isset($_REQUEST["java"]))
				{
				  $lan= $_REQUEST["java"];
				}
			if(isset($_REQUEST["php"]))
				{ 
				  $lan= $_REQUEST["php"];
				}
			if(isset($_REQUEST["c"]))
				{
				  $lan= $_REQUEST["c"];
				}

		
		  $formdata = array(
	      'fstname'=> $_POST["fstname"],
	      'lstname'=> $_POST["lstname"],
		  'age'=>$_POST["age"],
		  'Designation'=>$_POST["Designation"],
		  'email'=>$_POST["email"],
		  'password'=>$_POST["password"],
		  'image'=>$_FILES["filetoupload"]["tmp_name"],

	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
      
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("data.json", $jsondata)) 
	   {
	        echo "Data successfully saved <br>";
	   }
	   else 
	        echo "no data saved";

       $data = file_get_contents("data.json");
	   $mydata = json_decode($data);

	   }

?>