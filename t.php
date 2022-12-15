<div class="product-card">
  <a class="linkedPage" href="item.php?item_id=<?= $_GET['p_id'] ?>">
    <?php
    if ($record['discount'] > 0) {
    ?> <div class="badge">
        <strong><?php echo $record['discount'] ?>% OFF</strong>
      </div>
    <?php
    }
    ?>

    <div class="product-tumb">
      <img class="itemImage" src="../assets/uploads/products/<?php echo $record['product_img']; ?>" alt="<?php echo $record['product_name']; ?>">
    </div>
    <div class="product-details">
      <span class="product-catagory"><?php echo $record['product_brand'] ?></span>
      <div class="buyBtnBox"> <a class="buyBtn" href="purchase.php?item_id=<?= $_GET['p_id'] ?>"> Buy </a> </div>
      <h4>
        <p><?php echo $record['product_brand'] . " " . $record['product_name'] ?></p>
      </h4>
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p> -->
      <p><?php echo $record['qty'] ?> Items Available</p>
      <div class="product-bottom-details">
        <div class="product-price">$<?php echo $record['price'] ?></div>
        <div class="product-links">
          <a href="favFunction.php?item_id=<?= $_GET['p_id'] ?>"><i class="fa fa-heart"></i></a>
          <a href="cartFunction.php?item_id=<?= $_GET['p_id'] ?>"><i class="fa fa-shopping-cart"></i></a>
        </div>
      </div>
    </div>
  </a>
</div>