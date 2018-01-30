<h1>
  Nuevo Registro
</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL.'public/';?>">Actor</a></li>
  <li class="active">Nuevo Registro</li>
</ol>
<form id="frm-Actor" action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
  <!--<legend>Form Horizontal</legend>-->
  <div class="control-group">
    <label class="control-label">First name</label>
    <div class="controls">
        <input type="text" name="first_name" value="" class="input-xlarge focused"/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label">Last name</label>
    <div class="controls">
      <input type="text" name="last_name" value="" class="input-xlarge focused"/>
    </div>
  </div>
  <!--<div class="control-group">
    <label class="control-label">Last update</label>
    <div class="controls">
      <input type="text" name="last_update" disabled value="" class="input-xlarge focused"/>
    </div>
  </div>-->
  <div class="control-group">
    <div class="controls">
      <button class="btn btn-primary">Guardar</button>
    </div>
  </div>
</fieldset>
</form>
