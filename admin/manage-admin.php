<?php include('partials/menu.php'); ?>
         <div class="main-content">
         <div class="wrapper">
         <h1>MANAGE ADMIN</h1>
         
         <br>
         <br>

         <?php 
             if(isset($_SESSION['add']))
             {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
             }
             ?>
             <br>
             <br>

         <a href="add-admin.php" class="btn-primary">Add Admin</a>

         <br>
         <br>

         <table class="tbl-full">
             <tr>
                <th>S.NO</th>
                <th>Full_Name</th>
                <th>UserName</th>
                <th>Actions</th>
             
             </tr>

             <tr>
                <td>1.</td>
                <td>ML-ASSASN</td>
                <td>ML-ASSASN</td>

                <td>
                   <a href="#" class="btn-secondary">Update Admin</a>
                   <a href="#" class="btn-danger">Delete Admin</a>
                </td>
             </tr>
             <tr>
                <td>2.</td>
                <td>ML-ASSASN</td>
                <td>ML-ASSASN</td>

                <td>
                   <a href="#" class="btn-secondary">Update Admin</a>
                   <a href="#" class="btn-danger">Delete Admin</a>
                </td>
             </tr>
             <tr>
                <td>3.</td>
                <td>ML-ASSASN</td>
                <td>ML-ASSASN</td>

                <td>
                <a href="#" class="btn-secondary">Update Admin</a>
                <a href="#" class="btn-danger">Delete Admin</a>
                </td>
             </tr>
         
         </table>

        

         </div>
         <div class="clearfix">
             

         </div>
         </div>

<?php include('partials/footer.php'); ?>