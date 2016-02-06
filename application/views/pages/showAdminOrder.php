
<title>Undelivered Pizzas</title>
        <script type="text/javascript">
            function deliver(method,gotoid) {
                    window.location="<?php echo base_url();?>index.php/orders/"+method+"/"+gotoid;
            }
                
        </script>
</head>
<body>
    <h3>Undelivered Pizzas for <?php echo $_SESSION['date']; ?></h3>
<table id="OpenOrders">
    <tr>
        <th>Order #</th>
        <th>Time of Order</th>
        <th>Name</th>
        <th colspan="2">Address</th>
        <th>Phone</th>
        <th>Pizza description</th>
        <th>Total</th>
        <!-- <th>Completed</th> -->
        <th> Action</th>
    </tr>

        <?php foreach ($openOrder as $orKey) { 
            if ($orKey->completed == "n") {?>
    <tr>
        <td><?php echo $orKey->orderID; ?></td>
        <td><?php echo $orKey->time; ?></td>
        <td><?php echo $orKey->custFName. " " . $orKey->custLName; ?></td>
        <td><?php echo $orKey->custAddress. " " . $orKey->custAptNo; ?></td>
        <td><?php echo $orKey->custCity. ", " . $orKey->custState. " " . $orKey->custZip; ?></td>
        <td><?php echo $orKey->custPhone; ?></td>
        <td><?php echo $orKey->pizzaDesc; ?></td>
        <td><?php echo $orKey->priceTotal; ?></td>
       <!--  <td><?php echo $orKey->completed; ?></td> -->
        <td userID="40" align="left" ><a href="#" onClick="deliver('deliver',<?php echo $orKey->orderID; ?>)">Deliver</a></td>
    </tr>
        <?php }} ?>
        <tr>
        <td colspan="2" id="insert"> <a href="<?php echo base_url();?>index.php/orders/justDelivered">List Delivered Pizzas for Today</a></td>
        <td colspan="3"> <a href="<?php echo base_url();?>index.php/orders/allDelivered">List All Delivered Pizzas</a></td>
        <td colspan="3"> <a href="<?php echo base_url();?>index.php/admin/chkLevel">Administrator's List</a></td>
        <td><a href="<?php echo base_url() . 'index.php/admin/logout' ?>">Logout</a></td>
        </tr>
</table>

<!-- this shows what is saved in sessions -->
<?php 
    // echo '<pre>';
    // print_r($this->session->all_userdata()); 
    // echo '</pre>';

  ?>
</body>
</html>