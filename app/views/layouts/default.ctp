<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Syscholar</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="en" />
        <meta name="robots" content="noindex,nofollow" />
        <?= $html->css(array('reset', 'main', '2col', 'main-ie6', 'style', 'syscholar'));?>
        <?= $html->script(array('script.js', 'ui.tabs.js', 'ui.core.js', 'toggle.js', 'switcher.js', 'jquery.'))?>
    </head>
    <body>
        <div id="main">
            <div id="tray" class="box">
                <p class="f-left box">
                    <!-- Switcher -->
                    <span class="f-left" id="switcher">
                        <a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="images/switcher-1col.gif" alt="1 Column" /></a>
                        <a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="images/switcher-2col.gif" alt="2 Columns" /></a>
                    </span>

                    Project: <strong>Your Project</strong>
                </p>
                <?$usuario = $this->Session->read('Auth.User.nome')?>                
                <?if(!empty($usuario)) {?>
                    <p class="f-right">User: <strong><a href="#"><?= $usuario?></a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href="/users/logout" id="logout">Log out</a></strong></p>
                <?} else 
                    include ('_login.ctp');?>
            </div>
        </div>
        <div class="box" id="content" >
            <?= $content_for_layout ?>
        </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $(".tabs > ul").tabs();
    });
</script>
