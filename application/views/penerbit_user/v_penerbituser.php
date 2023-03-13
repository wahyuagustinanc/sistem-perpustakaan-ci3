<?php 
  if (!empty($this->session->flashdata('info'))) {?>
     <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info')?></div>
   <?php }
?>

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID Penerbit</th>
          <th>Nama Penerbit</th>
        </tr>
      </thead>

      <tbody>
        <?php
        	foreach ($data as $row) {?>
        		<tr>
        			<td><?= $row->id_penerbit;?></td>
        			<td><?= $row->nama_penerbit;?></td>
        		</tr>
        	<?php }
        ?>
      </tbody>
    </table>
  </div>
</div>