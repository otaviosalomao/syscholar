<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Syscholar</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="en" />
        <meta name="robots" content="noindex,nofollow" />
        <?= $html->css(array('reset', 'main', '2col', 'main-ie6','syscholar', 'style'));?>
        <?= $html->script(array('script.js', 'ui.tabs.js', 'ui.core.js', 'toggle.js', 'switcher.js', 'jquery.js'))?>
    </head>
    <body>
        <div id="main">
            <div id="tray" class="box">
                <p class="f-left box">
                    <strong>SYSCHOLAR - Sistema de apoio ao estudante</strong>
                </p>
                <?$usuario = $this->Session->read('Auth.User')?>
                <?if(!empty($usuario)) {?>
                <p class="f-right">
                    <strong><?= $usuario['nome']?></strong>&nbsp;
                    | <a href=<?= "/users/editar/".$usuario['id']?>>editar perfil</a>&nbsp;
                    | <a href="/users/logout" id="logout">sair</a>
                </p>
                    <?} else
                    include ('_login.ctp');?>
            </div>
            <hr class="noscreen">
            <div id="menu" class="box">
                <?if(!empty($usuario)) {?>
                <ul class="box f-right">
                    <li><a href="/calendario"><span><strong>Calendario</strong></span></a></li>
                </ul>
                <ul class="box">
                    <li><a href="/materias"><span>MATERIAS</span></a></li>
                    <li><a href="/provas"><span>PROVAS</span></a></li>
                    <li><a href="/arquivos"><span>ARQUIVOS</span></a></li>
                    <li><a href="/trabalhos"><span>TRABALHOS</span></a></li>
                    <li><a href="/compromissos"><span>COMPROMISSOS</span></a></li>
                    <li><a href="/tarefas"><span>TAREFAS</span></a></li>
                </ul>
                    <?}?>
            </div>
            <hr class="noscreen">
            <div id="cols" class="box">
                <div id="aside" class="box">
                    <div class="padding box">
                        <p id="logo"><a href="/home"><img src="/images/estudante.jpg" alt="Our logo" title="Visit Site"></a></p>
                        <form action="#" method="get" id="search">
                            <fieldset>
                                <legend>Busca</legend>
                                <p><input type="text" size="17" name="" class="input-text">&nbsp;<input type="submit" value="OK" class="input-submit-02"><br>                                    
                            </fieldset>
                        </form>
                        <ul class="box">
                            <li id="submenu-active"><a href="#">Active Page</a> <!-- Active -->
                                <ul>
                                    <li><a href="#">Lorem ipsum</a></li>
                                    <li><a href="#">Lorem ipsum</a></li>
                                    <li><a href="#">Lorem ipsum</a></li>
                                    <li><a href="#">Lorem ipsum</a></li>
                                    <li><a href="#">Lorem ipsum</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <div id="content" class="box">
                    <?= $content_for_layout ?>
                </div>
                <hr class="noscreen">
            </div>
            <div id="footer" class="box">

            </div>

        </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $(".tabs > ul").tabs();
    });
</script>
