<section class="content-header">
  <h1> Stock Out
    <small>Barang Keluar</small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i></a></li>
    <li>Transaction</li>
    <li class="active">Stock Out</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<?php $this->view('messages') ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Stock Out</h3>
			<div class="pull-right">
				<a href="<?=site_url('stock/out/add') ?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Add Stock Out
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
							<a class="btn btn-info btn-xs" id="select" data-toggle="modal" data-target="#modal-detail"
								data-barcode="<?=$data->barcode ?>"
								data-item_name="<?=$data->item_name ?>"
								data-detail="<?=$data->detail ?>"
								data-supplier_name="<?=$data->supplier_name ?>"
								data-qty="<?=$data->qty ?>"
								data-date="<?=indo_date($data->date)?>"
							>
								<i class="fa fa-eye"></i> Detail
							</a>
							<a href="<?=site_url('stock/out/del/'.$data->stock_id.'/'.$data->item_id) ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger btn-xs">
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

<div class="modal fade" id="modal-detail">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Stock Out Detail</h4>
			</div>
			<div class="modal-body table-responsive">
				<table class="table table-bordered no-margin">
					<tr>
						<th style="width: 50%">Barcode</th>
						<td><span id="barcode"></span></td>
					</tr>
					<tr>
						<th>Item Name</th>
						<td><span id="item_name"></span></td>
					</tr>
					<tr>
						<th>Detail</th>
						<td><span id="detail"></span></td>
					</tr>
					<tr>
						<th>Supplier Name</th>
						<td><span id="supplier_name"></span></td>
					</tr>
					<tr>
						<th>Qty</th>
						<td><span id="qty"></span></td>
					</tr>
					<tr>
						<th>Date</th>
						<td><span id="date"></span></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$(document).on('click', '#select', function(){
			var barcode = $(this).data('barcode');
			var item_name = $(this).data('item_name');
			var detail = $(this).data('detail');
			var supplier_name = $(this).data('supplier_name');
			var qty = $(this).data('qty');
			var date = $(this).data('date');
			$('#barcode').text(barcode);
			$('#item_name').text(item_name);
			$('#detail').text(detail);
			$('#supplier_name').text(supplier_name);
			$('#qty').text(qty);
			$('#date').text(date);
		})
	})
</script>
