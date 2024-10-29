<?php
session_start();

if(empty($_SESSION['email'])){
    header('location:index.php');
}
require_once('config.php');

$sql = "SELECT * FROM person ORDER BY id ASC";

$query = mysqli_query($conn,$sql);

$persons = mysqli_fetch_array($query);

// while($persons = mysqli_fetch_array($query)){
//     print_r($persons['your_name']."<br>");
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tables</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
    <!-- Custom fonts for this template -->
    <?php require_once('style.php'); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once('sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once('header.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4"> <a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Students Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>your_name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                             if($persons==0){
                                

                            
                            ?>
                            <tr>
                                <td colspan="5"><?php echo("no data found");?></td>
                            </tr>
                            <?php
                            }
                           else{
                               while($persons = mysqli_fetch_array($query)){
                        
                            ?>
                            <tr>
                                <td><?php echo $persons['id']; ?></td>
                                <td><?php echo $persons['your_name']; ?></td>
                                <td><?php echo $persons['email']; ?></td>
                                <td><?php echo $persons['phone']; ?></td>
                                <!-- <td><?php echo $persons['dob']; ?></td>
                                <td><?php echo $persons['country']; ?></td>
                                <td><?php echo $persons['gender']; ?></td>
                                <td><?php echo $persons['married']; ?></td>
                                <td><?php echo $persons['religion']; ?></td>
                                <td><?php echo $persons['sports']; ?></td>
                                <td><?php echo $persons['color']; ?></td> -->
                                <td>
                                    <a href="view.php?slug=<?php echo $persons['slug']; ?>" class="btn btn-primary">View</a>
                                    <a href="edit.php?slug=<?php echo $persons['slug']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="delete.php?slug=<?php echo $persons['slug']; ?>" onclick="return confirm('are you sure?')" class="btn btn-primary">Delete</a>
                                
                                </td>
                            </tr>
                            <?php  } }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#mytable');
    </script>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           <?php require_once('footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php require_once('script.php');?>
    

</body>

</html>