

<div class="slider">
    <div class="container">
        <div class="row">
            <div class="span10 offset1">
                <div class="flexslider">
                    <ul class="slides">
                        <?php $_from = $this->_var['slider_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row');if (count($_from)):
    foreach ($_from AS $this->_var['row']):
?>
                        <li>
                            <img src="<?php echo $this->_var['row']['src']; ?>" style="width:958px;height:460px">
                            <p class="flex-caption"><?php echo $this->_var['row']['text']; ?></p>
                        </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                    <ol class="flex-control-nav flex-control-paging">
                        <?php $_from = $this->_var['slider_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row');if (count($_from)):
    foreach ($_from AS $this->_var['row']):
?>
                        <li><a>1<?php echo $this->_var['row']['index']; ?></a>
                        </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>



<!--
<?php if ($this->_var['index_ad'] == 'sys'): ?>
  <script type="text/javascript">
  var swf_width=960;
  var swf_height=430;
  </script>
  <script type="text/javascript" src="data/flashdata/<?php echo $this->_var['flash_theme']; ?>/cycle_image.js"></script>
<?php elseif ($this->_var['index_ad'] == 'cus'): ?>
  <?php if ($this->_var['ad']['ad_type'] == 0): ?>
    <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['ad']['content']; ?>" width="960" height="430" border="0"></a>
  <?php elseif ($this->_var['ad']['ad_type'] == 1): ?>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="960" height="430">
      <param name="movie" value="<?php echo $this->_var['ad']['content']; ?>" />
      <param name="quality" value="high" />
      <embed src="<?php echo $this->_var['ad']['content']; ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="960" height="430"></embed>
    </object>
  <?php elseif ($this->_var['ad']['ad_type'] == 2): ?>
    <?php echo $this->_var['ad']['content']; ?>
  <?php elseif ($this->_var['ad']['ad_type'] == 3): ?>
    <a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank"><?php echo $this->_var['ad']['content']; ?></a>
  <?php endif; ?>
<?php else: ?>
<?php endif; ?>
-->
