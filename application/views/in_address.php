<?php
if(isset($errors)) echo '<p style="color:red">'.$errors.'</p>';?>
<p>The document will be processed within <b>two business day.</b><br>
  Please ensure that your address information is accurate and upload a recent, viewable, scanned copy of a utility bill or a copy of another official document that shows your address and has your name on it. Photo IDs are not a valid form of address verification.</p>
<div  style="width: 25%">

<?php echo Form::open('main/add', array('enctype'=>'multipart/form-data'));?>
  <div class="form-group" >
    <label for="update_days">Address Line 1
    </label><br>
    <?php echo Form::input('address_first', $params, array('class'=>'form-control'))?>
  </div>

    <div class="form-group">
      <label for="items_per_page">Address Line 2
      </label><br>
      <?php echo Form::input('address_second','',array('class'=>'form-control', 'id' =>'date_b')) ?>
    </div>


    <div class="form-group">
      <label for="items_per_page"> ZIP/ Postal Code
      </label><br>
      <?php echo Form::input('zip', '', array('class'=>'form-control')) ?>
    </div>

    <div class="form-group">
      <label for="items_per_page"> City
      </label><br>
      <?php echo Form::input('city', '', array('class'=>'form-control')) ?>
    </div>

    <div class="form-group">
      <label for="items_per_page">* State/ County
      </label><br>
      <?php echo Form::input('state', '', array('class'=>'form-control')) ?>
    </div>

    <div class="form-group">
    <label for="notify_days">Country</label><br>
      <?php echo Form::select('gender', array('Please Select')+Model_Verify::getGender(), 0 , array('class'=>'form-control')) ?>
    </div>

    <div class="form-group">
      <label for="items_per_page">Document Image</label><br>
      <?php echo Form::file('file',array('class'=>'form-control')) ?><br>
        Only high resolution images will be accepted.
    </div>
<div class="form-group">
 </div>
  <button type="submit" id="sb_button" class="btn btn-default">Сохранить</button>
<?php echo Form::close();?>
</div>
