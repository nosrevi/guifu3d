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
    

    <link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_body">

 <?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="wrap">


<!-- <div class="block clearfix" > -->
<div class="clearfix" >

   
    <div class="box clearfix">
    
       <?php echo $this->fetch('library/index_ad.lbi'); ?>
      
    </div>
    
    <div class="blank"></div>
    
    
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
<?php echo $this->fetch('library/recommend_new.lbi'); ?>
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

 
     <div class="blank"></div>
  
<?php echo $this->fetch('library/tupian_bottom2.lbi'); ?>
  
     
<?php echo $this->fetch('library/order_query.lbi'); ?>

  
</div>
   
<div class="blank"></div>
  
<?php echo $this->fetch('library/page_footer.lbi'); ?>

</div>


<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/jquery.tweet.js"></script>
<script src="assets/js/jflickrfeed.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/js/jquery.ui.map.min.js"></script>
<script src="assets/js/jquery.quicksand.js"></script>
<script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/scripts.js"></script>


</body>
</html>
