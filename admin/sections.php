<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php
if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    mysqli_query($db_conn, "INSERT INTO section (title) VALUE ('$title')") or die;
}
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Sections</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">admin</a></li>
                    <li class="breadcrumb-item active">Sections</li>

                </ol>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">

        <!-- Info boxes -->


        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="card-title">
                            Sections
                        </h3>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive bg-white">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Name</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;

                                    $query = mysqli_query($db_conn, 'SELECT * FROM section');
                                    while ($sections = mysqli_fetch_object($query)) { ?>

                                        <tr>
                                            <td><?= $count++ ?></td>
                                            <td><?= $sections->title ?></td>
                                            <td></td>

                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="card-title">
                            Add New section
                        </h3>
                        <div class="card-body">
                            <div class="table-responsive bg-white">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" placeholder="Title" required class="form-control">
                                    </div>

                            </div>

                            <button name="submit" class="btn btn-success float-right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>

<?php include('footer.php') ?>