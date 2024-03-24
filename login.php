<?php
    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "proiect_PA";
    $conn = new mysqli($server, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexiune eșuată: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $email = $_GET["email"];
        $parola = $_GET["parola"];
        $sql = "SELECT * FROM user WHERE mail='$email' AND parola='$parola'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $r1 = $row["nume"];
            $r2 = $row["prenume"];
            echo "<p id=\"reusit\"><b>Autentificare reușită! Bine ai venit, <span id=\"reusit1\"><br><br>$r1 $r2</span>  !</b></p>";
            $_SESSION["utilizator_autentificat"] = true;
            $_SESSION["id_utilizator"] = $row["id"];
            echo "<a href=\"index.php\" id=\"link\"><p id=\"revino\">Revino la pagina principala</p></a>";
        } else {
            echo "<p id=\"reusit2\"><b>Autentificare eșuată. Verifică <span id=\"reusit3\">email-ul</span> și  <span id=\"reusit3\">parola</span>.<p>";
        }
        
    }
    
?>

<style>
    #reusit{
        margin-top: 200px;
        font-size: xx-large;
    }

    #reusit3{
        color: red;
    }

    #reusit1{
        font-size: xx-large;
        color:#3E2B84;;
        
    }
#reusit2{
    font-size: xx-large;
        color:#3E2B84;
        margin-top: 400px;
}
    #link{
    text-decoration: none;
    color: black;
    width: 50px;
    }


    #revino{
        font-size: xx-large;
        
    }

    #reusit,#revino,#reusit1,#reusit2{
        text-align: center;
    }

    #link:hover{
        color:  rgb(14, 130, 224)
    }
    </style>