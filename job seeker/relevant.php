<?php
session_start();
if(!isset( $_SESSION['uname']))
{
	header('location:registration.php');
}
include('similarity.php')
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Employer Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">JobSeeker Page</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">
                  <span data-feather="users"></span>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="education.php">
                  <span data-feather="layers"></span>
                  Education
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="searchjob.php">
                  <span data-feather="search"></span>
                  Search Job
                </a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="relevant.php">
                  <span data-feather="search"></span>
                  Relevant Job
                </a>
              </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="walking.php">
                  <span data-feather="file-text"></span>
                 Walking Interview
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedback.php">
                  <span data-feather="message-circle"></span>
                  Feedback
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2" style="text-transform:uppercase;">Relevant Jobs for you </h1>
          </div>
          
            <?php 
             $ID=$_SESSION['userid'];
            include 'connection/db.php';
            $sql1="select * from about_myself where jobseek_id='".$ID."'  ";
           $result1= mysqli_query($conn,$sql1);
            $row1 = mysqli_fetch_array($result1);
            $text1=$row1['about_me'];
            $sql2="select * from job_specification";
            $result2=mysqli_query($conn, $sql2);
           while($row2 = mysqli_fetch_array($result2)){
            $JobId=$row2['jobid'];
            $JobTitle=$row2['job_title'];
            $text2=$row2['Specification'];
             $array_text1=explode(" ",$text1);
            $array_text2=explode(" ",$text2);
            $dot = Similarity::dot($array_text1);

            // echo 'Cosine Similarity is '.Similarity::cosine($array_text1,$array_text2, $dot);
            $similarity=Similarity::cosine($array_text1,$array_text2, $dot);
            $sim_percent=$similarity*100;
            if($sim_percent>=50){
                // print_r($dot);
                echo '<br>';
          //       print_r(Similarity::checka($array_text1,$dot));
          // echo '<br>';
          // echo "check a and b data";
          // print_r(Similarity::checkb($array_text2,$dot));
          // echo '<br>';
              $sql3="select * from job_master where JobId='".$JobId."'";
              $result3=mysqli_query($conn, $sql3);
              $row3=mysqli_fetch_array($result3);
            ?>
              <table width="60%" border="1px" cellpadding="0" cellspacing="0" style="margin-bottom:10px;">
                          <tr>
                          <td><strong>JobId</strong></td>
                          <td><strong><?php echo $row3['JobId']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>CompanyName</strong></td>
                          <td><strong><?php echo $row3['CompanyName']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>JobTitle</strong></td>
                          <td><strong><?php echo $row3['JobTitle']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Vacancy</strong></td>
                          <td><strong><?php echo $row3['Vacancy']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Qualification</strong></td>
                           <td><strong><?php echo $row3['MinQualification']; ?></strong></td>
                           </tr>
                           <tr>
                          <td><strong>Description</strong></td>
                          <td><strong><?php echo $row3['Description']; ?></strong></td>
                        </tr>
                        <tr>
                          <td><strong>Job  Specifiction</strong></td>
                          <td><strong><?php echo $text2; ?></strong></td>
                        </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td><a href="Apply.php?JobId=<?php echo $row3['JobId'];?>"><strong>Apply For Job</strong></a></td>
                           </tr>
                        </table>
            <?php
            }
           }

            ?>
       
         
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>');</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace();
    </script>

  </body>
</html>
