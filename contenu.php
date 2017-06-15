<?php

function Get_Afaire()
{

    $data = file_get_contents("todo.json");
    $json = json_decode($data, true);

    
    foreach ($json[Table] as $key) {
        //echo $key[task];
        //echo "<br>";
        if($key[estate] == "A FAIRE"){
         
        echo "<div class='ui-state-default' id='draggable{$key[ID]}' >";
        //echo $key[task] . "<br>";
        echo "<label>";
         //echo "<input type='checkbox' name='{$key[ID]}' class='box' value='{$key[ID]}{$key[estate]}'  id='{$key[ID]}'>";
        echo "<input type='checkbox' name='{$key[ID]}' value='{$key[ID]}{$key[estate]}'  id='{$key[ID]}'>";
        echo "</label>";
        echo "<label for='{$key[ID]}' class='cols-sm-2 control-label' >'<span></span>$key[task]</label>";
        echo "</div>";
         
//onchange="document.getElementById('formName').submit()"
        }

    }
}

function Get_Archive()
{

    $data = file_get_contents("todo.json");
    $json = json_decode($data, true);

    foreach ($json[Table] as $key) {
        //echo $key[task];
        //echo "<br>";
        if($key[estate] == "ARCHIVE"){
            echo "<div id='strike' >";
            //echo $key[task] . "<br>";
            echo "<label>";
            echo "<input type='checkbox' name='{$key[ID]}' disabled='true' checked='true' value='{$key[estate]}' id='{$key[ID]}'>";
            echo "</label>";
            echo "<label for='{$key[ID]}' id='decoLine' >'<span></span>$key[task]</label>";
            echo "</div>";
            echo "<br>";

        }

    }
}



function Update_json($id)
{


   $data = file_get_contents("todo.json");
    $json = json_decode($data, true);

//echo print_r($json);
 


 foreach ($json["Table"] as $key => $value) {

    //echo "value in for " . $value["ID"];
    if ($value['ID'] == $id) {

       // echo "ID find " . $json["Table"][$key]['estate'];
        $json["Table"][$key]['estate'] = "ARCHIVE";
    }
}
 


file_put_contents('todo.json', json_encode($json));

}


function Add_Item_Json($task){

//echo "text box " . $task;

$data = file_get_contents("todo.json");
$json = json_decode($data, true);

array_push($json['Table'], array("ID"=>"0009", "task"=>$task, "estate"=>"A FAIRE"));



file_put_contents('todo.json', json_encode($json));

}