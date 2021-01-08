<?php
$id=$_POST['task_id'];
$start_date=$_POST['s_date'];
$end_date=$_POST['e_date'];

if(isset($id)){
    if(file_exists('data.json')){
        $str = file_get_contents('data.json');
        $json_arr = json_decode($str, true);
        foreach ($json_arr as $key => $value) {
            if($value['id']==$id){
                $json_arr[$key]['start'] = $start_date;
                $json_arr[$key]['end'] = $end_date;
                file_put_contents('data.json', json_encode($json_arr));
                echo "Dates Updated Successfully";
            }
            // echo $value["id"] . ", " . $value["end"] . "<br>";
        }
        
    }
    else{
        echo 'Json File not found => Update Failed!!!';
    }
}

 ?>