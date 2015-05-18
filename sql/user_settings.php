<?php
/**
 * Created by PhpStorm.
 * User: eeglit
 * Date: 18.05.2015
 * Time: 11:41
 */
if ($_POST && $_POST['submit'] === "Update") {
    session_start();
    require_once(__DIR__."/db_connection.php");
    $username_old = $_SESSION["username"];
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    if ($username_old !== $username) {
        $sqlFindUser = "SELECT * FROM users WHERE username='" . $username . "'";
        $resultUser = $conn->query($sqlFindUser);
        $User = $resultUser->fetch_assoc();
        if ($User['username'] == $username) {
            $_SESSION["bad"] = " Der Username $username ist bereits vergeben";
            header( 'Location: ../index.php?site=settings' );
            return;
        }
    }
    $plz = $_POST['plz'];
    $guthaben = $_POST['guthaben'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $vorname = mysqli_real_escape_string($conn, $_POST['vorname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
    $ort = mysqli_real_escape_string($conn, $_POST['ort']);
    $conn->query("UPDATE users SET
                    username='".$username."',
                    plz='".$plz."',
                    guthaben='".$guthaben."',
                    name='".$name."',
                    vorname='".$vorname."',
                    email='".$email."',
                    adresse='".$adresse."',
                    ort='".$ort."'
                    WHERE username='".$username_old."'");
    if ($conn->error) {
        $_SESSION["good"] = "Es ist ein Datenbankfehler aufgetreten";
        header( 'Location: ../index.php?site=settings' );
    } else {
        $_SESSION["good"] = "Deine Daten wurden aktuallisiert";
        $_SESSION["username"] = $username;
        header( 'Location: ../index.php' );
    }
} else {
    require_once(__DIR__.'/db_connection.php');
    $sqlUser = "SELECT * FROM users WHERE username = '".$_SESSION["username"]."'";
    $resultUser = $conn->query($sqlUser);
    $user = $resultUser->fetch_assoc();
    $username = $user["username"];
    $email = $user["email"];
    $password = $user["password"];
    $name = $user["name"];
    $vorname = $user["vorname"];
    $adresse = $user["adresse"];
    $plz = $user["plz"];
    $ort = $user["ort"];
    $guthaben = $user["guthaben"];
    $password = "";
}