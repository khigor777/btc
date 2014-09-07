    <? if (isset($message)): ?>
    	<h3 class="message">
    		<? echo $message; ?>
    	</h3>
    <? endif; ?>
    <?= Form::open('user/login',array('class' => 'form-signin', 'role' => 'form')); ?>

           <h2 class="form-signin-heading">Please sign in</h2>
           <input type="username" name="username" class="form-control" placeholder="User Name" required autofocus>
           <input type="password" name = "password" class="form-control" placeholder="Password" required>
           <label class="checkbox">
             <input name="remember" type="checkbox" value="remember-me"> Remember me
           </label>
        <p><?= HTML::anchor('user/create', 'create a new account'); ?></p>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
         </form>