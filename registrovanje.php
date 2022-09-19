<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form action="includes/signup.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Registruj se</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">Ime</label>
  <div class="col-md-4">
  <input id="fname" name="ime" type="text" placeholder="John" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">Prezime</label>
  <div class="col-md-4">
  <input id="lname" name="prezime" type="text" placeholder="Doe" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="johndoe@example.com" class="form-control input-md" required="">

  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Lozinka</label>
  <div class="col-md-4">
    <input id="password" name="pw" type="password" placeholder="" class="form-control input-md" required="">

  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="save"></label>
  <div class="col-md-8">
    <button id="save" name="save" class="btn btn-success">Registruj se</button>
    <button id="clear" name="clear" class="btn btn-danger">Resetuj</button>
  </div>
</div>

</fieldset>
</form>
