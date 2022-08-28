<?php
echo "ID passed: " . $_GET['con_id'];

$query = "SELECT * FROM consultants WHERE consultant_id = '{$_GET['con_id']}' LIMIT 1";

$result = mysqli_query($connection, $query);

if ($result) { ?>
  <?php while ($record = mysqli_fetch_array($result)) {

    $_GET['c_id'] = $record['consultant_id'];
    $pro_id = $_GET['c_id']; //product id
    $prd_id = $record['consultant_id']; //product id

  ?>
    <!-- single product details -->
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="../../assets/uploads/profile_pics/<?php echo $record['image']; ?>" alt="<?php echo $record['firstName']; ?>" width="100%" id="ProductImg" />
        </div>

        <div class="col-2">
          <p>
            <?php echo $record['firstName'] ?>
          </p>
          <h1><?php echo $record['title'] ?></h1>
          <br>
          <h3>About Me</h3>
          <p><?php echo $record['description'] ?></p>
        </div>
      </div>
    </div>

<?php   }
}

?>