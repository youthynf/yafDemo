<?php
/* Smarty version 3.1.32, created on 2018-05-04 08:47:47
  from 'G:\WORK\projects\mengyou\mytest\yafDemo\application\views\layout\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aec1e33444b69_88402428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '526808519f034ede484ce86e815a0500b8a4235e' => 
    array (
      0 => 'G:\\WORK\\projects\\mengyou\\mytest\\yafDemo\\application\\views\\layout\\main.tpl',
      1 => 1525423662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aec1e33444b69_88402428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28115aec1e334300f3_64571519', 'title');
?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="/themes/css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_222965aec1e33437743_14595101', 'style');
?>

</head>
<body>
<?php echo '<script'; ?>
 src="/themes/js/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/themes/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/themes/js/google-code-prettify/prettify.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="/themes/js/bootshop.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/themes/js/jquery.lightbox-0.5.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/page/index.js"><?php echo '</script'; ?>
>
<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
            <div class="span6">Welcome!<strong><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong></div>
            <div class="span6">
                <div class="pull-right">
                    <a href="/cart"><span class="">Fr</span></a>
                    <a href="/cart"><span class="">Es</span></a>
                    <span class="btn btn-mini">En</span>
                    <a href="/cart"><span>&pound;</span></a>
                    <span class="btn btn-mini">$155.00</span>
                    <a href="/cart"><span class="">$</span></a>
                    <a href="/cart"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a>
                </div>
            </div>
        </div>
        <!-- Navbar ================================================== -->
        <div id="logoArea" class="navbar">
            <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-inner">
                <a class="brand" href="/"><img src="/themes/images/logo.png" alt="Bootsshop"/></a>
                <form class="form-inline navbar-search" method="post" action="products.html" >
                    <input id="srchFld" class="srchTxt" type="text" />
                    <select class="srchTxt">
                        <option>All</option>
                        <option>CLOTHES </option>
                        <option>FOOD AND BEVERAGES </option>
                        <option>HEALTH & BEAUTY </option>
                        <option>SPORTS & LEISURE </option>
                        <option>BOOKS & ENTERTAINMENTS </option>
                    </select>
                    <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
                </form>
                <ul id="topMenu" class="nav pull-right">
                    <li class=""><a href="special_offer.html">Specials Offer</a></li>
                    <li class=""><a href="normal.html">Delivery</a></li>
                    <li class=""><a href="/contact">Contact</a></li>
                    <li class="">
                        <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
                        <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3>Login Block</h3>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal loginFrm">
                                    <div class="control-group">
                                        <input type="text" id="inputEmail" placeholder="Email">
                                    </div>
                                    <div class="control-group">
                                        <input type="password" id="inputPassword" placeholder="Password">
                                    </div>
                                    <div class="control-group">
                                        <label class="checkbox">
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </form>
                                <button type="submit" class="btn btn-success">Sign in</button>
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header End====================================================================== -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54895aec1e3343e936_28625395', 'body');
?>

<!-- Footer ================================================================== -->
<div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h5>ACCOUNT</h5>
                <a href="login.html">YOUR ACCOUNT</a>
                <a href="login.html">PERSONAL INFORMATION</a>
                <a href="login.html">ADDRESSES</a>
                <a href="login.html">DISCOUNT</a>
                <a href="login.html">ORDER HISTORY</a>
            </div>
            <div class="span3">
                <h5>INFORMATION</h5>
                <a href="contact.html">CONTACT</a>
                <a href="register.html">REGISTRATION</a>
                <a href="legal_notice.html">LEGAL NOTICE</a>
                <a href="tac.html">TERMS AND CONDITIONS</a>
                <a href="faq.html">FAQ</a>
            </div>
            <div class="span3">
                <h5>OUR OFFERS</h5>
                <a href="#">NEW PRODUCTS</a>
                <a href="#">TOP SELLERS</a>
                <a href="special_offer.html">SPECIAL OFFERS</a>
                <a href="#">MANUFACTURERS</a>
                <a href="#">SUPPLIERS</a>
            </div>
            <div id="socialMedia" class="span3 pull-right">
                <h5>SOCIAL MEDIA </h5>
                <a href="#"><img width="60" height="60" src="/themes/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="/themes/images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="#"><img width="60" height="60" src="/themes/images/youtube.png" title="youtube" alt="youtube"/></a>
            </div>
        </div>
        <p class="pull-right">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
    <link rel="stylesheet" href="/themes/switch//themeswitch.css" type="text/css" media="screen" />
    <?php echo '<script'; ?>
 src="/themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
    <div id="themeContainer">
        <div id="hideme" class="themeTitle">Style Selector</div>
        <div class="themeName">Oregional Skin</div>
        <div class="images style">
            <a href="/themes/css/#" name="bootshop"><img src="/themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
            <a href="/themes/css/#" name="businessltd"><img src="/themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
        </div>
        <div class="themeName">Bootswatch Skins (11)</div>
        <div class="images style">
            <a href="/themes/css/#" name="amelia" title="Amelia"><img src="/themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="spruce" title="Spruce"><img src="/themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
            <a href="/themes/css/#" name="superhero" title="Superhero"><img src="/themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="cyborg"><img src="/themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="cerulean"><img src="/themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="journal"><img src="/themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="readable"><img src="/themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="simplex"><img src="/themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="slate"><img src="/themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="spacelab"><img src="/themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="united"><img src="/themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
            <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
        </div>
        <div class="themeName">Background Patterns </div>
        <div class="images patterns">
            <a href="/themes/css/#" name="pattern1"><img src="/themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
            <a href="/themes/css/#" name="pattern2"><img src="/themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern3"><img src="/themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern4"><img src="/themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern5"><img src="/themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern6"><img src="/themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern7"><img src="/themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern8"><img src="/themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern9"><img src="/themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern10"><img src="/themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

            <a href="/themes/css/#" name="pattern11"><img src="/themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern12"><img src="/themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern13"><img src="/themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern14"><img src="/themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern15"><img src="/themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

            <a href="/themes/css/#" name="pattern16"><img src="/themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern17"><img src="/themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern18"><img src="/themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern19"><img src="/themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
            <a href="/themes/css/#" name="pattern20"><img src="/themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

        </div>
    </div>
</div>
<span id="/themesBtn"></span>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162145aec1e33442418_00613714', 'script');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_28115aec1e334300f3_64571519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_28115aec1e334300f3_64571519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'style'} */
class Block_222965aec1e33437743_14595101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_222965aec1e33437743_14595101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_54895aec1e3343e936_28625395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_54895aec1e3343e936_28625395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'script'} */
class Block_162145aec1e33442418_00613714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_162145aec1e33442418_00613714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
