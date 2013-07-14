
<?php if ($this->_var['user_info']): ?>

<b style="float:left; color:#999999; padding-right:10px; padding-top:19px;">你好，<a href="user.php"><?php echo $this->_var['user_info']['username']; ?></a></b>
<b class="topnav_b" style="padding-left:0;"> <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a></b>

<?php else: ?>
   <a href="user.php" style=" float:left">登录</a><a  style="border:none; padding-right:0px; float:left"href="user.php?act=register">注册</a>
<?php endif; ?>