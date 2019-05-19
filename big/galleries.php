<?php
include ("includes/header-b.php");
?>

<h2 class="pageID"><?=$pageID?></h2>
<div class="big">
 <p>
 Galleries have been important sections of websites from the beginning and are now inseparable from a good user experience. Due to that fact, they have been focus of intense development and customization and can be produced with html/css, Javascript (particularly jQuery). Tutorials and code snippets are endless.</p>

 <p>For the purpose of this research, I focused on product image gallery research as to support my Candy Store final project. Best Practice articles written by Naema Baskanderi and Jean Villa were particularly informative.</p>

 <p>"When purchasing an item at a physical store, we can ‘touch and feel’ the product that helps instill confidence in our purchase decision. However, shopping online loses this part of the experience. We, as designers, need to instill confidence in other ways. Photos are part of the solution." (Baskanderi, 2017).</p>

 <p>With that in mind and in an effort to exercise the addition of responsive features to my pages, I opted for the example of CSS-based responsive gallery provided by W3Schools. Also under consideration is the js-based <a href="http://kenwheeler.github.io/slick/" title="Slick">Slick</a>.</p><br>

<div class="gallery-ex">

<h2>Responsive Image Gallery</h2>
<h4>Resize the browser window to see the effect.</h4>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="./images/art-1869269_640.jpg">
      <img src="./images/art-1869269_640.jpg" alt="party balloons" width="600" height="400">
    </a>
    <div class="desc">Image description goes here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="./images/away-3024773_640.jpg">
      <img src="./images/away-3024773_640.jpg" alt="bridge" width="600" height="400">
    </a>
    <div class="desc">Image description goes here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="./images/plant-1985874_640.jpg">
      <img src="./images/plant-1985874_640.jpg" alt="cactus" width="600" height="400">
    </a>
    <div class="desc">Image description goes here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="./images/evening-55067_640.png">
      <img src="./images/evening-55067_640.png" alt="sunset" width="600" height="400">
    </a>
    <div class="desc">Image description goes here</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  <p>This example uses media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
</div>

</div>

</p>

<p><br><b>WORKS CITED</b></p>

<p class="source">Baskanderi, Naema. "Ecommerce UX: Best Practices Product Image Gallery" <i>UX Planet</i>, 24 Sep, 2017, <a href="https://uxplanet.org/ecommerce-ux-best-practices-product-image-gallery-e0ce6145d270" title="Ecommerce UX: Best Practices Product Image Gallery">https://uxplanet.org/ecommerce-ux-best-practices-product-image-gallery-e0ce6145d270</a> - last accessed on 10 May. 2019.</p>

<p class="source">Villa, Jean. "How to optimize your images for web: best practices for improved page speed and other SEO wizardry" <i>Impulsive Creative</i>, 4 Nov, 2018, <a href="https://www.impulsecreative.com/blog/optimize-your-images-for-web" title="How to optimize your images for web: best practices for improved page speed and other SEO wizardry">https://www.impulsecreative.com/blog/optimize-your-images-for-web</a> - last accessed on 10 May. 2019.</p>

<p class="source">CSS Image Gallery - W3Schools. <a href="https://www.w3schools.com/css/css_image_gallery.asp" title="CSS Image Gallery - W3Schools">https://www.w3schools.com/css/css_image_gallery.asp</a> - last accessed on 10 May. 2019. </p>

<p class="source">Slick. <a href="http://kenwheeler.github.io/slick/" title="Slick">http://kenwheeler.github.io/slick/</a> - last accessed on 10 May. 2019.</p>
<p>..</p>
<p class="source">Images credit: <a href="https://pixabay.com/" title="Pixabay">Pixabay</a></p>

</div>

<?php
include ("includes/footer.php");
?>