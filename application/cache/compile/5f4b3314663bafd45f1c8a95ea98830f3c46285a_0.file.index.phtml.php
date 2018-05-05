<?php
/* Smarty version 3.1.32, created on 2018-05-04 07:29:57
  from 'G:\WORK\projects\mengyou\mytest\yafDemo\application\views\index\index.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aec0bf5c41217_83984301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f4b3314663bafd45f1c8a95ea98830f3c46285a' => 
    array (
      0 => 'G:\\WORK\\projects\\mengyou\\mytest\\yafDemo\\application\\views\\index\\index.phtml',
      1 => 1525418995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aec0bf5c41217_83984301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27135aec0bf5c39df4_04068291', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208305aec0bf5c3d5b3_21651383', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/main.tpl");
}
/* {block 'title'} */
class Block_27135aec0bf5c39df4_04068291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_27135aec0bf5c39df4_04068291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

网站首页
<?php
}
}
/* {/block 'title'} */
/* {block "body"} */
class Block_208305aec0bf5c3d5b3_21651383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_208305aec0bf5c3d5b3_21651383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <a href="register.html"><img style="width:100%" src="/themes/images/carousel/1.png" alt="special offers"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img style="width:100%" src="/themes/images/carousel/2.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img src="/themes/images/carousel/3.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img src="/themes/images/carousel/4.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img src="/themes/images/carousel/5.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img src="/themes/images/carousel/6.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span3">
                <div class="well well-small"><a id="myCart" href="/cart"><img src="/themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu open"><a> ELECTRONICS [230]</a>
                        <ul>
                            <li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
                        </ul>
                    </li>
                    <li class="subMenu"><a> CLOTHES [840] </a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
                        </ul>
                    </li>
                    <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
                        </ul>
                    </li>
                    <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
                    <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
                    <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
                </ul>
                <br/>
                <div class="thumbnail">
                    <img src="/themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
                    <div class="caption">
                        <h5>Panasonic</h5>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div><br/>
                <div class="thumbnail">
                    <img src="/themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
                    <div class="caption">
                        <h5>Kindle</h5>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div><br/>
                <div class="thumbnail">
                    <img src="/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
                    <div class="caption">
                        <h5>Payment Methods</h5>
                    </div>
                </div>
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <div class="well well-small">
                    <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="/themes/images/products/b1.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="/themes/images/products/b2.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="/themes/images/products/b3.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="/themes/images/products/b4.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="/themes/images/products/5.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="/themes/images/products/6.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/7.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/8.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/9.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/10.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/11.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/1.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/2.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/3.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/4.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="/themes/images/products/5.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>
                </div>
                <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
                <h4>Latest Products </h4>
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="/themes/images/products/6.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>

                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="/themes/images/products/7.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="/themes/images/products/8.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="/themes/images/products/9.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="/themes/images/products/10.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="/themes/images/products/11.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "body"} */
}
