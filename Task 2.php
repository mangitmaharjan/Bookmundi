<?php
    $data=array(
        array("ID"=>"1","Price"=>100),
        array("ID"=>"2","Price"=>200),
        array("ID"=>"3","Price"=>900),
        array("ID"=>"4","Price"=>37),
        array("ID"=>"5","Price"=>100),
    );
    $thresshold = 200;   

    function gentListOfIDS($data, $thresshold){
        $filtered_array = array_filter($data, function ($var) use ($thresshold) {
            return ($var['Price'] >= $thresshold);
        });
        echo "<ul>";
        foreach($filtered_array as $d){
            echo "<li>";
            echo"ID: ". $d['ID']; 
            echo " ";
            echo"Price: ". $d['Price'];
            echo "</li>";

        }
        echo "</ul>";
    }
    gentListOfIDS($data, $thresshold);


    function getSumOfFilteredData($data, $thresshold){
        $filtered_array = array_filter($data, function ($var) use ($thresshold) {
            return ($var['Price'] >= $thresshold);
        });
        $sum = array_sum(array_column($filtered_array, 'Price'));
        echo "SUM: ".$sum;
    }
    getSumOfFilteredData($data, $thresshold);
?>