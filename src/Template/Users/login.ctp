<link rel="stylesheet" href="/webroot/css/login-style.css">
<div id="panel_connection">
<?= $this->Form->create() ?>
	<center>
	<h3><span class="glyphicon glyphicon-user"></span></h3>
		<fieldset>
			<legend><?= __("Connection") ?></legend>
			<?= $this->Form->input('username', ['placeholder' => __('Username'), 'label' => '', 'class' => 'buttonForm']) ?>
			<?= $this->Form->input('password', ['placeholder' => __('Password'), 'label' => '', 'class' => 'buttonForm']) ?>
		</fieldset>
	<br>
	<?= $this->Form->button(__('Se connecter'), ['class' => 'btn btn-primary']); ?>
	</center>
	<?= $this->Form->end() ?>
</div>