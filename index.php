<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>imagen upload</title>
</head>
<body>
    <div class="conten">
    <center>
        <h1> upload / insert imagenes</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <label for="">perfil</label><br>
        <input type="file" name ="image" id="imag"><br>
        <label for="">Enter UserName:</label><br>
        <input type="text" name ="username" placeholder="Enter Nombre Usuario"><br>
        <label for="">Enter designation:</label><br>
        <input type="text" name ="designation" placeholder=" Enter Designacion""><br>
        <input type="submit" name ="upload" value="Subir imagen"><br>
    </form>
    </center>
    </div>
</body>
</html>

    <?php

        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,'img');
        if (isset($_POST['upload']))
    {
        $file =addcslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $username =$_POST['username'];
        $designation = $_POST[''];

        $query = "INSERT INTO `empimage`(`image`,`username`,`designation`)VALUES('$file','$username','$designation')";
        $query_run  =  mysqli_query($connection,$query);


        if($query_run)
        {
            
            echo '<script type = "text/javascript">alert("imagen upload")</script>';
        }
            
        else   '<script type = "text/javascript">alert("imagen  not upload")</script>';
    }
    
    
    ?>


