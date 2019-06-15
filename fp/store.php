<?php
include ("includes/header.php");
?>

   <!-- selectmenu widget  -->
   <script>
      $("#select").selectmenu({
                icons: { button: "ui-icon-arrowthick-1-s" }
            }) .selectmenu("menuWidget")
  </script>




<div class="gallery-ex">
<h2>Product Gallery</h2><br>

<div class="responsive">
  <div class="gallery">
  
      <label>Candy Cane <span class="price">($10c)</span>:</label>
      <br><br><img alt="Marshmallow" src="img/Pastel-Fluffy-Marshmallow-Sweet-Spiral-2572978_50.jpg">
      <p>Quantity: <select id="cc">
    <?php 
      for($i=5; $i<=10; $i++) {
          echo "<option value=".$i.">".$i."</option>";
        } 
    ?>   
    </select> </p>
  </div>
    </div>


<div class="responsive">
  <div class="gallery">
      <label>Product 1 <span class="price">($25c)</span>:</label>
      <br><br><img alt="Marshmallow" src="img/Pastel-Fluffy-Marshmallow-Sweet-Spiral-2572978_50.jpg">
      <p>Quantity: <select id="one">
    <?php 
      for($i=5; $i<=10; $i++) {
          echo "<option value=".$i.">".$i."</option>";
        } ?>   
</select> </p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <label>Product 2 <span class="price">($5c)</span>:</label>
      <br><br><img alt="Marshmallow" src="img/Pastel-Fluffy-Marshmallow-Sweet-Spiral-2572978_50.jpg">
      <p>Quantity: <select id="two">
    <?php 
      for($i=5; $i<=10; $i++) {
          echo "<option value=".$i.">".$i."</option>";
        } ?>   
</select> </p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <label>Product 3 <span class="price">($10c)</span>:</label>
      <br><br><img alt="Marshmallow" src="img/Pastel-Fluffy-Marshmallow-Sweet-Spiral-2572978_50.jpg">
      <p>Quantity: <select id="three">
    <?php 
      for($i=5; $i<=10; $i++) {
          echo "<option value=".$i.">".$i."</option>";
        } ?>   
</select> </p>
  </div>
</div>


 <!-- clicking button triggers sum function -->
<p><button type="button" id="sum">Calculate</button></p>

<!-- output field -->
<p id="left">Total: <br>
  <input type="text"  id="total" readonly="readonly" /></p>
  

<!-- sum function -->
  <script>$("#sum").click(function (e) {
    
    // store values selected in variables
    let cc = ($("#cc").val());
    let one = ($("#one").val());
    let two = ($("#two").val());
    let three = ($("#three").val());
    
    //calculation with harded coded prices
    let result = ((parseFloat(cc)* 0.10 + parseFloat(one)* 0.25 + parseFloat(two)* 0.05 + parseFloat(three)* 0.10).toFixed(2));
    
    //print result to total
    $('#total').val("$" + result);
    
    });
  </script>
 

  <span class="price">* prices per unit.</span><br>
  
  <p id="right">
    <a href="form-success.html" class="button">
      REVIEW ORDER</a></p>

</div>           

<?php
include ("includes/footer.php");
?>