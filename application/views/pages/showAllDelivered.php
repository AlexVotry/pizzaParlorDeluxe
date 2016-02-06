
<title>All Delivered Pizzas</title>
        <script type="text/javascript">
            function deliver(method,gotoid) {
                    window.location="<?php echo base_url();?>index.php/orders/"+method+"/"+gotoid;
            }
                
        </script>
</head>
<body>
    <h3>All Delivered Pizzas </h3>
<table id="OpenOrders">
    <tr>
        <th>Order #</th>
        <th>Time of Order</th>
        <th>Name</th>
        <th colspan="2">Address</th>
        <th>Phone</th>
        <th>Pizza description</th>
        <th>Total</th>
        <th>Delivered By:</th>
    </tr>

        <?php foreach ($openOrder as $orKey) { 
            if ($orKey->completed == "y") {?>
    <tr>
        <td><?php echo $orKey->orderID; ?></td>
        <td><?php echo $orKey->time; ?></td>
        <td><?php echo $orKey->custFName. " " . $orKey->custLName; ?></td>
        <td><?php echo $orKey->custAddress. " " . $orKey->custAptNo; ?></td>
        <td><?php echo $orKey->custCity. ", " . $orKey->custState. " " . $orKey->custZip; ?></td>
        <td><?php echo $orKey->custPhone; ?></td>
        <td><?php echo $orKey->pizzaDesc; ?></td>
        <td><?php echo $orKey->priceTotal; ?></td>
        <td><?php echo $orKey->username; ?></td>
    </tr>
        <?php }} ?>
        <tr>
        <td colspan="2" id="insert"> <a href="<?php echo base_url();?>index.php/orders/justDelivered">List Delivered Pizzas for Today</a></td>
        <td colspan="3"> <a href="<?php echo base_url();?>index.php/orders/adminOrder">Back to Undelivered Pizzas </a></td>
        <td colspan="3"> <a href="<?php echo base_url();?>index.php/admin/addForm">Insert New User</a></td>
        <td><a href="<?php echo base_url() . 'index.php/admin/logout' ?>">Logout</a></td>
        </tr>
</table>
</body>
</html>