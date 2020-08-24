<section class="content-header">
  <h1> Stock In
    <small>Barang Masuk / Pembelian</small>
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i></a></li>
    <li>Transaction</li>
    <li>Stock In</li>
    <!-- <li class="active"><?=ucfirst($page) ?></li> -->
  </ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Add Stock In</h3>
			<div class="pull-right">
				<a href="<?=site_url('stock/in') ?>" class="btn btn-warning btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>
			</div>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form action="<?=site_url('stock/process') ?>" method="post">
						<div class="form-group">
							<label>Date *</label>
							<input type="date" name="date" value="<?= date('Y-m-d'); ?>" class="form-control" required>
						</div>
						<div>
							<label for="barcode">Barcode *</label>
						</div>
						<div class="form-group input-group">
							<input type="hidden" name="item_id" id="item_id">
							<input type="text" name="barcode" id="barcode" class="form-control" required autofocus>
							<span class="input-group-btn">
								<button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
						<div class="form-group">
							<label for="item_name">Item Name</label>
							<input type="text" name="item_name" id="item_name" class="form-control" readonly>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label for="unit_name">Unit Name</label>
									<input type="text" name="unit_name" id="unit_name" value="-" class="form-control" readonly>
								</div>
								<div class="col-md-4">
									<label for="stock">Initial Stock</label>
									<input type="text" name="stock" id="stock" value="-" class="form-control" readonly>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="detail">Detail *</label>
							<input type="text" name="detail" id="detail" placeholder="Kulakan / tambahan / etc" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="detail">Supplier</label>
							<select name="supplier" id="supplier" class="form-control">
								<option value="">- Pilih -</option>
								
							</select>
						</div>
						<div class="form-group">
							<label for="qty">Qty *</label>
							<input type="number" name="qty" id="qty" class="form-control" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-flat">
								<i class="fa fa-paper-plane"></i> Save</button>
							<button type="reset" class="btn btn-flat">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</section>