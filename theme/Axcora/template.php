<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } $innov_settings = Innovation_Settings(); include('header.inc.php'); ?> 
<div class="col-12 col-md-12 p-3">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 p-1 text-center text-light">
        <h1>
          <strong>
            <a href="<?php get_page_url(); ?>"> <?php get_page_title(); ?> </a>
          </strong>
        </h1><time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate> <?php get_page_date('F jS, Y'); ?> </time>
      </div>
    </div>
    <nav class="breadcrumb justify-content-center text-light">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php get_site_url(); ?>">Home </a>
        </li>
        <li class="breadcrumb-item"> <?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b> <?php get_page_clean_title(); ?> </b>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php get_site_url(); ?>" id="logo"> <?php get_site_name(); ?> </a>
        </li>
      </ol>
    </nav>
    <div class="p-md-5 card p-3 shadow" style="opacity:0.9">
	<?php get_page_content(); ?> </div>
  </div>
</div>
</div>
 <img class="img-fluid" alt="<?php get_page_title(); ?> " width="100%" src="data/uploads/barca.png"/><div class="row" style="background-image: url('data/uploads/argentinos.png'); background-repeat: no-repeat; background-position: center;">
		<div class="col-12 col-md-6 p-3 p-md-5">
		<div class="p-3 p-md-5 card shadow bg-dark text-light">
		<h3>Menu</h3><hr/>
		<ul>
		<li><a href="">Home Page</a></li>
		<li><a href="index.php?id=about-us">About Us</a></li>
		<li><a href="?id=our-services#start">Our Services</a></li>
		<li><a href="?id=our-products#start">Our Product</a></li>
		<li><a href="?id=contact-us#start">Contact Us</a></li>
		</ul>
		<hr/><d>copyrights <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>"> <?php get_site_name(); ?> </a> - built with <a href="https://axcora.com/getaxcoracms" target="_blank">getaxcoracms</a></d></div></div>
		<div class="col-12 col-md-6 p-0"><img class="img-fluid" alt="<?php get_page_title(); ?> " width="100%" src="data/uploads/leo.png"/></div></div><?php include('footer.inc.php'); ?>