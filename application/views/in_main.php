<?php
if(isset($error))
    foreach($error as $item){
    echo '<p style="color:red">'.$item.'</p>';
}
?>
<div  style="width: 25%">
<?php echo Form::open('main/index', array('enctype'=>'multipart/form-data'));?>
  <div class="form-group" >
    <label for="update_days">Your Name</label><br>
    <?php echo Form::input('name', $params, array('class'=>'form-control'))?>
  </div>
    <div class="form-group">
    <label for="notify_days">Gender</label><br>
      <?php echo Form::select('gender', array('Please Select')+Model_Verify::getGender(), 0 , array('class'=>'form-control')) ?>
    </div>
    <div class="form-group">
      <label for="items_per_page">Date of Birth</label><br>
      <?php echo Form::input('date_bith','',array('class'=>'form-control', 'id' =>'date_b')) ?>
    </div>

    <div class="form-group">
       <label for="exampleInputEmail1">ID Type</label><br>
       <?php echo Form::radio('type', Model_Verify::TYPE_DRIVER) . ' Driver\'s License ' ;
             echo  Form::radio('type', Model_Verify::TYPE_NATIONAL_ID) .' National ID ';
             echo  Form::radio('type', Model_Verify::TYPE_PASSPORT) . ' Passport ';
       ?>
     </div>
    <div class="form-group">
      <label for="items_per_page"> ID Number</label><br>
      <?php echo Form::input('number', '', array('class'=>'form-control')) ?>
    </div>

    <div class="form-group">
      <label for="items_per_page"> ID File</label><br>
      <?php echo Form::file('file',array('class'=>'form-control')) ?><br>
        Only high resolution images will be accepted (cellphone photos are ok).
    </div>
<div class="form-group">
 </div>
  <button type="submit" id="sb_button" class="btn btn-default">Сохранить</button>
<?php echo Form::close();?>
</div>
<script type="text/javascript">
   $(document).ready(function(){
       $('#date_b').datepicker({
           format: 'yyyy-mm-dd'
       });

   });

</script>