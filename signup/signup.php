<?php 
  require('../templates/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                                <h1>Registruj se</h1>
                        </div>
                    </div>
                    <form action="signup.inc.php" name="registration" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ime</label>
                                <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Ime...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Prezime</label>
                                <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Prezime...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Unesite E-mail</label>
                                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lozinka</label>
                                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Lozinka">
                            </div>
                            <div class="col-md-12 text-center mb-3">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Uloguj Se</button>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <p class="text-center"><a href="../login/login.php" id="signin">Vec si registrovan?</a></p>
                                </div>
                            </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
<?php 
  require('../templates/footer.php')
?>