<?= $form->create("User", array("action" => "login", 'class' => 'form')); ?>	
    <?= $form->input('email', array('value' => '')); ?>
    <?= $form->input('senha', array('value' => '', 'type' => 'password')); ?>
    <?= $session->flash('auth'); ?>
<?= $form->end("Entrar"); ?>	