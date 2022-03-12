<?php

/* GENERATOR */

function unique($length=12){

    $pureid = substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),0,$length); // Generate a random id-class (pure)
    return wordwrap($pureid, 4, '-', true); // break the string

}

/* GENERATOR / */

/* EXAMPLE - Unique Class & Id */

$uniqueClass = unique(); // Get a random class Name

$uniqueId = unique(); // Get a random id Name

/* EXAMPLES / */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Unique | Id - ClassName | Generator</title>

    <style>

    /* GENERAL CSS */

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Open Sans', sans-serif;
        color: #50505a;
    }

    body{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
        width: 100%;
    }

    a{
        text-decoration: none;
        color: #000;
    }

    /* GENERAL CSS / */

    /* UNIQUE CLASS - ID STYLİNG */

    .<?php echo $uniqueClass; ?>{

        width: 90%;
        background-color: #f1f1f1;
        padding: 10px;
        margin: 10px;
        border: 1px solid #ccc;
        text-align: center;
        line-height: 25px;

    }

    #<?php echo $uniqueId; ?>{

        width: 90%;
        background-color: #f1f1f1;
        padding: 10px;
        margin: 10px;
        border: 1px solid #ccc;
        text-align: center;
        line-height: 25px;

    }

    /* UNIQUE CLASS - ID STYLİNG / */

    </style>

</head>
<body>
    


    <div class="<?php echo $uniqueClass; ?>">

        <h4>Hi I Have a Unique Class and I created by <a href="https://github.com/coderdal">CodErdal</a> </h4>
        <p>
            My ClassName are: <?php echo $uniqueClass; ?>
        </p>

    </div>

    <div id="<?php echo $uniqueId; ?>">

        <h4>Hey I Have a Unique Id and I created by <a href="https://github.com/coderdal">CodErdal</a> </h4>
        <p>
            My id are: <?php echo $uniqueId; ?>
        </p>

    </div>



</body>
</html>