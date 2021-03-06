<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      <?php echo lang("ctn_1") ?>
      <small>Preview</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="<?php echo site_url("hideend/") ?>"><i class="fa fa-dashboard"></i> <?php echo lang("ctn_2") ?></a></li>
      <li><a href="<?php echo site_url("hideend/admin") ?>"><?php echo lang("ctn_1") ?></a></li>
      <li class="active"><?php echo lang("ctn_89") ?></li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row">
   <!-- left column -->
   <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
         <div class="box-header with-border">
            <h3 class="box-title"><?php echo lang("ctn_90") ?></h3>
         </div>
         <!-- /.box-header -->
         <!-- form start -->
         <?php echo form_open(site_url("hideend/forex/add_point_pro"), array("class" => "form-horizontal")) ?>
         <div class="box-body">
                           <div class="form-group">
                  <label for="p-in" class="col-md-3 label-heading">Symbol</label>
                  <div class="col-md-9 ui-front">
                     <select class="form-control selectSymbol" name="symbol" id="selectSymbol" data-placeholder="Select a Symbol">
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="p-in" class="col-md-3 label-heading">Appears to</label>
                  <div class="col-md-9 ui-front">
                     <select class="form-control selectPermission" name="permission[]" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                        <option value="1">Free</option>
                        <option value="2">Premium</option>
                     </select>
                     <span class="help-block"><?php echo lang("ctn_513") ?></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="p-in" class="col-md-3 label-heading">OPEN Position</label>
                  <div class="col-md-3 ui-front">
                     <input type="text" class="form-control" name="price">
                     <span class="help-block">Input Open Position Point</span>
                  </div>
                  <div class="col-md-6 ui-front">
                     <input type='text' class="form-control datetimepicker1" name="opendate"/>
                      <span class="help-block">Open Date</span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="p-in" class="col-md-3 label-heading">CLOSE Position</label>
                  <div class="col-md-3 ui-front">
                     <input type="text" class="form-control" name="stoploss">
                     <span class="help-block">Input Close Position Point</span>
                  </div>
                  <div class="col-md-6 ui-front">
                     <input type='text' class="form-control datetimepicker1" name="closedate" />
                      <span class="help-block">Close Date</span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="p-in" class="col-md-3 label-heading">Target 1</label>
                  <div class="col-md-9 ui-front">
                     <input type="text" class="form-control" name="target1" value="">
                     <span class="help-block">Input Target Point</span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="p-in" class="col-md-3 label-heading">Target 2</label>
                  <div class="col-md-9 ui-front">
                     <input type="text" class="form-control" name="target2" value="">
                     <span class="help-block">Input Target Point</span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="p-in" class="col-md-3 label-heading">Target 3</label>
                  <div class="col-md-9 ui-front">
                     <input type="text" class="form-control" name="target3" value="">
                     <span class="help-block">Input Target Point</span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="p-in" class="col-md-3 label-heading">Total Pips</label>
                  <div class="col-md-9 ui-front">
                     <input type="text" class="form-control" name="total_pips" value="">
                     <span class="help-block">Input Total Pips</span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="p-in" class="col-md-3 label-heading">SELL/BUY</label>
                  <div class="col-md-9">
                     <input type="checkbox" name="type" data-off-text="SELL" data-on-text="BUY">
                     <span class="help-block"><?php echo lang("ctn_428") ?></span>
                  </div>
               </div>            
            
          

         </div>
         <!-- /.box-body -->
         <div class="box-footer ">
            <button type="submit" class="btn btn-primary col-md-12"><?php echo lang("ctn_13") ?></button>
         </div>
         <?php echo form_close() ?>
      </div>
      <!-- /.box -->
      <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
