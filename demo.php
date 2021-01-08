<?php
 header("Content-Type: application/json; charset=UTF-8");
 $str = file_get_contents('C:\wamp\www\TEJAS\gantt-master-edit\data.json');
 $arr = json_decode($str, true);

// $arr= array(0=>array(
// 					"start"=> "2018-10-01",
// 					"end"=> "2018-10-10",
// 					"name"=>  "Redesign website",
// 					"id"=> "Task 0",
// 					"progress"=>  "91"
// 				),
// 	1=>array(
// 					"start"=>  "2018-10-03",
// 					"end"=>  "2018-10-10",
// 					"name"=>  "Write new content",
// 					"id"=>  "Task 1",
// 					"progress"=>  "55",
// 					"dependencies"=>  "Task 0"
// 				),
// 	2=>array(
// 					"start"=> "2018-10-04",
// 					"end"=>  "2018-10-08",
// 					"name"=>  "Apply new styles",
// 					"id"=>  "Task 2",
// 					"progress"=>  "40",
// 					"dependencies"=>  "Task 1"
// 				),
// 	3=>array(
// 					"start"=>  "2018-10-08",
// 					"end"=> "2018-10-09",
// 					"name"=>  "Review",
// 					"id"=>  "Task 3",
// 					"progress"=>  "20",
// 					"dependencies"=>  "Task 2"
// 				),
// 	4=>array(
// 					"start"=> "2018-10-08",
// 					"end"=> "2018-10-10",
// 					"name"=> "Deploy",
// 					"id"=>"Task 4",
// 					"progress"=>"50",
// 					"dependencies"=> "Task 2"
// 				),
// 	5=>array(
// 					"start"=> "2018-10-11",
// 					"end"=> "2018-10-13",
// 					"name"=> "Go live!",
// 					"id"=>"Task 5",
// 					"progress"=>"10",
// 					"dependencies"=> "Task 4"
// 				));

echo json_encode($arr) ;

?> 