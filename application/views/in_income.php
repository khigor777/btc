<?php
if(isset($errors)) echo '<p style="color:red">'.$errors.'</p>';?>
<p>The documents will be processed within two business day.

Please ensure that your identity information is accurate and upload a viewable, scanned copy of your proof of income (benefits letter, SSA-1099, monthly paychecks).</p>
<div  style="width: 25%">

<?php echo Form::open('main/add', array('enctype'=>'multipart/form-data'));?>
  <div class="form-group" >
    <label for="update_days">SSN
    </label><br>
    <?php echo Form::input('ssn', $params, array('class'=>'form-control'))?>
  </div>

    <div class="form-group">
      <label for="items_per_page">Home Ownership
      </label><br>
      <?php echo Form::checkbox('home_owner','',array('class'=>'form-control', 'id' =>'date_b')) ?>
    </div>

    <div class="form-group">
      <label for="items_per_page">Car Ownership
      </label><br>
      <?php echo Form::checkbox('car_owner','',array('class'=>'form-control', 'id' =>'date_b')) ?>
    </div>


    <div class="form-group">
      <label for="items_per_page"> Annual Income
      </label><br>
      <?php echo Form::input('annual_income', '', array('class'=>'form-control')) ?>
    </div>

    <div class="form-group">
      <label for="items_per_page"> Employee Status

      </label><br>
      <?php echo Form::select('employee_status', array(), 0, array('class'=>'form-control')) ?>
    </div>

    <div class="form-group">
      <label for="items_per_page"> Credit Score

      </label><br>
      <?php echo Form::input('credit_score', '', array('class'=>'form-control')) ?>
    </div>

    <div class="form-group">
      <label for="items_per_page">Proof of Income</label><br>
      <?php echo Form::file('file1',array('class'=>'form-control')) ?><br>
        Only high resolution images will be accepted.
    </div>

    <div class="form-group">
      <label for="items_per_page">Proof of Income</label><br>
      <?php echo Form::file('file2',array('class'=>'form-control')) ?><br>
        Only high resolution images will be accepted.
    </div>

    <div class="form-group">
      <label for="items_per_page">Proof of Income</label><br>
      <?php echo Form::file('file3',array('class'=>'form-control')) ?><br>
        Only high resolution images will be accepted.
    </div>
<div class="form-group">
 </div>
  <button type="submit" id="sb_button" class="btn btn-default">Сохранить</button>
<?php echo Form::close();?>
</div>
