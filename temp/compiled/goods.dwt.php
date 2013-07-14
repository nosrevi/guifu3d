<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
    <link rel="stylesheet" href="assets/css/flexslider.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">

    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700' rel='stylesheet' type='text/css'>
    
    <link href="assets/css/style2.css" rel="stylesheet">
    
    <link href="assets/css/orange.css" rel="stylesheet">  
    
    <!-- <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->
    

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themes/default/js/action.js"></script>
<script type="text/javascript" src="themes/default/js/mzp-packed-me.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

  <?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block clearfix">
 
  

   
   <div id="goodsInfo" class="clearfix">
   
     
     <div class="imgInfo">
	 <div class="imgInfo_img">
     <a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" id="zoom1" class="MagicZoom MagicThumb" title="<?php echo $this->_var['goods']['goods_style_name']; ?>">
      <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="350px;" height="350px" style="border:none;"/>
     </a>
	 </div>
     <div class="blank5"></div>
    <div style="text-align:center; position:relative; width:100%;">
         <?php if ($this->_var['prev_good']): ?>
      <a href="<?php echo $this->_var['prev_good']['url']; ?>"><img style="position: absolute; left:0;" alt="prev" src="themes/default/images/up.gif" /></a>
      <?php endif; ?>
      <a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;"><img alt="zoom" src="themes/default/images/zoom.gif" /></a>
      <?php if ($this->_var['next_good']): ?>
      <a href="<?php echo $this->_var['next_good']['url']; ?>"><img style="position: absolute;right:0;"  alt="next" src="themes/default/images/down.gif" /></a>
      <?php endif; ?>
      </div>
      
 
         <div class="blank5"></div>
           
     <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
     
         
     
     </div>
     
     <div class="textInfo">
     <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		 <div class="clearfix" style="font-size:14px; font-weight:bold; padding-bottom:8px;">
      <?php echo $this->_var['goods']['goods_style_name']; ?>
      
			</div>
      <ul>
       <?php if ($this->_var['promotion']): ?>
      <li class="padd">
      <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php echo $this->_var['lang']['activity']; ?>
      <?php if ($this->_var['item']['type'] == "snatch"): ?>
      <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
      <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "auction"): ?>
      <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['auction']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
      <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
      <?php endif; ?>
      <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="font-weight:100; color:#006bcd;"><?php echo $this->_var['item']['act_name']; ?></a><br />
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </li>
      <?php endif; ?> 
       <?php if ($this->_var['cfg']['show_goodssn']): ?>
      <li class="clearfix">
       <dd>
     
       <strong><?php echo $this->_var['lang']['goods_sn']; ?></strong><?php echo $this->_var['goods']['goods_sn']; ?>
      
       </dd>
       </li> 
        <?php endif; ?>
       <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
       <li class="clearfix">
       <dd>
      
        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
          <strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
          <font color='red'><?php echo $this->_var['lang']['stock_up']; ?></font>
        <?php else: ?>
          <strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
          <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?>
        <?php endif; ?>
     
       </dd>
       </li>  
       <?php endif; ?>
       <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
      <li class="clearfix">
       <dd>
      
       <strong><?php echo $this->_var['lang']['goods_brand']; ?></strong><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>
    
       </dd>
       </li>  
        <?php endif; ?>
        <?php if ($this->_var['cfg']['show_goodsweight']): ?>
       <li class="clearfix">
       <dd>
       
       <strong><?php echo $this->_var['lang']['goods_weight']; ?></strong><?php echo $this->_var['goods']['goods_weight']; ?>
       
       </dd>
      </li>
      <?php endif; ?>  
       <?php if ($this->_var['cfg']['show_addtime']): ?>
      <li class="clearfix">
       <dd>
    
      <strong><?php echo $this->_var['lang']['add_time']; ?></strong><?php echo $this->_var['goods']['add_time']; ?>
      
       </dd>
       </li>
       <?php endif; ?>
       <li class="clearfix">
       <dd>
       
       <strong><?php echo $this->_var['lang']['goods_click_count']; ?>：</strong><?php echo $this->_var['goods']['click_count']; ?>
       </dd>
      </li>
      <li class="clearfix">
       <dd>
       <?php if ($this->_var['cfg']['show_marketprice']): ?>
       <strong><?php echo $this->_var['lang']['market_price']; ?></strong><font class="market"><?php echo $this->_var['goods']['market_price']; ?></font><br />
       <?php endif; ?>
       
       <strong><?php echo $this->_var['lang']['shop_price']; ?></strong><font class="shop" id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></font><br />
       <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
       <strong><?php echo $this->_var['rank_price']['rank_name']; ?>：</strong><font class="shop" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['price']; ?></font><br />
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </dd>
       </li>
       <li class="clearfix">
       <dd>
       <strong><?php echo $this->_var['lang']['goods_rank']; ?></strong>
      <img src="themes/default/images/stars<?php echo $this->_var['goods']['comment_rank']; ?>.gif" alt="comment rank <?php echo $this->_var['goods']['comment_rank']; ?>" />
       </dd>
      </li>

      <?php if ($this->_var['volume_price_list']): ?>
      <li class="padd">
       <font class="f1"><?php echo $this->_var['lang']['volume_price']; ?>：</font><br />
			 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#aad6ff">
				<tr>
					<td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
					<td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['preferences_price']; ?></strong></td>
				</tr>
				<?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
				<tr>
					<td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
					<td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	     </table>
      </li>
      <?php endif; ?>

      <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
      <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
      <li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc;">
      <strong><?php echo $this->_var['lang']['promote_price']; ?></strong><font class="shop"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
      <strong><?php echo $this->_var['lang']['residual_time']; ?></strong>
      <font class="f4" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font><br />
      </li>
      <?php endif; ?>
      <li class="clearfix">
       <dd>
       <strong><?php echo $this->_var['lang']['amount']; ?>：</strong><font id="ECS_GOODS_AMOUNT" class="shop"></font>
       </dd>
       </li>
       <?php if ($this->_var['goods']['give_integral'] > 0): ?>
       <li class="clearfix">
       <dd >
       
        <strong><?php echo $this->_var['lang']['goods_give_integral']; ?></strong><font class="f4"><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></font>
        
       </dd>
      </li>
      <?php endif; ?>
      <?php if ($this->_var['goods']['bonus_money']): ?>
      <li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc;">
      <strong><?php echo $this->_var['lang']['goods_bonus']; ?></strong><font class="shop"><?php echo $this->_var['goods']['bonus_money']; ?></font><br />
      </li>
      <?php endif; ?>
      <li class="clearfix">
       <dd>
       <strong><?php echo $this->_var['lang']['number']; ?>：</strong>
        <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; "/>
       </dd>
       </li>
      
       <?php if ($this->_var['cfg']['use_integral']): ?>

        <li class="clearfix">
       <dd>
       <strong><?php echo $this->_var['lang']['goods_integral']; ?></strong><font class="f4"><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></font>
       </dd>
      </li>
       <?php endif; ?>
       
      <?php if ($this->_var['goods']['is_shipping']): ?>
      <li style="height:30px;padding-top:4px;">
      <?php echo $this->_var['lang']['goods_free_shipping']; ?><br />
      </li>
      <?php endif; ?>
      
      <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
      <li class="padd loop">
      <strong><?php echo $this->_var['spec']['name']; ?>:</strong>
        
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                      <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                        <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
                        <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                        <?php else: ?>
                        <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                          <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                      <?php endif; ?>
                    <?php else: ?>
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                      <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                      <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
      <li class="padd">
      <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/goumai2.gif" /></a>
      <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/shoucang2.gif" /></a>
      <?php if ($this->_var['affiliate']['on']): ?>
      <a href="user.php?act=affiliate&goodsid=<?php echo $this->_var['goods']['goods_id']; ?>" ><img src="themes/default/images/tuijian.gif" /></a>
      <?php endif; ?>
      </li>
     
      </ul>
      </form>
     </div>
   </div>
   <div class="blank"></div>
    <div class="blank"></div>
	 <div class="blank"></div>
	  <div class="blank"></div>
   
   
   
   
  <div class="AreaL">


    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
   
    <div class="AreaR">
     <div class="box">
     <div class="box_1">
      <h3 style="padding:0 5px; overflow:hidden">
        <div id="com_b" class="history clearfix">
        <h2><?php echo $this->_var['lang']['goods_brief']; ?></h2>
        <h2 class="h2bg"><?php echo $this->_var['lang']['goods_attr']; ?></h2>
        <?php if ($this->_var['package_goods_list']): ?>
        <h2 class="h2bg" style="color:red;"><?php echo $this->_var['lang']['remark_package']; ?></h2>
        <?php endif; ?>
        </div>
      </h3>
      <div id="com_v" style="padding: 10px;"></div>
      <div id="com_h">
       <blockquote>
        <?php echo $this->_var['goods']['goods_desc']; ?>
       </blockquote>

     <blockquote>
      <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <tr>
          <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
        </tr>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
     </blockquote>

     <?php if ($this->_var['package_goods_list']): ?>
     <blockquote>
       <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods']):
