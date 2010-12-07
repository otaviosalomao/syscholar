<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Syscholar</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="en" />
        <meta name="robots" content="noindex,nofollow" />
        <?= $html->css(array('reset', 'main', '2col', 'main-ie6','syscholar', 'style'));?>
        <?= $javascript->link(array('jquery-1.3.2.min', 'jquery.translate-1.3.9', 'jquery.cookie')); ?>
    </head>
    <body>
        <div id="main">
            <div id="idiomas">
                    <?= $html->image('/images/br.png', array('id' => 'pt', 'title' => 'Português', 'onClick' => 'originalLanguage()')); ?>
                    <?= $html->image('/images/us.png', array('id' => 'en', 'title' => 'English', 'onClick' => 'translateTo(this.id)')); ?>
                    <?= $html->image('/images/es.png', array('id' => 'es', 'title' => 'Español', 'onClick' => 'translateTo(this.id)')); ?>
                </div>
            <div id="tray" class="box">
                <p class="f-left box">
                    <strong>SYSCHOLAR - Sistema de apoio ao estudante</strong>
                </p>
                <?$usuario = $this->Session->read('Auth.User')?>
                <?if(!empty($usuario)) {?>
                <p class="f-right">
                    <strong><?= $usuario['nome']?></strong>&nbsp;| <a href=<?= "/users/editar/".$usuario['id']?>>editar perfil</a>&nbsp;| <a href="/users/logout" id="logout">sair</a>
                </p>
                    <?} else
                    include ('_login.ctp');?>
            </div>
            <hr class="noscreen"/>
            <div id="menu" class="box">
                <?if(!empty($usuario)) {?>
                <ul class="box f-right">
                    <li><a href="/calendario"><span><strong>Calendario</strong></span></a></li>
                </ul>
                <ul class="box">
                    <li><a href="/materias"><span>MATERIAS</span></a></li>               
                    <li><a href="/arquivos"><span>ARQUIVOS</span></a></li>                    
                    <li><a href="/compromissos"><span>COMPROMISSOS</span></a></li>                    
                </ul>
                    <?}?>
            </div>
            <hr class="noscreen"/>
            <div id="cols" class="box">
                <div id="aside" class="box">
                    <div class="padding box">
                        <p id="logo"><a href="/home"><img src="/images/estudante.png" alt="Our logo" title="Visit Site"/></a></p>
                    </div>
                </div>
                <div id="content" class="box">
                    <?= $content_for_layout ?>
                </div>
                <hr class="noscreen"/>
            </div>
            <div id="footer" class="box">

            </div>

        </div>
        <script type="text/javascript">
    jQuery(document).ready(function() {
        if (jQuery.cookie('destLang') != null) {
            translateTo(jQuery.cookie('destLang'));
        }
    });
    function translateTo(data) {
        jQuery("body").translate(data, {
            not:"#UserLoginForm",
            fromOriginal: true
        });
        jQuery.cookie('destLang', data, {path: '/'});
    }
    function originalLanguage() {
        jQuery.cookie('destLang', null, {path: '/'});
        window.location.reload();
    }
</script>
    </body>
</html>

