<?php

    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "proiect_PA";
    $conn = new mysqli($server, $username, $password, $database); 

    $sql = "SELECT * FROM programari WHERE id_masina = ". $_GET["etajj"];
    $result = $conn->query($sql);
    $progamareExistenta = 1;
    $dateObject = DateTime::createFromFormat('d/m/Y H:i', $_GET["interval"]);
    $timestamp = $dateObject->getTimestamp();
    $dateFormatted = date("Y-m-d H:i:s", $timestamp);
    while ($row = $result->fetch_assoc()) {
        if ($_GET["interval"] != "") {
            if (strtotime($row["data"]) <= strtotime($dateFormatted) && strtotime($dateFormatted) <= strtotime($row["data"]) + intval($row["durata"]) * 60)
                $progamareExistenta = 0;
            if (strtotime($dateFormatted) <= strtotime($row["data"]) && strtotime($row["data"]) <= strtotime($dateFormatted) + intval($_GET["durataa"]) * 60)
                $progamareExistenta = 0;
        }
    }
    $sql = "SELECT * FROM programari WHERE id_user = ". $_SESSION["id_utilizator"];
    $result = $conn->query($sql);
    $preaMulteProgramari = $result->num_rows;
    if($_GET["interval"] != "" && isset($_GET["durataa"]) && isset($_GET["etajj"]) && $_SESSION["utilizator_autentificat"] && $progamareExistenta == 1 && $preaMulteProgramari < 2){
        
        $sql = "INSERT INTO programari (`data`, `durata`, `id_user`, `id_masina`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $dateInterval = $_GET["interval"];
        

        if ($stmt && $dateInterval) {
            $dateObject = DateTime::createFromFormat('d/m/Y H:i', $dateInterval);
            $timestamp = $dateObject->getTimestamp();
            $dateFormatted = date("Y-m-d H:i:s", $timestamp);
            $stmt->bind_param("siii", $dateFormatted, $_GET["durataa"], $_SESSION["id_utilizator"], $_GET["etajj"]);
            $stmt->execute();
            if ($stmt->affected_rows > 0) {
                echo "<p class=\"confirmare\" id=\"cinci\"><b>Programarea a fost inregistata cu succes!</b></p>";
            } else {
                echo "<p>Eroare: Nu s-au putut introduce datele.</p>";
            }
            $stmt->close();
            } 
    }
    else if(!$_SESSION["utilizator_autentificat"])
        echo "<p id=\"unu\"><b>Trebuie sa te autentifici pentru a inregistra programari !</p>";
    else if($progamareExistenta == 0)
        echo "<p id=\"doi\"><b>O alta programare se afla in aceasta perioada, va rugam selectati alta data si ora!</p>";
    else if($preaMulteProgramari >=2){
        echo "<p id=\"trei\"><b>Poti avea maxim 2 programari inregistrate.</b></p>";
    }
    else
        echo "<p>Datele introduse sunt incorecte !</p>";
    echo "<p id=\"patru\"><a href=\"index.php\" id=\"sase_noua\"=> Inapoi la pagina principala</a></p>";

?>
<style>

    #cinci{
        text-align: center;
    font-size: x-large;
    margin-top: 150px
    }

    #doi{
        text-align: center;
    font-size: x-large;
    margin-top: 150px;
    color: red;
    }
#trei{
    text-align: center;
font-size: x-large;
margin-top: 150px

}

#patru{
    text-align: center;
    font-size: x-large;
    color: black;
}

#sase_noua:hover{
    background-color: #3E2B84;
}

#sase_noua{
    text-decoration: none;
    text-align: center;
    border: 1px solid black;
    padding: 10px 15px 10px 15px;
    background-color: #291477;
    color: white;
    border-radius: 40px;
}
    </style>