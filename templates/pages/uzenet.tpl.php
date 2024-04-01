<script>
    function validateForm() {
        
        let neve = document.forms["uzenetkuldo"]["neve"].value;
        if (neve == "") {
            alert("A nevet ki kell tolteni");
            return false;
        }
        let uzenete = document.forms["uzenetkuldo"]["uzenet"].value;
        if (uzenete == "") {
            alert("Az üzenetet ki kell tolteni");
            return false;
        }
        return true;
    } 
</script>

<form class="form-horizontal" name="uzenetkuldo" action="/web/?oldal=uzenet_ment" onsubmit="return validateForm()" method="post">
<fieldset>

<!-- Form Name -->
<legend>Küldj üzenetet a tulajdonosnak!</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Név</label>  
  <div class="col-md-4">
  <?php
    if(isset($_SESSION['login']))
    {
        // be van jelentkezve, így a felhasználónevével töltjük ki
        ?>
        <input id="textinput" name="neve" type="text" class="form-control input-md" value="<?= $_SESSION['login']?>">
       <?php 
    }
    else
    {
        // nincs bejelentkezve
        ?>
        <input id="textinput" name="neve" type="text" placeholder="Név" class="form-control input-md" value="">
        <?php
    }
    ?>    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="uzenet">Üzenet</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="uzenet" name="uzenet" cols=80 rows=10></textarea>
  </div>
</div>
<input type="submit" value="Küldd!" name='uzenetkuldd'>
</fieldset>
</form>
