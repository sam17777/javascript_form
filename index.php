<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles">
    <title>Document</title>
</head>
<body>
<head>
    <style>
    fieldset {
    background-color: papayawhip;
    }

    legend {
    
    background-color: gray; 
    color: white;
    padding: 5px 10px;
    }

    input {
    margin: 5px;
    }
    </style>
</head>
    <body>

    <form action="/action_page.php" method="POST">
        
    <fieldset>
            <legend>Form:</legend>
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday"><br><br>
            <input type="submit" value="Save Record" name="submit">
        </fieldset>
    </form>

    </body>
</html>

</html>