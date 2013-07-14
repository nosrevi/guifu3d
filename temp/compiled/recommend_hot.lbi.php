<?php if ($this->_var['hot_goods']): ?>
 
 
 
 
  <div class="cat_tit"> <span><a href="search.php?intro=hot" >热卖商品</a></span> <a  href="search.php?intro=hot">更多>></a>   </div>
 

<div style="border-left:1px solid #e1e1e1; width:959px; float:left" class="pro_box">
 <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['hot_goods']['iteration']++;
?>
 
  <div class="goodsItem"  <?php if (($this->_foreach['hot_goods']['iteration'] - 1) % 2 == 0): ?>
            style='width:225px'
            <?php endif; ?> >
         
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg"  /></a><br />
           <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p> 
          
          <?php if ($this->_var['goods']['promote_price'] != ""): ?>
						
                       <font class="f1"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
                        <?php else: ?>
                      <font class="f1"><?php echo $this->_var['goods']['shop_price']; ?></font><br />
                        <?php endif; ?>
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<div class="blank"></div>
<?php endif; ?>
