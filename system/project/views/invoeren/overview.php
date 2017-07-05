<div class="container">

    <form class="well form-horizontal" action=" " method="post" >
<fieldset>

<!-- Form Name -->
<legend>Nieuwe boeking invoeren</legend>

<br>

<h3 class="col-md-offset-3">Persoonsgegevens</h3>

<br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Voornaam</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" value="<?php echo $first_name; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Achternaam</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" value="<?php echo $last_name; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" value="<?php echo $email; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Telefoon</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" value="<?php echo $phone; ?>" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Adres</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" value="<?php echo $address; ?>" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Stad</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="city" value="<?php echo $city; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Postcode</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" value="<?php echo $zip; ?>" class="form-control"  type="text">
    </div>
</div>
</div>

<br>

<h3 class="col-md-offset-3">Boekingsgegevens</h3>

<br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Incheckdatum</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="checkin_date" value="<?php echo $checkin_date; ?>" class="form-control"  type="date">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Inchecktijd</label> 
    <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
  <input name="checkin_time" value="<?php echo $checkin_time; ?>" class="form-control"  type="time">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Uitcheckdatum</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="departure_date" value="<?php echo $departure_date; ?>" class="form-control"  type="date">
    </div>
  </div>
</div>


<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Apartement</label>
    <div class="col-md-3 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="apartment_id" class="form-control selectpicker" >
      <option value="<?php echo $apartment_id; ?>" ><strong>Apartement <?php echo $apartment_id; ?></strong></option>
      <option>1</option>
      <option>2</option>
      <option >3</option>
      <option >4</option>
      <option >5</option>
      <option >6</option>
      <option >7</option>      
    </select>
  </div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Hoeveel volwassen personen</label>  
   <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
        <input name="adults" value="<?php echo $adults; ?>" class="form-control" type="number" step="1">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Hoeveel kinderen</label>  
   <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
        <input name="kids" value="<?php echo $kids; ?>" class="form-control" type="number" step="1">
    </div>
  </div>
</div>

<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Ontbijt?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="breakfast" value="1" /> Met ontbijt
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="breakfast" value="0" /> Zonder ontbijt
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Extra wensen</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" rows="7" name="comments" value="<?php echo $comments; ?>"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" name="confirm">Definitief verzenden <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->


