<?php
$namerr= "";
if (isset ($_REQUEST["Submit"]))
{
    if(isset($_FILES["myfile"]))
    
        $file=$_FILES["myfile"];
        $name=$file["name"];
        $size=$file["size"];
        $location=$file["tmp_name"];
        $location_file=$location . basename($name);
    
    
        if($size>2048000 or $location_file!="jpg")
        
            echo "The file is too big or the format is not correct...";
        
        else
        {
            move_uploaded_file($_FILES ["myfile"]["tmp_name"], "../files".$_FILES["myfile"]["name"])
        }
  if (move_uploaded_file($_FILES ["myfile"]["tmp_name"], "../files".$_FILES["myfile"]["name"]))
    {
      echo "file uploaded";
    }
  else
     {
       echo "cant upload";
     }
}
?>