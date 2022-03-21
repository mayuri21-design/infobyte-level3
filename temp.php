<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="./calc.css" rel="stylesheet">
</head>
<body>

<div class=" d-flex div_content card container shadow-lg p-3 mb-5 bg-white rounded  mx-auto">
<h3 style="color:white;"class="mx-auto bg-success p-2">convertor</h3>
       <form method="POST">
       <input class="input_align" type="text" name="first"   placeholder="Enter Temp"/>
        <select  class="form-select form-select-lg mb-3 mt-5 " name="op" > 
            <option value="celsius">celsius</option>
            <option value="faren">Farenheit</option>
        </select>
        <div> 
            <input style="color:white" type="submit" name="convert" value="convert" class="mx-auto bg-success mb-2 p-1">
        </div>
       </form>
     <div>
    <h4><p style="text-align:center" class="bg-warning mx-auto p-1">
   <?php
    if (isset($_POST['convert'])) {
        $f_val=$_POST['first'];
    
        $operation=$_POST['op'];
        switch ($operation) {
        case "celsius": $temp=($f_val-32)*5/9;
                    echo "The Farenheit to celsius temp is"." " .$temp;
                    break;

        case "faren": $temp=(($f_val*9)/5+32);
                    echo "The celsius to farenheit temp is" ." ".$temp;
                    break;

        default:    echo "You enter wrong choice";

    }
    }
    ?>
 </p></h4>
</div>
</div> 
  
    </div>
    <div>

</body>
</html>