<?php
session_start();
if (isset($_SESSION['adminid'])) {
    include_once 'config.php';
    include 'header.php';

if(isset($_POST['btnAdd']))
{
    $name=$_POST['txtname'];
    $status="Active";
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));

    $query="INSERT INTO `main_category`( `maincat_name`, `maincat_icon`, `maincat_image`, `maincat_status`) VALUES ('$name','$icon','$image','$status')";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:main_category.php').mysqli_error($conn);
    }else{
        echo "Record Not Inserted ".mysqli_error($conn);
    }
}

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
                                <li class="breadcrumb-item">Category</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Category</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Category Details</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                 <?php
                                $cquery = "select * from main_category";
                                $cresult = mysqli_query($conn, $cquery);
                                    while($crow=mysqli_fetch_assoc($cresult))
                                    {
                                    ?> 
                                <tr>
                                    <td><?php echo $crow['maincat_id'];?></td>
                                    <td><?php echo $crow['maincat_name'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($crow['maincat_icon']); ?>"width="100px" height="100px" /></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($crow['maincat_image']); ?>" width="100px" height="100px" /></td>
                                    <td><?php echo $crow['maincat_status'];?></td>
                                    <td><a href="product_category_edit.php?id=<?php echo $crow['maincat_id'];?>"class="btn btn-success">Edit</a> | <a href="product_category_delete.php?id=<?php echo $crow['maincat_id'];?>"class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Category : </label>
                            <input type="text" class="form-control" name="txtname" />

                            <br>
                            <input type="submit" class="btn btn-primary" value="Add Product" name="btnAdd" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <?php
    include 'footer.php';
} else {
    header('location:login.php');
}
    ?>