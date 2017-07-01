<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Zoek naar een klant</legend>

<br>

<h3 class="col-md-offset-3">Persoonsgegevens</h3>

<br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Achternaam</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Achternaam" class="form-control"  type="text" required>
    </div>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Zoek naar klant <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->

<?php foreach ($customers as $customer) : ?>
  <?php echo $customer->last_name; ?>
<?php endforeach; ?>