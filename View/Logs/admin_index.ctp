<?php
$tSettings = array(
	'columns' => array(
		'#' => array(
			'value' => '{LoginLog.id}',
			'thOptions' => array('align' => 'center', 'width' => 25),
			'tdOptions' => array('align' => 'center')
		),
		__d('login_log', 'User ID') => array(
			'value' => '{LoginLog.user_id}',
			'thOptions' => array('width' => 100),
			'sort' => 'User.id'
		),
		__d('login_log', 'Username') => array(
			'value' => '<a href="{url}/admin/user/list/edit/{LoginLog.user_id}{/url}">{LoginLog.username}</a>',
			'thOptions' => array('width' => '20%'),
			'sort' => 'LoginLog.username'
		),
		__d('login_log', 'Name') => array(
			'value' => '{LoginLog.name}',
			'thOptions' => array('width' => '20%', 'class' => 'hidden-tablet hidden-phone'),
			'tdOptions' => array('class' => 'hidden-tablet hidden-phone'),
			'sort' => 'LoginLog.name'
		),
		__d('login_log', 'Time') => array(
			'value' => '{php} return date("' . __d('login_log', 'Y-m-d H:i:s') . '", {LoginLog.time}); {/php}',
			'thOptions' => array('align' => 'right'),
			'tdOptions' => array('align' => 'right'),
			'sort' => 'LoginLog.time'
		),
		__d('login_log', 'IP Address') => array(
			'value' => '{LoginLog.ip}',
			'thOptions' => array('align' => 'left', 'class' => 'hidden-phone'),
			'tdOptions' => array('align' => 'left', 'class' => 'hidden-phone')
		),
		__d('login_log', 'Data') => array(
			'value' => '{LoginLog.data}',
			'thOptions' => array('align' => 'left', 'width' => 100, 'class' => 'hidden-tablet hidden-phone'),
			'tdOptions' => array('align' => 'left', 'class' => 'hidden-tablet hidden-phone')
		)
	),
	'noItemsMessage' => __d('login_log', 'There are no logs to display'),
	'paginate' => true,
	'headerPosition' => 'top',
	'tableOptions' => array('width' => '100%')
);
?>

<?php echo $this->Form->create(null, array('class' => 'form-inline')); ?>
	<!-- Filter -->
	<?php echo $this->Html->useTag('fieldsetstart', '<span class="fieldset-toggle">' . __t('Filter Options') . '</span>'); ?>
		<div class="fieldset-toggle-container" style="<?php echo isset($this->data['User']['filter']) ? '' : 'display:none;'; ?>">
			<?php
				echo $this->Form->input('LoginLog.filter.user_id',
					array(
						'type' => 'text',
						'label' => __d('login_log', 'User ID')
					)
				);

				echo $this->Form->input('LoginLog.filter.username LIKE',
					array(
						'type' => 'text',
						'label' => __d('login_log', 'Username')
					)
				);

				echo $this->Form->input('LoginLog.filter.name LIKE',
					array(
						'type' => 'text',
						'label' => __d('login_log', 'Name')
					)
				);

				echo $this->Form->input('LoginLog.filter.ip LIKE',
					array(
						'type' => 'text',
						'label' => __d('login_log', 'IP Address')
					)
				);
			?>
			<?php echo $this->Form->submit(__t('Filter')); ?>
		</div>
	<?php echo $this->Html->useTag('fieldsetend'); ?>
<?php echo $this->Form->end(); ?>
<?php echo $this->Html->table($results, $tSettings);?>