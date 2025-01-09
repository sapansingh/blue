
<!-- Footer Wrapper -->
<div id="footer-wrapper" itemscope="itemscope" itemtype="https://schema.org/WPFooter" role="banner">
<div class="container outer-container">
<div class="NewsFooter section" id="NewsFooter" name="Footer Info"><div class="widget Image" data-version="2" id="Image150">
<div class="widget-content">
<div class="footer-logo custom-image">
<a href="<?php echo $linkr;?>">
<img alt="Labwas" id="Image150_img" src="<?php echo $linkr;?>/BLUELOG.png">
</a>
</div>
<div class="about-content">
<div class="widget-title"><h3 class="title">About Us</h3></div>
<span class="image-caption"><?php echo $footertitle; ?></span>
</div>
</div>
</div><div class="widget LinkList" data-version="2" id="LinkList7">
<div class="widget-content">
<div class="widget-title"><h3 class="title">Follow Us</h3></div>
<ul class="social-footer social-bg">
<li class="facebook-f"><a class="facebook-f" href="<?php echo $facebook; ?>" rel="noopener noreferrer" target="_blank"></a></li>
<li class="twitter"><a class="twitter" href="<?php echo $twitter; ?>" rel="noopener noreferrer" target="_blank"></a></li>
<li class="youtube"><a class="youtube" href="<?php echo $youtube; ?>" rel="noopener noreferrer" target="_blank"></a></li>
<li class="instagram"><a class="instagram" href="<?php echo $instagram; ?>" rel="noopener noreferrer" target="_blank"></a></li>
<li class="reddit"><a class="reddit" href="<?php echo $reddit; ?>" rel="noopener noreferrer" target="_blank"></a></li>
</ul>
</div>
</div></div>
<div id="footer-container">
<div class="footer-NBogger-menu section" id="footer-NBogger-menu" name="Footer Menu"><div class="widget LinkList" data-version="2" id="LinkList8">
<div class="widget-content">
<ul>
<li><a href="/">Home</a></li>
<li>
                                    <a href="<?php echo $linkr."/home/about-us"?>">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $linkr."/home/Contact-us"?>">
                                        Contact us
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $linkr."/home/Privacy_Policy"?>">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $linkr."/home/Disclaimer"?>">
                                        Disclaimer
                                    </a>
                                </li>
</ul></div>
</ul>
</div>
</div>
</div>

</div>
</div>
</div>

<?php

mysqli_close($conn);
?>