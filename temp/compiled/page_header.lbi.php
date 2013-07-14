<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.3.2.min.js,jquery.json-1.3.js')); ?>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>


<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="index.php">鬼斧3D</a>
      <div class="nav-collapse collapse">
            <ul class="nav pull-right">

              <li>
                <a href="index.php">首页</a>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
                
                <ul class="dropdown-menu expanded-menu">
                            
                            <li class="menu-header">
                              <h5>Menu Heading</h5>
                            </li>
                            
                            <li class="menu-body">
                              
                              <div class="row-fluid">
                                <div class="span6">
                                  <h6>Something Here</h6>
                                  <ul>
                                    <li><a href="#">Condimentum</a></li>
                                    <li><a href="#">Etiam at</a></li>
                                    <li><a href="#">Fusce vel</a></li>
                                    <li><a href="#">Vivamus</a></li>
                                    <li><a href="#">Pellentesque</a></li>
                                  </ul>
                                </div>
                                <div class="span6">
                                  <h6>Something Here</h6>
                                  <ul>
                                    <li><a href="#">Condimentum</a></li>
                                    <li><a href="#">Etiam at</a></li>
                                    <li><a href="#">Fusce vel</a></li>
                                    <li><a href="#">Vivamus</a></li>
                                    <li><a href="#">Pellentesque</a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            
                            <li class="menu-footer">
                              <div class="pull-left">
                                Something Goes Here<br />
                                Write something here also
                              </div>
                              <div class="pull-right">
                                <a href="#" class="btn">Button Here</a>
                              </div>
                              <div class="clearfix"></div>
                            </li>
                </ul>
              </li> 

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="aboutus2.html">About Us</a></li>
                  <li><a href="404.html">404</a></li>
                  <li><a href="blog2.html">Blog</a></li>
                  <li><a href="comingsoon.html">Coming Soon</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="landingpage.html">Landing Page</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="register.html">Register</a></li>
                  <li><a href="resume.html">Resume</a></li>
                  <li><a href="support.html">Support</a></li>
                  <li><a href="features.html">Features</a></li>
                  <li><a href="tasks.html">Tasks</a></li>
                </ul>
              </li>   

                   <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
              <li>
                <a href="<?php echo $this->_var['nav']['url']; ?>"><?php echo $this->_var['nav']['name']; ?></a>
              </li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <li>
                <a href="contactus1.html">联系我们</a>
              </li>
    <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" style=" float:right;">
	
	
	 
          <div class="B_input_box">
          
                  <input name="keywords" type="text" id="keyword" value=" 输入您要找的..." onclick="javascript:this.value=''" class="B_input"/>
          
           </div>
   
           <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;" />
  
   </form>
 
  
         <li class="header_menu_top_cart">
   
             <div   class="buy_car_bg clearfix">
	
	               <img src="themes/default/images/shoppingcart_sicon.png"  width="15" height="15" style="float:left" />
    
	               <div id="ECS_CARTINFO" style=" float:left; margin-top:1px; margin-left:5px">

                          <p><a href="flow.php"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a></p>
           
                   </div>
    
	         </div>
      
	     </li>
	  
	                                    <?php if ($this->_var['navigator_list']['top']): ?>
         <li id="topNav" class="clearfix">
               <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
               <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></font>
    
         </li>
           
            <?php endif; ?>  
    
 
	 <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
            </ul>
      </div>
    </div>
  </div>
</div>

<!--
<div class="block header_bg" >

       <div class="main">
       
             <div class="f_l mainNav_l"></div>
       
             <div class="f_l logo"><a href="index.php"></a></div>
 
	         <div id="mainNav" class="clearfix" > 
             
                   <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'">
               <a class="a1" href="index.php"  <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?>   <?php endif; ?>><?php echo $this->_var['lang']['home']; ?> </a>
         </ul>
  
                   <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1" <?php if ($this->_var['nav']['active'] == 1): ?>  id="aa_on" <?php endif; ?>  href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
  
  	<?php if ($this->_var['nav']['cat_list']): ?>
		
		
	<?php endif; ?>
  
  
  </ul>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
             </div>
             
             <div class="f_r mainNav_r"></div>
             
             <div  class="blank"></div>
             
             

       </div>
       
         <div  class="blank"></div>
             
<ul class="header_menu_top">
  
  
         
  
  
    <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" style=" float:right;">
	
	
	 
          <div class="B_input_box">
          
                  <input name="keywords" type="text" id="keyword" value=" 输入您要找的..." onclick="javascript:this.value=''" class="B_input"/>
          
           </div>
   
           <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;" />
  
   </form>
 
  
         <li class="header_menu_top_cart">
   
             <div   class="buy_car_bg clearfix">
	
	               <img src="themes/default/images/shoppingcart_sicon.png"  width="15" height="15" style="float:left" />
    
	               <div id="ECS_CARTINFO" style=" float:left; margin-top:1px; margin-left:5px">

                          <p><a href="flow.php"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a></p>
           
                   </div>
    
	         </div>
      
	     </li>
	  
	                                    <?php if ($this->_var['navigator_list']['top']): ?>
         <li id="topNav" class="clearfix">
               <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
               <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></font>
    
         </li>
           
            <?php endif; ?>  
    
 
	 <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
	  
	
   
           

                                        
   </ul>
       <div  class="blank"></div>

</div>
-->
