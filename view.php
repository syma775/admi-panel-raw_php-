<?php session_start() ?>
<?php require_once('style.php');?>
<?php require_once('header.php');?>
<?php require_once('sidebar.php');?>
<?php

require_once('config.php');


$slug = $_GET['slug'];

$query = "SELECT * FROM person WHERE slug = '$slug'";

$single_data = mysqli_query($conn,$query);

if(mysqli_num_rows($single_data)==0){
    header('location:person.php');
}

$single_data = mysqli_fetch_array($single_data);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all data</title>
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="margin-top:40px;">
                    <table class="table table-striped">
                        <tr>
                            <td>Name:</td>
                            <td><?php echo $single_data['your_name'];?></td>
                       </tr>
                       <tr>
                            <td>Email:</td>
                            <td><?php echo $single_data['email'];?></td>
                       </tr>
                       <tr>
                            <td>Phone:</td>
                            <td><?php echo $single_data['phone'];?></td>
                       </tr>
                       <tr>
                            <td>Date Of Birth:</td>
                            <td><?php echo $single_data['dob'];?></td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td><?php echo $single_data['country'];?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $single_data['gender'];?></td>
                        </tr>
                        <tr>
                            <td>Married:</td>
                            <td><?php echo $single_data['married'];?></td>
                        </tr>
                        <tr>
                            <td>Religion:</td>
                            <td><?php echo $single_data['religion'];?></td>
                        </tr>
                        <tr>
                            <td>Sports:</td>
                            <td><?php echo $single_data['sports'];?></td>
                        </tr>
                        <tr>
                            <td>Color:</td>
                            <td><?php echo $single_data['color'];?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</body>
</html>
<?php require_once('footer.php');?>

<?php require_once('script.php');?>