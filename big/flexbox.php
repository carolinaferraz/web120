<?php
include ("includes/header-b.php");
?>

<?php
include ("includes/config-b.php");
?>

<h2 class="pageID"><?=$pageID?></h2>
<div class="big">
 <p>"The Flexbox Layout (Flexible Box) module aims at providing a more efficient way to lay out, align and distribute space among items in a container, even when their size is unknown and/or dynamic (thus the word "flex").

 <p>The main idea behind the flex layout is to give the container the ability to alter its items' width/height (and order) to best fill the available space (mostly to accommodate to all kind of display devices and screen sizes). A flex container expands items to fill available free space, or shrinks them to prevent overflow." (<a href=" https://css-tricks.com/snippets/css/a-guide-to-flexbox/" title="A Complete Guide to Flexbox">source</a>) 

 <p>Flexbox sounds like a magic solution for one of the most common obstacles in producing a clean, well rounded layout: seamless adjustment of elements throughout browsers and devices.</p><br>

 <p><b>CSS Grid or Flexbox?</b></p>

<p>"- CSS Grid Layout is a two-dimensional system, meaning it can handle both columns and rows, unlike flexbox which is largely a one-dimensional system (either in a column or a row).</p>
<p>- A core difference between CSS Grid and Flexbox is that — CSS Grid’s approach is layout-first while Flexbox’ approach is content-first. 
If you are well aware of your content before making layout, then blindly opt for Flexbox and if not, opt for CSS Grid.</p>
<p>- Flexbox layout is most appropriate to the components of an application (as most of them are fundamentally linear), and small-scale layouts, while the Grid layout is intended for larger scale layouts which aren’t linear in their design.</p>
<p>- If you only need to define a layout as a row or a column, then you probably need flexbox. If you want to define a grid and fit content into it in two dimensions — you need the grid." (Gupta, 2018)</p>

<p>Many arguments can be found defending the implementation of one versus the other, pointing out their advantages and limitations. The project itself should lead the decision as different needs can be met with either method.
</p><br>

<p><br><b>WORKS CITED</b></p>

<p class="source">"A Complete Guide to Flexbox" <a href=" https://css-tricks.com/snippets/css/a-guide-to-flexbox/" title="A Complete Guide to Flexbox"> https://css-tricks.com/snippets/css/a-guide-to-flexbox/</a>  - last accessed on 18 May. 2019.</p>

<p class="source">Gupta, Ayush. "Beginner’s Guide To CSS Grid And Flexbox", <i>You Start Labs</i>, 15 Jun, 2018,  <a href="https://medium.com/youstart-labs/beginners-guide-to-choose-between-css-grid-and-flexbox-783005dd2412" title="Beginner’s Guide To CSS Grid And Flexbox"> https://medium.com/youstart-labs/beginners-guide-to-choose-between-css-grid-and-flexbox-783005dd2412</a>  - last accessed on 18 May. 2019.</p>


</div>


<?php
include ("includes/footer.php");
?>