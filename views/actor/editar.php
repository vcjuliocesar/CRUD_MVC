<h1>
  Editar Actor
</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo BASE_URL.'public/';?>">Actor</a></li>
  <li class="active"><?php echo $datos[0]['actor_id'] != null ? $datos[0]['first_name'] : 'Nuevo Registro';?></li>
</ol>
<form id="frm-Actor" action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
<fieldset>
  <!--<legend>Form Horizontal</legend>-->
  <input type="hidden" name="actor_id" value="<?php echo $datos[0]['actor_id'];?>"/>
  <div class="control-group">
    <label class="control-label">First name</label>
    <div class="controls">
        <input type="text" name="first_name" value="<?php echo $datos[0]['first_name']?>" class="input-xlarge focused"/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label">Last name</label>
    <div class="controls">
      <input type="text" name="last_name" value="<?php echo $datos[0]['last_name']?>" class="input-xlarge focused"/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label">Last update</label>
    <div class="controls">
      <input type="text" name="last_update" disabled value="<?php echo $datos[0]['last_update']?>" class="input-xlarge focused"/>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button class="btn btn-primary">Guardar</button>
    </div>
  </div>
</fieldset>
</form>
