<?php include '../../../includes/logincheck.php'?>
<?php include '../../../includes/db.php'?>
<?php include '../../assets/hlavicka.php' ?>
<?php include '../../assets/sidemenu.php' ?>
<div class="w-75 p-3 col-xs-6">
    <?php
        // $suborPrispevky = fopen("../../../public/theme/forum/prispevky.csv", "r");
        // $prispevky = array();
        // while ($prispevok = fgetcsv($suborPrispevky, 1000, ';')) {
        //     $prispevky[] = $prispevok;
        // }
        // if($_SESSION["post"] == "admin"){
        //     foreach($prispevky as $prispevok){
        //         echo  ' <h4>' . $prispevok[1].  '</h4> ';
        //         $datum = strtotime($prispevok[3]);
        //         $formatdatum = date("Y-m-d H:i:s", $datum);
        //         echo '<small>Odoslané: ' . $formatdatum . '</small> <br>';
        //         echo '<p>'. $prispevok[2]. '</p>';
        //         echo '<a href="delete.php?id='. $prispevok[0]. ';'.  $prispevok[1]. ';'. $prispevok[2]. '" style="color: red;">Delete</a>';
        //         echo '<hr>';
        // }
        // }else{
        //     foreach($prispevky as $prispevok){
        //         echo  ' <h4>' . $prispevok[1].  '</h4> ';
        //         $datum = strtotime($prispevok[3]);
        //         $formatdatum = date("Y-m-d H:i:s", $datum);
        //         echo '<small>Odoslané: ' . $formatdatum . '</small> <br>';
        //         echo '<p>'. $prispevok[2]. '</p>';
        //         echo '<a href="#" id="'.$myBtn.'">Delete</a>';
        //         $myBtn = $myByn + 1;
        //         echo '<hr>';
        // }
        // }


    $sql = "SELECT meno, prispevok, cas FROM prispevky";
    $result = $conn->query($sql);

    echo '<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Meno</th>
        <th scope="col">Správa</th>
        <th scope="col">Čas</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    '; 
    while($row = $result->fetch_assoc()) {
      echo '<tr>';
        echo "<td><h4> " . $row["meno"]. "</h4></td>";
        echo "<td><p>" . $row["prispevok"]. "</p></td>";
        echo "<td><small>Odoslané: ". $row["cas"]."</small></td>";
        echo '<td><button type="button" data-bs-moje="'.$row["prispevok"].'" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        Delete
      </button></th>
      '; echo '
      </tr>
    ';
    }
    ?>
    </tbody>
  </table>
    <div id="myModal" class="modal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Naozaj chcete zmazať článok?</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="body">Test</p>
      </div>
      <div class="modal-footer">
        <button id="zmazat" type="button" class="btn btn-danger" >Zmazať</button>
      </div>
    </div>
  </div>
        
    <script>
        var modal = document.getElementById("myModal");

        var zmazat = document.getElementById("zmazat");

        modal.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          var button = event.relatedTarget;
          // Extract info from data-bs-* attributes
          var recipient = button.getAttribute('data-bs-moje');
          // If necessary, you could initiate an AJAX request here
          // and then do the updating in a callback.
          //
          // Update the modal's content.
          //var modalTitle = exampleModal.querySelector('.modal-title')
          var obsah = modal.querySelector('#body');
          console.log("ahoj");
          obsah.innerHTML = recipient;

    
          
        })


        zmazat.addEventListener('click', function() {
            //modal.style.display = "block";
            //console.log("test");
        })
        
    </script>
</div>
</div>
<?php include '../../assets/paticka.php' ?>