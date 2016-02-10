<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lakna
 * Date: 2/10/2016
 * Time: 8:22 AM
 */

include("includes/header.php");
?>
<fieldset>
<div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="label">Question Name</label>
  <div class="col-md-4">
  <input id="label" name="label" type="text" placeholder="Type you label name here" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="helpTxt">Help text</label>
  <div class="col-md-4">
  <input id="helpTxt" name="helpTxt" type="text" placeholder="" class="form-control input-md">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="addItem">Add Item</label>
  <div class="col-md-4">
    <select id="addItem" name="addItem" class="form-control">
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="createButton"></label>
  <div class="col-md-4">
    <button id="createButton" name="createButton" class="btn btn-primary">Create Form</button>
  </div>
</div>

</div>
</fieldset>

<?php
include("includes/footer.php");
?>