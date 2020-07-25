<div id="navEE">
	<div id="add-nav-group">
	<?=form_open('C=addons_modules'.AMP.'M=show_module_cp'.AMP.'module=navee'.AMP.'method=config_handler')?>
		
		<ol class="required">
			<li><?= lang('cp_conf_sub_instr') ?></li>
			<li>
				<label for="install_directory"><?= lang('cp_conf_install_directory') ?>:</label>
				<input type="input" name="install_directory" value="<?= $install_directory ?>" />
				<span><?= lang('cp_conf_install_dir_inst') ?></span>
			</li>
		</ol>
		<input type="submit" class="create-nav-group btn action" value="<?= lang('cp_conf_update') ?>" name="navee_submit" />
	<?=form_close()?>
	</div>
</div>
