<?php
	include ("main/side.php");
?>

 <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Group</h1>
          <p class="mb-4">Ini adalah user untuk admin dan user DHE YPT </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
            </div>
            <div class="card-body">
              <form method = "POST" action="action/group/add.php">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <td>
                      Nama
                    </td>
                    <td>
                      <input type="text" name="nama" class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Status
                    </td>
                    <td>
                      <select name="status" class="form-control">
                      <option value="active">Active</option>
                      <option value="not active">Not Active</option>
                      </select>
                    </td>
                  </tr>
                  <td colspan='2'>
                  <input type="submit" value="simpan" class="btn btn-primary">
                  </td>
                </table>

              </form>
            </div>
          </div>

<?php
	include ("main/footer.php");
?>