<?php if (empty ( $this->_var['order_query'] )): ?>
<script>var invalid_order_sn = "<?php echo $this->_var['lang']['invalid_order_sn']; ?>"</script>
<div class="box_dingdan" >
  
  <div class="boxCenterList">
    <form name="ecsOrderQuery">
    <input type="text" value="例如：订单" onclick="javascript:this.value=''"  name="order_sn" class="inputBg" style=" float:right" />
    <div class="blank5"></div>
    <input type="button" value="" class="bnt_blue_2" onclick="orderQuery()" />
    </form>
    <div id="ECS_ORDER_QUERY" style="margin-top:8px;">
      <?php else: ?>
      <?php if ($this->_var['order_query']['user_id']): ?>
<b><?php echo $this->_var['lang']['order_number']; ?>：</b><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['order_query']['order_id']; ?>" class="f6"><?php echo $this->_var['order_query']['order_sn']; ?></a><br>
  <?php else: ?>
<b><?php echo $this->_var['lang']['order_number']; ?>：</b><?php echo $this->_var['order_query']['order_sn']; ?><br>
  <?php endif; ?>
<b><?php echo $this->_var['lang']['order_status']; ?>：</b><br><font class="f1"><?php echo $this->_var['order_query']['order_status']; ?></font><br>
  <?php if ($this->_var['order_query']['invoice_no']): ?>
<b><?php echo $this->_var['lang']['consignment']; ?>：</b><?php echo $this->_var['order_query']['invoice_no']; ?><br>
  <?php endif; ?>
      <?php if ($this->_var['order_query']['shipping_date']): ?>：<?php echo $this->_var['lang']['shipping_date']; ?> <?php echo $this->_var['order_query']['shipping_date']; ?><br>
  <?php endif; ?>
  <?php endif; ?>
    </div>
  </div>
</div>
<div class="blank5"></div>
