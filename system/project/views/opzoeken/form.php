<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
          <fieldset>

          <!-- Form Name -->
          <legend>Zoek naar een boeking</legend>

          <br>

          <h3 class="col-md-offset-3">Zoek op basis van achternaam</h3>

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
              <button type="submit" class="btn btn-warning">Zoek naar de boekingen<span class="glyphicon glyphicon-send"></span></button>
            </div>
          </div>

          </fieldset>
          </form>

          <form class="well form-horizontal" action=" " method="post"  id="contact_form">
          <fieldset>

         <h3 class="col-md-offset-3">Zoek op basis van check-in datum</h3>

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


          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
              <button type="submit" class="btn btn-warning">Zoek naar de boekingen<span class="glyphicon glyphicon-send"></span></button>
            </div>
          </div>

          </fieldset>
          </form>
      </div>
</div><!-- /.container -->