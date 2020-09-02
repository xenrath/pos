<section class="content-header">
  <h1> Stock In
    <small>Barang Masuk / Pembelian</small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i></a></li>
    <li>Transaction</li>
    <li class="active">Stock In</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<?php $this->view('messages') ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Stock In</h3>
			<div class="pull-right">
				<a href="<?=site_url('stock/in/add') ?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Add Stock In
				</a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped" id="dataTable">
				<thead>
					<tr>
						<th style="width: 5%;">#</th>
						<th>Barcode</th>
						<th>Product Item</th>
						<th>Qty</th>
						<th>Date</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						foreach ($row as $key => $data) {
					?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$data->barcode?></td>
						<td><?=$data->item_name?></td>
						<td class="text-right"><?=$data->qty?></td>
						<td class="text-center"><?=indo_date($data->date)?></td>
						<td class="text-center" width="160px">
							<a href="<?=site_url('stock/in/detail/'.$data->stock_id) ?>" class="btn btn-info btn-xs">
								<i class="fa fa-eye"></i> Edit
							</a>
							<a href="<?=site_url('stock/in/del/'.$data->stock_id.'/'.$data->item_id) ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger btn-xs">
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