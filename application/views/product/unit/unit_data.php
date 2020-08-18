<section class="content-header">
  <h1> Units
    <small>Satuan Produk</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Units</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<?php $this->view('messages') ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Units</h3>
			<div class="pull-right">
				<a href="<?=site_url('unit/add') ?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Create
				</a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped" id="dataTable">
				<thead>
					<tr>
						<th style="width: 5%;">#</th>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($row->result() as $key => $data) {
					 ?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$data->name?></td>
						<td class="text-center" width="160px">
							<a href="<?=site_url('unit/edit/'.$data->unit_id) ?>" class="btn btn-primary btn-xs">
								<i class="fa fa-pencil"></i> Edit
							</a>
							<a href="<?=site_url('unit/del/'.$data->unit_id) ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i> Delete
							</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	
</section>