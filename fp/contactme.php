<?php 
//FP/contactme.php
?>

<?php
    include ("includes/header.php");
?>

<div class="form-row">
    <div class="column1of3">
        <h2 id="pageID">Send us a Message!</h2>
        <img class="contact" alt="egg-shaped candy" src="img/easter-2189402_1280_40.jpg">
        <p>Use the form on this page to ask us questions and make requests. We will get back to you within 48 business hours. We look forward to hearing from you!</p>
        <p id="price"><a href="https://pixabay.com/fr/photos/pâques-candy-pastels-oeufs-2189402/" title="Image Credit">&copy;</a></p>

</div>

    <div class="column2of3">
        <?php include ("includes/simple.php"); ?>
            <p class="clear-recaptcha"></p>
    </div>

    <div class="column3of3">
        <aside>
            Find Candy Store on social media:<br><br>
        <a href="https://twitter.com/" class="sm"><i class="fab fa-twitter"></i></a>  
        <a href="https://facebook.com/" class="sm"><i class="fab fa-facebook"></i></a>
        <a href="https://instagram.com/" class="sm"><i class="fab fa-instagram"></i></a>
        </aside>
    </div>
</div>

<?php
    include ("includes/footer.php");
?>