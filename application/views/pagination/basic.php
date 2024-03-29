<p class="pagination">
<?php /**
 * @var $page Pagination
 */
 ?>
	<?php if ($first_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->getNormalUri($first_page)) ?>" rel="first"><?php echo __('First') ?></a>
	<?php else: ?>
		<?php echo __('First') ?>
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->getNormalUri($previous_page)) ?>" rel="prev"><?php echo __('Previous') ?></a>
	<?php else: ?>
		<?php echo __('Previous') ?>
	<?php endif ?>

	<?php for ($i = 1; $i <= $total_pages; $i++): ?>

		<?php  if ($i == $current_page): ?>
			<strong><?php  echo $i ?></strong>
		<?php else: ?>
			<a href="<?php echo HTML::chars($page->getNormalUri($i)) ?>"><?php echo $i ?></a>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
		<a href="<?php  echo HTML::chars($page->getNormalUri($next_page)) ?>" rel="next"><?php echo __('Next') ?></a>
	<?php else: ?>
		<?php echo __('Next'); ?>
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->getNormalUri($last_page)) ?>" rel="last"><?php echo __('Last') ?></a>
	<?php else: ?>
<?php echo __('Last') ?>
<?php endif ?>

</p><!-- .pagination -->