?>
			  <strong><?php echo $this->_var['package_goods']['act_name']; ?></strong><br />
        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
				<tr>
					<td bgcolor="#FFFFFF">
					<?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['goods_list']):
?>
					<a href="goods.php?id=<?php echo $this->_var['goods_list']['goods_id']; ?>" target="_blank"><font class="f1"><?php echo $this->_var['goods_list']['goods_name']; ?></font></a> &nbsp;&nbsp;X <?php echo $this->_var['goods_list']['goods_number']; ?><br />
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</td>
					<td bgcolor="#FFFFFF">
					<strong><?php echo $this->_var['lang']['old_price']; ?></strong><font class="market"><?php echo $this->_var['package_goods']['subtotal']; ?></font><br />
          <strong><?php echo $this->_var['lang']['package_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['package_price']; ?></font><br />
          <strong><?php echo $this->_var['lang']['then_old_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['saving']; ?></font><br />
					</td>
					<td bgcolor="#FFFFFF">
					<a href="javascript:addPackageToCart(<?php echo $this->_var['package_goods']['act_id']; ?>)" style="background:transparent"><img src="themes/default/images/bnt_buy_1.gif" alt="<?php echo $this->_var['lang']['add_to_cart']; ?>" /></a>
					</td>
				</tr>
	    </table>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </blockquote>
     <?php endif; ?>

      </div>
     </div>
    </div>
    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
	
  <div class="blank"></div>
  
  
<?php echo $this->fetch('library/goods_tags.lbi'); ?>
<?php echo $this->fetch('library/bought_goods.lbi'); ?>
 <?php echo $this->fetch('library/bought_note_guide.lbi'); ?>
<?php echo $this->fetch('library/comments.lbi'); ?>

  
  </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
</html>
