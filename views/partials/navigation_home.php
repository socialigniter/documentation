<h2 class="content_title"><img src="<?= $modules_assets ?>documentation_32.png"> Documentation</h2>
<ul class="content_navigation">
	<?= navigation_list_btn('home/documentation', 'Recent') ?>
	<?= navigation_list_btn('home/documentation/custom', 'Custom') ?>
	<?php if ($logged_user_level_id <= 2) echo navigation_list_btn('home/documentation/manage', 'Manage', $this->uri->segment(4)) ?>
</ul>