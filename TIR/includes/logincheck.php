<?php include '../../../includes/session.php' ?>
<?php
if(isset($_SESSION["prihlasenyuzivatel"]) == true){

}else{
    echo'<h1>Na toto nemáš oprávnenie </h1>';
    session_unset();
    session_destroy();
    die;
}
?>
<?php //include '../../../includes/db.php' ?>
<?php
//$sql = "SELECT login, heslo FROM uzivatelia WHERE login ='". $_SESSION["name"]."' AND heslo ='". md5($_SESSION["password"])."'";
//$result = $conn->query($sql);
//$row = $result->fetch_assoc();
//if($row['login'] != $_SESSION["name"] && $row['heslo'] != $_SESSION["password"])
//{
//    echo'<h1>Na toto nemáš oprávnenie </h1>';
//    die;
//
//}
//else{
//}
//
//?>