
<div class="pagetitle">
   <h1>User</h1>
   <nav>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a>
         <li class="breadcrumb-item ">user</li>
         <li class="breadcrumb-item active">Table</li>
      </ol>
   </nav>
</div>

<section class="section dashboard">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-12">
                  <div class="card recent-sales overflow-auto">
                     <div class="card-heard mx-3 mt-3">
                        <a class="nav-link collapsed btn btn-success float-end text-white" 
                           href="index.php?page=pages/users/admins/create-user"> 
                           <i class="bi bi-plus-circle-fill"></i> <span>Add user</span> 
                        </a>
                        <!-- <a class="nav-link collapsed btn btn-success float-end text-white" 
                           data-bs-toggle="modal" data-bs-target="#modalDialogScrollable"> 
                           <i class="bi bi-plus-circle-fill"></i> <span>Add user</span> 
                        </a> -->
                        <?php //include 'modal.php' ?>
                     </div>
                     
                     <div class="card-body">
                        <h5 class="card-title">Users</h5>

                        <table class="table table-striped" id="example">
        
                           <thead>
                              <tr>
                                <th scope="col" width="3%" class="text-center">#</th>
                                <th scope="col" width="7%" class="text-center" >Profile</th>
                                <th scope="col" width="20%"class="">Full name</th>
                                <th scope="col" width="30%"class="">E-mail</th>
                                <th scope="col" width="20%"class="">Role</th>
                                <th scope="col" width="10%"class="">Status</th>
                                <th scope="col" width="10%" class="text-center" >Action </th>
                              </tr>
                           </thead>
                           
                           <tbody>
                              
                              <?php
                                 $users = getAdmins('users');
                                 $count = 1;

                                 if(mysqli_num_rows($users) > 0){

                                    foreach($users as $row){
                                       ?>
                                          <tr>
                                             <td class="text-center"><?= $count ?></td>
                                             <td class="text-center">
                                                <img class="" src="../assets/img/avatars/profile/<?= $row['image'] ?>" 
                                                   alt="" height="20" width="20" style="border-radius: 50px;" >
                                             </td>
                                             <td class=""><?= $row['fname']." ".$row['lname'] ?> </td>
                                             <td class=""><?= $row['email'] ?> </td>
                                             <td class="">
                                                <?php 
                                                   if($row['role_as'] == 1){
                                                      ?>
                                                         <span class='badge bg-success'><i class="bi bi-check-circle me-1"></i><?= 'Super admin'?></span>
                                                      <?php
                                                   }else if($row['role_as'] == 2){
                                                      ?>
                                                         <span class='badge bg-info'><i class="bi bi-check-circle me-1"></i><?= 'Admin'?></span>
                                                      <?php                                                   
                                                   }else{
                                                      ?>
                                                         <span class='badge bg-success'><i class="bi bi-check-circle me-1"></i><?= 'Visitor'?></span>
                                                      <?php  
                                                   }  
                                                ?> 
                                             </td>
                                             <td class="">
                                                <?php 
                                                   if($row['status'] == 1){
                                                      ?>
                                                         <span class='badge bg-success'><i class="bi bi-check-circle me-1"></i><?= 'Enable'?></span>
                                                      <?php
                                                   }else{
                                                      ?>
                                                         <span class='badge bg-danger'><i class="bi bi-x-octagon me-1"></i><?= 'Disable'?></span>
                                                      <?php                                                   
                                                   }
                                                ?> 
                                             </td>
                                             <td class="text-center"> 
                                                
                                                <a class="text-primary text-center" 
                                                   href="index.php?page=pages/users/user-profile&id=<?=$row['id'];?>">
                                                      <i class="bi bi-eye-fill"></i>
                                                </a>
                                                <!-- <a class="text-primary me-3" 
                                                   href="index.php?page=pages/users/user-edit&id=<?=$row['id'];?>">
                                                      <i class="bi bi-pencil"></i>
                                                </a>
                                                <a class="text-danger me-3" onclick="checkDelete()" 
                                                   href="index.php?page=pages/users/index&id=<?=$row['id'];?>">
                                                   <i class="bi bi-trash me-2"></i>
                                                </a>   -->
                                                
                                             </td>

                                             
                                          </tr>
                                          <?php $count = $count + 1 ?>
                                          
                                       <?php
                                    }

                                 }else{
                                    
                                    echo "No Record Found";
                                 }

                              ?> 
                           </tbody>
                        </table>

                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
</section>

