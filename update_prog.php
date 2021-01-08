<?php
$id=$_POST['task_id'];
$progress=$_POST['progress'];


if(isset($id)){
    if(file_exists('data.json')){
        $str = file_get_contents('data.json');
        $json_arr = json_decode($str, true);
        foreach ($json_arr as $key => $value) {
            if($value['id']==$id){
                $json_arr[$key]['progress'] = $progress;
                file_put_contents('data.json', json_encode($json_arr));
                echo "progress Updated Successfully";
            }
            // echo $value["id"] . ", " . $value["end"] . "<br>";
        }
        
    }
    else{
        echo 'Json File not found => Update Failed!!!';
    }
}

 ?>