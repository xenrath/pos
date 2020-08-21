<section class="content-header">
  <h1> Items
    <small>Item Produk</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Items</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<?php $this->view('messages') ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Items</h3>
			<div class="pull-right">
				<a href="<?=site_url('item/add') ?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Create
				</a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped" id="dataTable">
				<thead>
					<tr>
						<th style="width: 5%;">#</th>
						<th>Barcode</th>
						<th>Name</th>
						<th>Category</th>
						<th>Unit</th>
						<th>Price</th>
						<th>Image</th>
						<th>Stock</th>
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
						<td>
							<?=$data->barcode?>
							<br>
							<a href="<?=site_url('item/barcode_qrcode/'.$data->item_id) ?>" class="btn btn-default btn-xs">
								Generate
								<i class="fa fa-barcode" style="margin-left: 2px;"></i>
								<i class="fa fa-qrcode" style="margin-left: 2px;"></i>
							</a>	
						</td>
						<td><?=$data->name?></td>
						<td><?=$data->category_name?></td>
						<td><?=$data->unit_name?></td>
						<td><?=$data->price?></td>
						<td>
							<?php if ( $data->image != null) { ?>
								<img src="<?= base_url('uploads/product/'.$data->image)?>" style="height:75px">
							<?php } ?>
						</td>
						<td><?=$data->stock?></td>
						<td class="text-center" width="160px">
							<a href="<?=site_url('item/edit/'.$data->item_id) ?>" class="btn btn-primary btn-xs">
								<i class="fa fa-pencil"></i> Edit
							</a>
							<a href="<?=site_url('item/del/'.$data->item_id) ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger btn-xs">
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