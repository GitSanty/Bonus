<?php
 include './contenu.php';

$Value_TextBox ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Value_TextBox = $_POST["NewTask"];

    if ($Value_TextBox != ""){

        Add_Item_Json($Value_TextBox);

    }
 
 //echo $Value_TextBox;

    foreach( $_POST as $value )
    {

        //echo "<br>" . $value;
        $ID =  substr($value, 0, 4);

       

        Update_json($ID);

    
          
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todolist</title>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>   -->
    

       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
          <!--  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> -->
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="container">
<div class="row main">
    <div class="main-login main-center">

        <h5>Outil de gestion de tâches basique et fiable</h5>

       <form  id="Form_tasks" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"> 
      
         
            <div id="Afaire">
                <h4>A FAIRE</h4>
                <br>
                <div id="sortable">
               <!--  <div class="DragContainer" id="DragContainer1"> -->
                <?php
                  Get_Afaire();

                ?>
                </div>
              <!--   </div> -->
                <!-- <button type="submit" class="btn btn-primary">Enregistrer</button> -->
                <br><br>
                <h4>ARCHIVE</h4>

                <?php
                Get_Archive();
                ?>

            </div>

            <div id="Archive">
            <br>
                <h4>Ajouter une tâche</h4>
                <input type="text" name="NewTask" placeholder="La tâche à effectuer" class="form-control" >
                <br>
                <button type="submit" class="btn btn-primary">Ajouter</button>

            </div>
         
        </form>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="./app.js"></script>
</body>

</html>