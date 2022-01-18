<?php include '../../../includes/db.php' ?>
<?php include '../../assets/hlavicka.php' ?>
<?php
    $inputname = $_POST['name'];
    $inputpassword = $_POST['password'];
    $name = [];
    $prihlasenyuzivazel = false;
    $riadkysuboru = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $sql = "SELECT login, heslo, rola FROM uzivatelia WHERE login ='". $inputname."' AND heslo ='". md5($inputpassword)."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

        if($inputname == $row['login'] && md5($inputpassword) == $row['heslo']){
            $_SESSION["name"] = $inputname;
            $_SESSION["password"] = $inputpassword;
            $_SESSION["post"] = $post;
            $_SESSION["prihlasenyuzivatel"] = true;
            header('Location: ../domov');
            die();
}
    
    // foreach ($riadkysuboru as $riadok)
    // {
    //     if($inputname == $name && $inputpassword == $password){
    //         $_SESSION["name"] = $inputname;
    //         $_SESSION["password"] = $inputpassword;
    //         $_SESSION["post"] = $post;
    //         $prihlasenyuzivazel = true;
    //         header('Location: ../domov');
    //         die();
    //     }
    // }
    if($prihlasenyuzivazel == false){
        echo '<p style="color: red">Nesprávne meno alebo heslo</p>';
        echo '<a href="index.php">Naspäť</a>';
    }
?>
<?php include '../../assets/paticka.php' ?>