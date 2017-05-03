<br>

<?php


$limit=($sto-$sfrom)+1;


for ($i=1;$i<=$limit;$i++) {
    ?>

    <img class="barcode"
         jsbarcode-value="<?php echo $pid.$i?>"

         jsbarcode-textmargin="0"
         jsbarcode-textAlign="left"
         jsbarcode-fontSize="20"
         jsbarcode-fontOptions="bold"
         style=" height: <?php echo $heightt ?>px ;width: <?php echo $widthh ?>px; margin-bottom: 10px ">
    </img>

    <?php

}
?>

<script src="<?php echo base_url()?>/js/barcode.js"></script>


<script type="text/javascript">
    JsBarcode(".barcode").init();


</script>

