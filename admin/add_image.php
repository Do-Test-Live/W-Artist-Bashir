<?php
session_start();
if(!isset($_SESSION['login_status'])){
    header("Location: index.php");
}
include("../config/dbconfig.php");
$result = 0;
if (isset($_POST['add_image'])) {
    $name = mysqli_real_escape_string($connection, $_POST['image_name']);
    $image_price = mysqli_real_escape_string($connection, $_POST['image_price']);
    $category_id = mysqli_real_escape_string($connection, $_POST['category_id']);
    $c_image = $_FILES['image']['name'];
    $image = "assets/img/art_works/$c_image";
    $c_image_temp = $_FILES['image']['tmp_name'];
    $imageFileType = strtolower(pathinfo($c_image, PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "wrong file extension";
    } else {
        if (move_uploaded_file($c_image_temp, "../assets/img/art_works/$c_image")) {
            $insert_job = $connection->query("INSERT INTO `port_image`(`category_id`, `image_name`, `price`, `image`) VALUES ('$category_id','$name','$image_price','$image')");
            if ($insert_job) {
                $result = 1;
            } else {
                $result = 2;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Abdullah Al Bashir</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
          rel="stylesheet">
</head>

<body>

<!--*******************
    Preloader start
********************-->
<!--<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>-->
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Artist Bashir</h2>
            </div>
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->


    <!--**********************************
        Header start
    ***********************************-->
   <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                <!-- <div class="header-info">
                                    <span class="text-black">Hello,<strong>Franklin</strong></span>
                                    <p class="fs-12 mb-0">Super Admin</p>
                                </div> -->
                                <img src="images/profile/17.jpg" width="20" alt=""/>
                            </a>
                          <!--  <div class="dropdown-menu dropdown-menu-right">
                                <a href="app-profile.html" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                         width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="ml-2">Profile </span>
                                </a>
                                <a href="email-inbox.html" class="dropdown-item ai-icon">
                                    <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                         width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <span class="ml-2">Inbox </span>
                                </a>
                                <a href="index.php" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                         width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>-->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <?php include("include/sidebar.php"); ?>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <h4>Upload Image</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Image</a></li>
                </ol>
            </div>
            <?php
            if ($result == 1) {
                ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                         stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <strong>Success!</strong> Image Insert Successful.
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                    class="mdi mdi-close"></i></span>
                    </button>
                </div>
                <?php
            } elseif ($result==2) {
                ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                         stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <polygon
                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                    <strong>Error!</strong> Something Wrong.
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                    class="mdi mdi-close"></i></span>
                    </button>
                </div>
                <?php
            } elseif (isset($_SESSION['status'])){
                ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                         stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <strong>Success!</strong> Data Update Successful.
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                    class="mdi mdi-close"></i></span>
                    </button>
                </div>
                <?php
                unset($_SESSION['status']);
            } elseif (isset($_SESSION ['delete'])){
            ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                     stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <polyline points="9 11 12 14 22 4"></polyline>
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                </svg>
                <strong>Success!</strong> Data Delete Successful.
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                </button>
            </div>
            <?php
            unset($_SESSION['delete']);
            }
            ?>

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Insert Upload Image </h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text">Category</label>
                                            </div>
                                            <div class="dropdown bootstrap-select default-select">
                                                <select class="default-select" tabindex="-98" name="category_id"
                                                        required>
                                                    <option disabled>Choose...</option>
                                                    <?php
                                                    $category_fetch = $connection->query("SELECT * FROM `category` WHERE status = 1");
                                                    if ($category_fetch->num_rows > 0) {
                                                        while ($data = mysqli_fetch_assoc($category_fetch)) {
                                                            ?>
                                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['category_name']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <input type="text" name="image_name" class="form-control mb-2"
                                                           placeholder="Image Name">
                                                </div>
                                                <div class="col-auto">
                                                    <div class="input-group mb-2">
                                                        <input type="number" name="image_price" class="form-control"
                                                               placeholder="Image Price">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary" name="add_image">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Image Data</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Image Title</th>
                                        <th>Image Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     $image_fetch=$connection->query("SELECT * FROM `port_image` order by id desc ");
                                     if($image_fetch->num_rows > 0){
                                         $sl = 1;
                                         while ($data = mysqli_fetch_assoc($image_fetch)){
                                             ?>
                                             <tr>
                                                 <td><?php echo $sl;?></td>
                                                 <td><?php echo $data ['image_name'];?></td>
                                                 <td><?php echo $data ['price'];?></td>
                                                 <td><img class="" width="35" src="../<?php echo $data['image'];?>" alt=""></td>
                                                 <td>
                                                     <div class="d-flex">
                                                         <a href="update.php?id=<?php echo $data ['id'];?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                     class="fa fa-pencil"></i></a>
                                                         <button class="btn btn-danger shadow btn-xs sharp" onClick="dlt();"><i
                                                                     class="fa fa-trash"></i></button>
                                                     </div>
                                                 </td>
                                                 <input type="hidden" value="<?php echo $data ['id']?>" id="data_id">
                                             </tr>
                                             <?php
                                             $sl++;
                                         }
                                     }
                                     ?>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


       <!-- modal area start-->
        <div class="modal" tabindex="-1" role="dialog" id="dlt_modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="delete.php" method="post">
                        <div class="modal-body">
                            <p>Do You Want To Delete This Data ??</p>
                        </div>
                        <input type="hidden" name="deletdata" class="form-control"
                               value="" id="modalinput">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" name="confirm_dlt">Yes</button>
                            <button type="button" class="btn btn-primary" onClick="close_modal();" data-dismiss="modal">No</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Abdullah Al Bashir</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->

<script>
    function dlt(){
        document.getElementById("dlt_modal").style.display = "block";
        let id = document.getElementById("data_id").value;
        document.getElementById("modalinput").value = id;

    }

    function close_modal(){
        document.getElementById("dlt_modal").style.display = "none";
    }

</script>
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>
<!-- Datatable -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>


</body>


<!-- Mirrored from welly.dexignzone.com/xhtml/blank.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 07:38:41 GMT -->
</html>