<?php
include ("includes/header.php");
?>

   <!-- selectmenu widget  -->
   <script>
      $("#select").selectmenu({
                icons: { button: "ui-icon-arrowthick-1-s" }
            }) .selectmenu("menuWidget")
  </script>
</head>


<body>
<div class="gallery-ex">
<h2>Product Gallery</h2><br>

<div class="responsive">
  <div class="gallery">
    <form>
      <label>Candy Cane <span id="price">($10c)</span>:</label>
      <i id="holder" class="fas fa-candy-cane"></i>
      <p><select id="cc">
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
      <label>Product 1 <span id="price">($25c)</span>:</label>
      <i id="holder" class="fas fa-candy-cane"></i>
      <p><select id="one">
    <?php 
      for($i=5; $i<=10; $i++) {
          echo "<option value=".$i.">".$i."</option>";
        } ?>   
</select> </p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <label>Product 2 <span id="price">($5c)</span>:</label>
      <i id="holder" class="fas fa-candy-cane"></i>
      <p><select id="two">
    <?php 
      for($i=5; $i<=10; $i++) {
          echo "<option value=".$i.">".$i."</option>";
        } ?>   
</select> </p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <label>Product 3 <span id="price">($10c)</span>:</label>
      <i id="holder" class="fas fa-candy-cane"></i>
      <p><select id="three">
    <?php 
      for($i=5; $i<=10; $i++) {
          echo "<option value=".$i.">".$i."</option>";
        } ?>   
</select> </p>
  </div>
</div>


 <!-- clicking button triggers sum function -->
<button type="button" id="sum">Calculate</button>

<!-- output field -->
<p id="left">Total: <br>
  <input type="button"  id="total" readonly="readonly" /></p>
  
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
  </form>

  <span id="price">* prices per unit.</span><br>
  
  <p id="right">
    <a href="form-success.html" class="button">
      CHECKOUT</a></p>

</div>           

<?php
include ("includes/footer.php");
?>