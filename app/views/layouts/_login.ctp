<div class="f-right">
<?= $form->create("User", array("action" => "login")); ?>
<?= $form->input('email', array('label' => false, 'div' => false, 'value' => 'e-mail',
		'onfocus' => 'if (this.value=="e-mail") this.value=""',
		'onblur' => 'if (this.value=="") this.value="e-mail"'));?>	
	<?= $form->input('senha', array('label' => false, 'div' => false, 'value' => 'senha',
		'onfocus' => 'if (this.value=="senha") { this.value=""; this.type="password" }',
		'onblur' => 'if (this.value=="") { this.value="senha"; this.type="text" }'));?>
	
<?= $form->button('entrar', array('onclick' => 'this.form.submit()', 'class'=>'input-submit'));?>
<?= $form->end(null); ?>
<strong><?= $html->link("cadastre-se", array('controller' => 'users', 'action' => 'cadastrar')) ?></strong>
</div>

