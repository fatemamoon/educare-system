<?php 

	$formdata = array(
        
	    'Notice'=>$_POST["notice"]
    );
    $existingdata = file_get_contents('data.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[0] =$formdata;
	$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
    if(isset($_POST["submit"]))
    {
        if(!empty($_POST["notice"]))
        {
            if(file_put_contents("data.json", $jsondata)) 
            {              
                echo  "Data successfully saved <br>";
            }
            else
            {
               echo "no data saved";
            }
        }
        else
        {
            echo "error1";
        }
    }
    else
    {
        echo "error2";
    }

	// echo "my value: ".$mydata[1]->lastName;
	// foreach($mydata as $myobject)
	// {
    //     foreach($myobject as $key=>$value)
    //     {
    //         echo "your ".$key." is ".$value."<br>";
    //     } 
    // }
?>