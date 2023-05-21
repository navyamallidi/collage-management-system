<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $sections = implode(',', $_POST['section']);
    $added_date = date('y-m-d');
    mysqli_query($db_conn, "INSERT INTO classes(title,section,added_date) VALUE ('$title','$sections','$added_date')") or die('dberror');
}
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Classes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">admin</a></li>
                    <li class="breadcrumb-item active">classes</li>

                </ol>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <?php
        if (isset($_REQUEST['action'])) {  ?>
            <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">
                        Add New Class
                    </h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" placeholder="Title" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Section</label>
                            <?php
                            $query = mysqli_query($db_conn, 'SELECT * FROM section');
                            $count = 1;
                            while ($sections = mysqli_fetch_object($query)) { ?>
                                <div>
                                    <label for="<?php echo $count++ ?>">
                                        <input type="checkbox" name="section[]" id="<?php echo $count++ ?>" value="<?= $sections->id ?>" placeholder="section">
                                        <?php echo $sections->title ?>
                                    </label>
                                </div>
                            <?php
                                $count++;
                            } ?>
                        </div>

                        <button name="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        <?php } else { ?>
            <!-- Info boxes -->
            <div class="card">
                <div class="card-header py-2">
                    <h3 class="card-title">
                        Classes
                    </h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-2"> Add New</i> </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive bg-white">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Name</th>
                                        <th>Section</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count=1;
                                    $cla_query = mysqli_query($db_conn, 'SELECT * FROM classes');
                                    while($class = mysqli_fetch_object($cla_query)) {?>
                                    <tr>
                                        <td><?=$count++?></td>
                                        <td><?=$class->title?></td>
                                        <td>
                                            <?php
                                            $sections = explode(',',$class->section);
                                            foreach($sections as $section){
                                                $sec_query = mysqli_query($db_conn,'SELECT * FROM section where id ='.$section.' ');
                                                $title = mysqli_fetch_object($sec_query);
                                                echo $title->title ;
                                            }
                                   
                                    ?>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
</section>

<?php include('footer.php') ?>