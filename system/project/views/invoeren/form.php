<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
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
  <input  name="first_name" placeholder="Voornaam" class="form-control"  type="text">
    </div>
  </div>
</div>

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

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Adres" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Telefoon</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Adres</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Straatnaam + Huisnummer" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Land</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="country" placeholder="Land" class="form-control" type="text">
    </div>
  </div>
</div>


<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Stad</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input name="city" placeholder="Stad" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Postcode</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Postcode" class="form-control"  type="text">
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
  <input name="checkin_date" class="form-control"  type="date" required>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Inchecktijd</label> 
    <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
  <input name="checkin_time" class="form-control"  type="time">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Uitcheckdatum</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="departure_date" class="form-control"  type="date" required>
    </div>
  </div>
</div>


<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Appartement</label>
    <div class="col-md-3 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="apartment_id" class="form-control selectpicker" required >
      <option value=" " >Selecteer het appartement</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>      
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
        <input name="adults" placeholder="aantal volwassenen" class="form-control" type="number" step="1">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Hoeveel kinderen</label>  
   <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
        <input name="kids" placeholder="aantal kinderen" class="form-control" type="number" step="1">
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
        	<textarea class="form-control" rows="7" name="comments" placeholder="Extra wensen..."></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Verzenden voor controle <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->


<script type="text/javascript">
  
    $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


</script>


<style type="text/css">
  
#success_message{ display: none;}

</style>