<?php
	include ("main/side.php");
?>

 <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Group</h1>
          <p class="mb-4">Ini adalah list user group DHE YPT </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class='row'>
                <div class='col-md-6'>
                  <h6 class="m-0 font-weight-bold text-primary">List Group</h6>
                </div>
                <div class='col-md-6'>
                  <a href="addgroup.php" class="btn btn-primary btn-icon-split" style='float:right;'>
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                      <span class="text">ADD</span>
                      </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $conn = new mysqli("localhost","root","","dheypt");
                      $sql = "SELECT * FROM master_group";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                      // output data of each row
                      $i = 1;
                      while($row = $result->fetch_assoc()) {
                        ?>
                          <tr>
                            <td><?php
                                echo $i ;
                            ?>
                            </td>
                            <td><?php echo $row['nama'];?> </td>
                            <td><?php echo $row['status'];?></td>
                            <td>
                              <a href="#" class="btn btn-warning btn-icon-split">
                              <span class="icon text-white-50">
                                  <i class="fas fa-edit"></i>
                              </span>
                            <span class="text">Edit</span>
                            </a>
                            <a href="action/group/delete.php?id=<?php echo $row['id_group'];?>" class="btn btn-danger btn-icon-split">
                              <span class="icon text-white-50">
                                  <i class="fas fa-trash"></i>
                              </span>
                            <span class="text">Delete</span>
                            </a>
                            </td>
                          </tr>
                        <?php
                          $i++;
                        }
                      } else {
                          echo "0 results";
                      }
                      $conn->close();
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<?php
	include ("main/footer.php");
?>