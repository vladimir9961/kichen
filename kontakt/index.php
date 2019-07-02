<?php 
  require('../templates/header.php');
?>
<div class="container contact-form">
  <div class="row justify-content-center ">
    <div class="col-mid-auto ">
      <form class="contact" action="contactform.php" method="post">
      <div class="form-group">
          <label for="formGroupExampleInput">Ime/Prezime</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ime/Prezime">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail adresa</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Sifra</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sifra">
        </div>
        <div class="form-group">
          <label for="Vasa Poruka...">Vasa Poruka</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php 
  require('templates/footer.php')
?>