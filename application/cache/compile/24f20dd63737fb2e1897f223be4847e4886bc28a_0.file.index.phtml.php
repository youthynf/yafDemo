<?php
/* Smarty version 3.1.32, created on 2018-05-04 08:45:09
  from 'G:\WORK\projects\mengyou\mytest\yafDemo\application\views\cart\index.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aec1d95a16ad9_87573764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24f20dd63737fb2e1897f223be4847e4886bc28a' => 
    array (
      0 => 'G:\\WORK\\projects\\mengyou\\mytest\\yafDemo\\application\\views\\cart\\index.phtml',
      1 => 1525423506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aec1d95a16ad9_87573764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121365aec1d95a0f8e4_52522413', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39695aec1d95a13ad2_95825101', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/main.tpl");
}
/* {block 'title'} */
class Block_121365aec1d95a0f8e4_52522413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_121365aec1d95a0f8e4_52522413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

购物车首页
<?php
}
}
/* {/block 'title'} */
/* {block "body"} */
class Block_39695aec1d95a13ad2_95825101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_39695aec1d95a13ad2_95825101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span3">
                <div class="well well-small"><a id="myCart" href="/cart"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
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
                    <img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
                    <div class="caption">
                        <h5>Panasonic</h5>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div><br/>
                <div class="thumbnail">
                    <img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
                    <div class="caption">
                        <h5>Kindle</h5>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div><br/>
                <div class="thumbnail">
                    <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
                    <div class="caption">
                        <h5>Payment Methods</h5>
                    </div>
                </div>
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                    <li class="active"> SHOPPING CART</li>
                </ul>
                <h3>  SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
                <hr class="soft"/>
                <table class="table table-bordered">
                    <tr><th> I AM ALREADY REGISTERED  </th></tr>
                    <tr>
                        <td>
                            <form class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label" for="inputUsername">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputUsername" placeholder="Username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword1">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Quantity/Update</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Tax</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> <img width="60" src="themes/images/products/4.jpg" alt=""/></td>
                        <td>MASSA AST<br/>Color : black, Material : metal</td>
                        <td>
                            <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
                        </td>
                        <td>$120.00</td>
                        <td>$25.00</td>
                        <td>$15.00</td>
                        <td>$110.00</td>
                    </tr>
                    <tr>
                        <td> <img width="60" src="themes/images/products/8.jpg" alt=""/></td>
                        <td>MASSA AST<br/>Color : black, Material : metal</td>
                        <td>
                            <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
                        </td>
                        <td>$7.00</td>
                        <td>--</td>
                        <td>$1.00</td>
                        <td>$8.00</td>
                    </tr>
                    <tr>
                        <td> <img width="60" src="themes/images/products/3.jpg" alt=""/></td>
                        <td>MASSA AST<br/>Color : black, Material : metal</td>
                        <td>
                            <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
                        </td>
                        <td>$120.00</td>
                        <td>$25.00</td>
                        <td>$15.00</td>
                        <td>$110.00</td>
                    </tr>

                    <tr>
                        <td colspan="6" style="text-align:right">Total Price:	</td>
                        <td> $228.00</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right">Total Discount:	</td>
                        <td> $50.00</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right">Total Tax:	</td>
                        <td> $31.00</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right"><strong>TOTAL ($228 - $50 + $31) =</strong></td>
                        <td class="label label-important" style="display:block"> <strong> $155.00 </strong></td>
                    </tr>
                    </tbody>
                </table>


                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>
                            <form class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
                                    <div class="controls">
                                        <input type="text" class="input-medium" placeholder="CODE">
                                        <button type="submit" class="btn"> ADD </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    </tbody>
                </table>

                <table class="table table-bordered">
                    <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
                    <tr>
                        <td>
                            <form class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label" for="inputCountry">Country </label>
                                    <div class="controls">
                                        <input type="text" id="inputCountry" placeholder="Country">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPost">Post Code/ Zipcode </label>
                                    <div class="controls">
                                        <input type="text" id="inputPost" placeholder="Postcode">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn">ESTIMATE </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
                <a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
                <a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>

            </div>
        </div></div>
</div>
<!-- MainBody End ============================= -->
<?php
}
}
/* {/block "body"} */
}
