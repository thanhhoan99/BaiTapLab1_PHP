<?php
 $product_description =filter_input(INPUT_POST,'product_description');
 $list_price =filter_input(INPUT_POST, 'list_price');
 $discount_percent =filter_input(INPUT_POST ,'discount_precent');

 $discount = $list_price * $discount_percent * .01;
 $discount_price =$list_price-$discount;

 $list_price_F ="$".number_format($list_price,2);
 $discount_percent_f=$discount_percent."%";
 $discount_f="$".number_format($discount_price,2);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <main>
            <h1>Product Discount Calculator</h1>
            <form action="C2_ex1.php" method="post">
                <div>
            <label>Product Description</label><br>
            <span><?php echo htmlspecialchars($product_description); ?></span>

            <label>List price</label>
            <span><?php echo htmlspecialchars($list_price_F); ?></span><br>


            <label>Standard discount</label>
            <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>
            <label>Discount Amount</label>
            <span><?php echo htmlspecialchars($discount_f); ?></span><br>

            <label>Discount price</label>
            <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>
            </form>
        </main>
    </body>
</html>