<h1 class="page-header">CRUD MVC</h1>
<a class="btn btn-primary pull-right" href="<?php echo BASE_URL.'public/';?>actor/agregar">Agregar</a>
<br />
<br />
<table class="table  table-striped  table-hover" id="tableActors">
  <thead>
    <tr>
      <th style="width:180px; background-color: #5DACCD; color:#fff">
        First_name
      </th>
      <th style="width:120px; background-color: #5DACCD; color:#fff">
        Last_name
      </th>
      <th style="width:120px; background-color: #5DACCD; color:#fff">
        Last_update
      </th>
      <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
      <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($datos as $value):?>
      <tr>
        <td>
          <?php echo "{$value['first_name']}"?>
        </td>
        <td>
            <?php echo "{$value['last_name']}"?>
        </td>
        <td>
            <?php echo "{$value['last_update']}"?>
        </td>
        <td>
          <a class="btn btn-warning" href="<?php echo BASE_URL.'public/actor/editar/'.$value['actor_id'];?>">Editar</a>
        </td>
        <td>
          <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="<?php echo BASE_URL.'/public/actor/eliminar/'.$value['actor_id'];?>">Eliminar</a>
        </td>
      </tr>
      <?php endforeach;?>
  </tbody>
</table>
