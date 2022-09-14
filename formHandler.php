<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php var_dump($_POST); ?>
    </pre>
    
    <?php
    
        // Checking whether required fields are filled after sending the form is too late but here we go..
        
        $isEmpty = empty($_POST['name']);

        echo "Nimi: ", empty($_POST['name']) ? "Name field is empty, you need to give your name.<br>" : $_POST['name'] . "<br>";
        echo "Email: ", empty($_POST['email']) ? "Email field is empty, you need to give your email.<br>" : $_POST['email'] . "<br>";
        echo "Password: ", empty($_POST['password']) ? "Password field is empty, you need to give your password.<br>" : $_POST['password'] . "<br>";
        echo "Gender: ", $_POST['gender'] . "<br>";
        echo "County: ", $_POST['county'] . "<br>";
        echo "Pets: ", $_POST['pets'] . "<br>";
        echo "Description: ", $_POST['description'] . "<br>";
        echo "Organization: ", $_POST['organization'] . "<br>";


        // !isset($_POST['email'])
   
        // !isset($_POST['password'])
    ?>

</body>
</html>
