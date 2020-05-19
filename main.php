
    <?php
session_start();
include("database.php");

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Users List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Phone</th><th>Insta</th><th>Upload</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select * from Content")or die ("query 1 incorrect.....");

                        while(list($Content_ID,$FirstName,$LastName,$Email,$Phone,$Insta,$Upload)=mysqli_fetch_array($result))
                        {	
                        echo "<tr><td>$Content_ID</td><td>$FirstName</td><td>$LastName</td><td>$Email</td><td>$Phone</td><td>$Insta</td><td>$Upload</td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>