<? if (isset($message)): ?>
	<h3 class="message">
		<? echo $message; ?>
	</h3>
<? endif; ?>

<?= Form::open('user/create',array('class' => 'form-signin', 'role' => 'form')); ?>
<h2 class="form-signin-heading">Create a New User</h2>
<?= Form::label('username', 'Username'); ?>
<?= Form::input('username', HTML::chars(Arr::get($_POST, 'username')), array('class' => 'form-control')); ?>
<div class="error">
	<?= Arr::get($errors, 'username'); ?>
</div>

<?= Form::label('email', 'Email Address'); ?>
<?= Form::input('email', HTML::chars(Arr::get($_POST, 'email')),  array('class' => 'form-control')); ?>
<div class="error">
	<?= Arr::get($errors, 'email'); ?>
</div>

<?= Form::label('password', 'Password'); ?>
<?= Form::password('password',null,  array('class' => 'form-control')); ?>
<div class="error">
	<?= Arr::path($errors, '_external.password'); ?>
</div>

<?= Form::label('password_confirm', 'Confirm Password'); ?>
<?= Form::password('password_confirm', null,  array('class' => 'form-control')); ?>
<div class="error">
	<?= Arr::path($errors, '_external.password_confirm'); ?>
</div>

<button class="btn btn-lg btn-primary btn-block" type="submit">Create</button><br><br>
<p>Or <?= HTML::anchor('user', 'login'); ?> if you have an account already.</p>
<?= Form::close(); ?>

