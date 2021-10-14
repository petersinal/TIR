<?php include '../../assets/hlavicka.php' ?>
<div class="form-group d-flex justify-content-center mt-5">
    <form action="login.php" method="post">
      <p class="form-group">
        <input type="text" id="login" class="form-control" name="name" placeholder="login">
      </p>
      <p class="form-group">
        <input type="password" id="password" class="form-control" name="password" placeholder="password">
      </p>
      <p class="form-group">
        <input type="submit" class="btn-sm btn-danger float-right" value="Log In">
      </p>
      
    </form>
</div>
<?php include '../../assets/paticka.php' ?>