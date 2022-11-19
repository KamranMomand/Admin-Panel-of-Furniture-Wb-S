<?php
session_start();
if (isset($_SESSION['adminid'])) {
    include_once 'config.php';
    include 'header.php';
    ?>


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Furniture</a></li>
                                <li class="breadcrumb-item active">Order</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Orders</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Order Details</h4>
                        <br>

                        <table>
                            <?php

                                        $or_query="SELECT * from `pro_order`";
                                        $or_result=mysqli_query($conn,$or_query);

                                        $u_query="SELECT * from `user`";
                                        $u_result=mysqli_query($conn,$u_query);
                                        $u_row=mysqli_fetch_assoc($u_result);
                                        while($o_row=mysqli_fetch_assoc($or_result))
                                        {
                                        ?>
                            <thead>
                                <tr>
                                    <th>Order Id: </th>
                                    <td><?php echo $o_row['order_id'];?></td>
                                    <th>Customer Name: </th>
                                    <td>&nbsp;<?php echo $u_row['user_name'];?></td>
                                    <th>Order Date: </th>
                                    <td><?php echo $o_row['order_date'];?></td>
                                    <th>Total Bill: </th>
                                    <td><?php echo $o_row['order_total'];?></td>
                                </tr>
                            </thead>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product Id</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product Name</th>
                                        <!-- <th scope="col">Product Category</th> -->
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Product Quantity</th>
                                        <!-- <th scope="col">Actions</th> -->

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //  join product_subcategory sc on p.category=sc.id join product_category c on sc.category=c.id
                                        // SELECT * from `order` o  join order_invoice i on o.id=i.id join product p on i.product_id=p.id join product_category c on p.category=c.id where o.id=".$o_row['id']
                                        $query="SELECT * from `pro_order` o join order_invoice i on o.order_id=i.inv_id  join product p on i.inv_id=p.pro_id where o.order_id=".$o_row['order_id'];
                                        $result=mysqli_query($conn,$query);
                                        while($row=mysqli_fetch_array($result))
                                        {
                                        ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['pro_id '];?></th>
                                        <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pro_img1']);?>"
                                                width="100px" height="100px" /></td>
                                        <td><?php echo $row['inv_pro_name'];?></td>
                                        <!-- <td><?php echo $row['category'];?> / <?php echo $row['subcategory'];?></td> -->
                                        <td><?php echo $row['inv_pro_price'];?></td>
                                        <td><?php echo $row['inv_pro_quantity'];?></td>



                                    </tr>
                                    <?php
                                        }
                                        ?>
                                </tbody>
                            </table>
                            <?php
                                        }
                                        ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <?php
        include 'footer.php';
    } else {
        header('location:login.php');
    }
        ?>