<?php
?>
<header class="am-topbar header">
  <div class="am-container-1">
        <div class="left hw-logo">
            <img class=" logo" src="<?php echo base_url() ;?>static/images/h.png" >

        </div>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
                data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
                class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">


		    <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
		      <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
		      <li ><a href="<?php echo base_url() ;?>index.php/cy/index.html" <?php if($flag==1){echo 'style="color:#FFCC00"' ;} ?> >首页</a></li>
		      <li ><a href="<?php echo base_url() ;?>index.php/cy/solutions.html"  <?php if($flag==2){echo 'style="color:#FFCC00"' ;} ?>>核心优势</a></li>
		      <li><a href="<?php echo base_url() ;?>index.php/cy/product.html"  <?php if($flag==3){echo 'style="color:#FFCC00"' ;} ?>>天信产品 </a></li>
		      <li><a href="<?php echo base_url() ;?>index.php/cy/about.html"  <?php if($flag==4){echo 'style="color:#FFCC00"' ;} ?>>关于我们</a></li>
		      <li><a href="<?php echo base_url() ;?>index.php/cy/recruit.html"  <?php if($flag==5){echo 'style="color:#FFCC00"' ;} ?>>招贤纳士 </a></li>
		    </ul>
		    </div>

  		</div>
  
  </div>
  </header>