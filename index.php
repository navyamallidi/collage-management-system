
<?php include('includes/config.php') ?>
<?php include('header.php') ?>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #fdeff9">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav ms-auto">
            <li class="nav-item dropdown">
<?php if(isset($_SESSION['login'])) { ?>
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">Reports</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
<?php } else { ?>
                    <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>login</a>
<?php } ?>
                </li>
            </ul>

        </div>
    </nav>

    <div class="d-flex shadow" style="height:500px;   background: linear-gradient(to right, #ffafbd, #ffc3a0);">
        <div class="container-fluid my-auto">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h1 class="display-3 text-white text-center ">CampusVue</h1>
                    <br>
                    <div class="text-center">
                        <a href="#" class="btn btn-lg btn btn-primary"> call to action</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="w-50 mx-auto  ">
                        <h3 class="text-center">Addmission Form</h3>
                        <form action="" method="post">
                            <div class="mb-form">
                                <label for="exampleFormControlTextarea1" class="form-label">Name</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                            <div class="mb-form">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-form">
                                <label for="exampleFormControlTextarea1" class="form-label">Mobile No</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about us -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold">About us</h2>
                    <div>
                        <p>Collage from the French: coller, "to glue" or "to stick together";
                            is a technique of art creation, primarily used in the visual arts, but in music too,
                            by which art results from an assemblage of different forms, thus creating a new whole.
                            A collage may sometimes include magazine and newspaper clippings, ribbons, paint, bits of colored or
                            handmade papers, portions of other artwork or texts, photographs and other found objects, glued to a
                            piece of paper or canvas. The origins of collage can be traced back hundreds of years, but this technique
                            made a dramatic reappearance in the early 20th century as an art form of novelty.The term Papier collé was coined by
                            both Georges Braque and Pablo Picasso in the beginning of the 20th century when collage became a distinctive part of
                            modern art.</p>
                    </div>
                    <a href="about-us.php" class="btn btn-secondary">know more</a>
                </div>
                <div class="col-lg-6" style="background:url(./resources/images/image6.jpg)">
                </div>
            </div>
        </div>
    </section>

    <!-- courses -->
 <section class="py-5 bg-light">
    <div class="text-center mb-5">
      <h2 class="font-weight-bold">Our Courses</h2>
      <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati facilis nulla</p>
    </div>

    <div class="container">
      <div class="row">
            
        <?php 
        $query = mysqli_query($db_conn,"SELECT * FROM courses ORDER BY id DESC LIMIT 0, 8");
        while($course = mysqli_fetch_object($query))
        {?>
        <div class="col-lg-3 mb-4" style="text-align: center;" >
          <div class="card">
            <div>
              <img src="./dist/uploads/<?php echo $course->image?>" alt="" class="img-fluid rounded-top course-image"style="height:70px ">
            </div>
            <div class="card-body">
              <b><?php echo $course->name?></b>
              <p class="card-text">
                <b>Duration: </b> <?php echo $course->duration?> <br>
              </p>
              <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

    <!-- achievements -->
    <section class="py-5 text-white" style="background: #FFDAB9" ;>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>achievements</h2>
                        <p>there are thr achieve ments of our collage and other thing are not tnotesalfidfjidf jlkahfiej fdjaoiehfdj jisoudie</p>
                        <img src="./resources/images/image7.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="border rounded text-warning">
                                    <div class="card-body text-center">
                                        <span><i class="fas fa-graduation-cap fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1 ">334</h2>
                                        <hr class="border-warning">
                                        <h4>Graduates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="border rounded text-warning">
                                    <div class="card-body text-center">
                                        <span><i class="fas fa-graduation-cap fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1 ">334</h2>
                                        <hr class="border-warning">
                                        <h4>Graduates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="border rounded text-warning">
                                    <div class="card-body text-center">
                                        <span><i class="fas fa-graduation-cap fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1 ">334</h2>
                                        <hr class="border-warning">
                                        <h4>Graduates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="border rounded text-warning">
                                    <div class="card-body text-center">
                                        <span><i class="fas fa-graduation-cap fa-2x"></i></span>
                                        <h2 class="my-2 font-weight-bold h1 ">334</h2>
                                        <hr class="border-warning">
                                        <h4>Graduates</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials-->
    <section class="py-5">
        <div class="text-center mb-5">
            <h2 class="font-weighted-bold">what people see</h2>
            <p class="text-muted">The main head of each of the department</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="border rounded position-relative">
                        <div class="p-4 text-center">
                            this is not what the people said about us but this isjkshighao aihfi efhejkfhad sfh ahfoiauoier fahfvnraiu asg fjnhuaritirfihf kahfvajrhu fndjafhuranfjvbfghru hajfjruhuakfjbv akhur
                        </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
                    </div>
                    <div class="text-center mt-n2">
                        <img src="./resources/images/image8.jpg" alt="hello" class="rounded-circle border" width="100" height="100">
                        <h6 class="mb-0 font-weight-bold"> Name of the candidate</h6>
                        <p><i>Designation</i></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="border rounded position-relative">
                        <div class="p-4 text-center">
                            this is not what the people said about us but this isjkshighao aihfi efhejkfhad sfh ahfoiauoier fahfvnraiu asg fjnhuaritirfihf kahfvajrhu fndjafhuranfjvbfghru hajfjruhuakfjbv akhur
                        </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity:.2"></i>
                    </div>
                    <div class="text-center mt-n2">
                        <img src="./resources/images/image8.jpg" alt="hello" class="rounded-circle border" width="100" height="100">
                        <h6 class="mb-0 font-weight-bold"> Name of the candidate</h6>
                        <p><i>Designation</i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer style="background: url(./resources/images/image9\).jpg) center/cover no-repeat;">
        <div class="py-5 text-black" style="background: #fdeff9;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <h5>useful links</h5>
                        <ul class="fa-ul ml-4">
                            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></a></i>List icons</li>
                            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></a></i>can be used</li>
                            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></a></i>as bullets</li>
                            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></a></i>in list</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5>Social Presense</h5>
                        <div>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack"></i>
                                <i class="fab fa-facebook fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h5>Subscribe</h5>

                        <form action="">
                            <div class="form-group">
                                <input type="email" id="email-s" class="form-control" placeholder="your email">
                            </div>
                            <button class="btn btn-secondary btn-sm btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="py-2 bg-dark text-light text">
        <div class="container-fluid">
            Copyright 2023-2023 All Rights Reserved. <a href="#" class="text-light"> School Management System</a>
        </div>
    </section>

<?php include('footer.php') ?>
