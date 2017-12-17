<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>购物车_汽车之家</title>
		<link rel="stylesheet" type="text/css" href="/Public/css/autohome.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/autohome_car.css" />
		<script type="text/javascript" src="/Public/cjk/jquery.js"></script>
		<script type="text/javascript" src="/Public/cjk/vue.js"></script>
		<script type="text/javascript" src="/Public/cjk/jquery.form.min.js"></script>
		
		<script type="text/javascript" src="/Public/js/autohome_car.js"></script>
		<script type="text/javascript" src="/Public/js/autohome.js"></script>
	</head>
	<body>
		<!--头部-->
		<div class="header" >
				<div class="header_inner">
					<a class="autohome_logo" href="http://www.autohome.com.cn"></a>
					<div class="header_main">
						<ul class="header_login">
							<li>
								<a href="javascript:void(1)">admin，你好</a>
							</li>
							<li><a href="javascript:;">退出</a></li>
						</ul>
						<ul class="header_menu">
							<li><a href="javascript:;">|</a></li> 
							<li><a href="//trade.mall.autohome.com.cn/user/order/list.htm">我的订单</a></li> 
							<li><a href="//trade.mall.autohome.com.cn/user/order/list.htm">我的车商城</a></li> 
							<li><a href="javascript:;">|</a></li> 
							<li class="header_menu_attention">
								<a href="javascript:void(0)" target="_self">关注车商城</a> 
								<div class="header_menu_tip"> <div class="header_menu_img"> <img src="//x.autoimg.cn/mall/2015/pc/images/qrcode-3-551a1.png" alt=""> </div> 
								<div class="header_menu_tip_info"> <h3>关注车商城微信公众号</h3> <p> 一手掌握最新优惠信息 </p> </div> 
								<i class="icon"></i> 
								</div> 
							</li> 
							<li><a href="//seller.mall.autohome.com.cn/">开放平台</a></li> 
							<li><a href="//mall.autohome.com.cn/subject/2017/6/recruitment/">商家入驻</a></li> 
							<li><a href="javascript:;">|</a></li> 
							<li><a href="//www.autohome.com.cn/bug/default.aspx">意见反馈</a></li> 
						
						</ul>
					</div>
				</div>
			</div>
			<!--logo-->
		<div class="logo">
				<div class="logo-content">
					<div class="logo-content-a"> 
						<a class="logo-content-logo" href="//mall.autohome.com.cn" target="_self"></a> 
						<div id="double11-logo" class="header-atmosphere-logo" style="display: none;"></div> 
							
						<!--购物车--> 
						<div class="logo-content-cart fn-right" id="header-catt" style="display: none;"> 
							<a href="//trade.mall.autohome.com.cn/cart/list.htm" class="logo-content-cart-icon"> 
								<i class="icon icon-cart"></i> 
								<span class="header-cart-icon-txt">我的购物车(<span id="shoppingCount">0</span>)</span> 
								<i class="icon icon-link"></i> 
							</a> 
						</div> 
						<div class="searchouter" style="display: none;"> 
							<div class="search search01"> 
								<div class="search-box"> 
									<input class="search-text" autocomplete="off" data-placeholder="请输入关键字" value="请输入关键字" id="searchText"> 
										<i class="icon icon-search2"></i> 
								</div> 
								<a class="btn" href="javascript:;" id="btnSearch">搜&nbsp;索</a> 
								<div class="search-pop" id="searchPop" style="display: none;">
								<!--搜索关键字提示-->
								</div>
							</div> 
							<dl class="header-talk" id="p4"> 
								<dt>大家都在聊：</dt> 
								<dd id="s1531"><a href="javascript:;" target="_blank">高配途乐</a></dd>
								<dd id="s1532"><a href="javascript:;" target="_blank">豪车专场</a></dd>
								<dd id="s1533" style="" class="last"><a href="javascript:;" target="_blank">热门车</a></dd>
							</dl> 
						</div> 
					</div>
				</div>
			</div>
		<!--头部-->
		<!--content-->
			
		<div class="content">
			<!--全部商品-->
			<div class="shopingcart-total">全部商品 
	        		<span>
					<span id="totalNum">2</span>
				</span>
			</div>
			<!--购物车主体部分-->
			<div class="shopingcart-main">
	            <div class="shopingcart-thead fn-clear">
	                <div class="shopingcart-thead-box shopingcart-thead-checkbox">
	                    <label>
	                        <input type="checkbox" name="" value="" onclick="selectAll(this);" sel-all="1">
	                        <span>全选</span>
	                    </label>
	                </div>
	                <div class="shopingcart-thead-box shopingcart-thead-goods">商品信息</div>
	                <div class="shopingcart-thead-box shopingcart-thead-price">单价</div>
	                <div class="shopingcart-thead-box shopingcart-thead-quantity">数量</div>
	                <div class="shopingcart-thead-box shopingcart-thead-sum">金额</div>
	                <div class="shopingcart-thead-box shopingcart-thead-action">操作</div>
	            </div>
	
	            <!--购物车主体部分-->
	            <div class="shopingcart-tbody">
	            
	            	                
	                <div class="shopingcart-list">
	                	<!--店铺or促销title行-->
	                    <div class="shopingcart-shop fn-clear">
	                        <div class="shopingcart-shop-box shopingcart-shop-checkbox">
	                        	                            	<input type="checkbox" name="" value="" ct="seller" seller_id="seller_83179997" onclick="sellerChangeCheck(this,'seller_83179997');">
	                        	                        </div>
	                        <div class="shopingcart-shop-box shopingcart-shop-info">
	                            <a target="_self" href="#">三力德国名车</a>
	                            <a target="_self" href="#" class="shopingcart-shop-im"><img src="" alt=""></a>
	                        </div>
	                    </div>
	                    
	                                        
	                    <!--块内商品明细-->
	                                        <div class="shopingcart-itemlist">
	                    	                        <div class="shopingcart-itemlist-item fn-clear">
	                           <div class="shopingcart-itemlist-checkbox">
	                           		                           		                           		                                <input type="checkbox" name="" value="" ct="cart_item" cart_id="330480" seller_id="seller_83179997" exclusive="1" onclick="changeCheck(this,330480);">
	                            	                            </div>
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-goods">
	                            
	                            						            					                					                					                        
	                                <a target="_self" class="shopingcart-itemlist-link" href="//mall.autohome.com.cn/detail/463630-430100-0.html">
	                                    <div class="shopingcart-itemlist-img">
	                                    	                                    		<i class="icon-type icon-type-21"></i>
	                                    	                              
	                                        <img src="https://car2.autoimg.cn/cardfs/product/g21/M0F/68/B7/autohomecar__wKgFVVbG2ZGARKn6AAGAziw-qok651.jpg" alt="">
	                                    </div>
	                                    <div class="shopingcart-itemlist-info">
	                                        <div class="shopingcart-itemlist-name">大众 途观 2017款 300TSI 自动两驱丝绸之路风尚版</div>
	                                                                                <div class="shopingcart-itemlist-msg">
	                                        		                                            <span class="shopingcart-itemlist-msg-box">车身：极光白</span>
		                                            <span class="shopingcart-itemlist-msg-box">内饰：酷雅黑</span>
	                                        	                                        </div>
	                                                                                	                                        <div class="shopingcart-itemlist-loc">
		                                            	提车城市：长沙
		                                        </div>
	                                                                            </div>
	                                </a>
	                                                                
	                            </div>
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-price" id="cart_price_330480" cart_price_value="99.00">
	                                	<div>￥ 99.00</div>
	                                	                            </div>
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-quantity">
		                                <div class="quantity-form">
		                                			                                    <a target="_self" href="javascript:;" class="decrement " onclick="updateNum(330480,1);">-</a>
			                                    <input type="text" value="1" id="num_330480" onblur="updateNum(330480,0);" pre_num="1">
			                                    <a target="_self" href="javascript:;" class="increment " onclick="updateNum(330480,2);">+</a>
		                                		                                </div>
	                                	<div class="quantity-txt">
			                                		                                	库存紧缺
			                                                                	</div>
	
	                            </div>
	
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-sum" id="sum_price_330480" main_cart_id="330480" sum_price="99.00" off_sale="0">
	                                <strong id="sum_price_htm_330480">￥99.00</strong>
	                            </div>
	
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-action">
	                            	                                	<a target="_self" href="javascript:;" onclick="deleteCartItem(330480)">删除</a>
	                                                            </div> 
	
	                        </div>
	                                            </div>
	                                    </div>
	
					
	                <div class="shopingcart-list">
	                	<!--店铺or促销title行-->
	                    <div class="shopingcart-shop fn-clear">
	                        <div class="shopingcart-shop-box shopingcart-shop-checkbox">
	                        	                            	<input type="checkbox" name="" value="" ct="seller" seller_id="seller_83332119" onclick="sellerChangeCheck(this,'seller_83332119');">
	                        	                        </div>
	                        <div class="shopingcart-shop-box shopingcart-shop-info">
	                            <a target="_self" href="#">WEY</a>
	                            <a target="_self" href="#" class="shopingcart-shop-im"><img src="" alt=""></a>
	                        </div>
	                    </div>
	                    
	                                        
	                    <!--块内商品明细-->
	                                        <div class="shopingcart-itemlist">
	                    	                        <div class="shopingcart-itemlist-item fn-clear">
	                           <div class="shopingcart-itemlist-checkbox">
	                           		                           		                           		                                <input type="checkbox" name="" value="" ct="cart_item" cart_id="329067" seller_id="seller_83332119" exclusive="1" onclick="changeCheck(this,329067);">
	                            	                            </div>
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-goods">
	                            
	                            						            					                					                					                        
	                                <a target="_self" class="shopingcart-itemlist-link" href="//mall.autohome.com.cn/detail/495673-410100-0.html">
	                                    <div class="shopingcart-itemlist-img">
	                                    	                              
	                                        <img src="https://car2.autoimg.cn/cardfs/product/g23/M10/3B/34/autohomecar__wKgFV1muOayACE-BAAGAlgHTUek965.jpg" alt="">
	                                    </div>
	                                    <div class="shopingcart-itemlist-info">
	                                        <div class="shopingcart-itemlist-name">【11.11购车节】 WEY VV5 订购尊享多重礼遇</div>
	                                                                                                                    </div>
	                                </a>
	                                                                
	                            </div>
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-price" id="cart_price_329067" cart_price_value="99.00">
	                                	<div>￥ 99.00</div>
	                                	                            </div>
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-quantity">
		                                <div class="quantity-form">
		                                			                                    <a target="_self" href="javascript:;" class="decrement " onclick="updateNum(329067,1);">-</a>
			                                    <input type="text" value="1" id="num_329067" onblur="updateNum(329067,0);" pre_num="1">
			                                    <a target="_self" href="javascript:;" class="increment " onclick="updateNum(329067,2);">+</a>
		                                		                                </div>
	                                	<div class="quantity-txt">
			                                                                	</div>
	
	                            </div>
	
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-sum" id="sum_price_329067" main_cart_id="329067" sum_price="99.00" off_sale="0">
	                                <strong id="sum_price_htm_329067">￥99.00</strong>
	                            </div>
	
	                            <div class="shopingcart-itemlist-box shopingcart-itemlist-action">
	                            	                                	<a target="_self" href="javascript:;" onclick="deleteCartItem(329067)">删除</a>
	                                                            </div> 
	
	                        </div>
	                                            </div>
	                                    </div>
	
					            </div>
	        </div>
			<!--结算部分-->
			<div class="shopingcart-bar fixed-bottom">
	            <div class="shopingcart-bar-wrap fn-clear">
	                <div class="shopingcart-bar-box shopingcart-bar-select">
	                    <input type="checkbox" id="shopingcartBarSelectAll2" onclick="selectAll(this);" sel-all="1">
	                    <label for="shopingcartBarSelectAll2">全选</label>
	                </div>
	                <div class="shopingcart-bar-box shopingcart-bar-action">
	                    <a target="_self" class="shopingcart-bar-action-del" href="javascript:;" onclick="bulkDelete();return false;">删除</a>
	                </div>
	                <div class="shopingcart-bar-right fn-clear">
	                    <div class="shopingcart-bar-box shopingcart-bar-amount">
	                        已选<em id="submitNum">0</em>件商品
	                    </div>
	                    <div class="shopingcart-bar-box shopingcart-bar-price">总价：<strong id="submitPrice">￥0.00</strong></div>
	                    <div class="shopingcart-bar-box shopingcart-bar-btn" onclick="goSubmit();">去结算</div>
	                </div>
	            </div>
	        </div>
		
		</div>
		
			
		<!--footer-->
		<div id="footer"  class="footer"> 
				<div class="footer-content fn-clear"> 
					<div class="footer-logo"> 
						<a>
							<img src="//x.autoimg.cn/mall/2015/pc/images/logo-footer-e8f46.png" alt="">
						</a> 
					</div> 
					<span class="footer-line"></span> 
					<div class="footer-main"> 
						<div class="footer-main-content"> 
							<div class="footer-link"> 
								<div class="footer-link-title"> 关于我们 </div> 
								<ul> 
									<li><a href="//mall.autohome.com.cn/import/help4.html#11">关于车商城</a></li> <li><a href="//mall.autohome.com.cn/import/help4.html#13">车商城官方微信</a></li> 
									<li><a href="//club.autohome.com.cn/bbs/forum-o-200226-1.html">车商城论坛</a></li> <li><a href="//mall.autohome.com.cn/import/help4.html#13">联系我们</a>
										
									</li> 
								</ul> 
							</div> 
							<div class="footer-link"> 
								<div class="footer-link-title"> 购买指南 </div> 
								<ul> 
									<li><a href="//mall.autohome.com.cn/import/help5.html#1">一口价</a></li> <li><a href="//mall.autohome.com.cn/coupon/help2.html#1">抵扣券</a></li> 
									<li><a href="//mall.autohome.com.cn/import/help1.html#1">平行进口</a></li> <li><a href="//mall.autohome.com.cn/loan/help1.html#1">分期购车</a>
										
									</li> 
								</ul> 
							</div> 
							<div class="footer-link"> 
								<div class="footer-link-title"> 服务承诺 </div> 
								<ul> 
									<li><a href="//mall.autohome.com.cn/import/help1.html#16">超长质保</a></li> 
									<li><a href="//mall.autohome.com.cn/loan/help1.html#5">免手续费</a></li> 
									<li><a href="//mall.autohome.com.cn/import/help3.html#8">贴心上牌协助服务</a></li> 
								</ul> 
							</div> 
						</div> 
					</div> 
					<div class="footer-qrcode footer-qrcode-2"> 
						<img src="//x.autoimg.cn/mall/2015/pc/images/qrcode-2-4c12d.png" alt=""> 
							<p>关注车商城微信公众号</p> 
					</div> 
					<div class="footer-qrcode-downloadapp"> 
						<img src="//x.autoimg.cn/mall/2015/pc/images/201709/qrcode-7ed7b.png" alt=""> 
							<p>下载车商城App</p> 
					</div> 
				</div>
				
				
			</div>
		
		<div  class="copyright">
				<div class="copyright-content"> 
					<span>© 2004-2017 www.autohome.com.cn All Rights Reserved. 汽车之家 版权所有 ·此页面有广告</span> 
				</div>
		</div>
	</body>
</html>