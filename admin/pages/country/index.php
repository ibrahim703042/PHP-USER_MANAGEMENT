
<div class="pagetitle">
   <h1>Country</h1>
   <nav>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.php">Home</a>
         <li class="breadcrumb-item ">Country</li>
         <li class="breadcrumb-item active">Table</li>
      </ol>
   </nav>
</div>

<section class="section index">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-12">
                  <div class="card recent-sales overflow-auto">
                     
                     <div class="card-body">
                        <h5 class="card-title">Countries</h5>

                        <table class="table table-striped mytable" id="example">
        
                           <thead>
                              <tr>
                                 
                                <th scope="col" width="5%" >#</th>
                                <th scope="col" width=""  >Name</th>
                                <th scope="col" width=""  >code</th>
                                <th scope="col" width=""  >Phone</th>
                                
                              </tr>
                           </thead>
                           
                           <tbody>
                              <?php echo countries_table(); ?>    
                           </tbody>
                        </table>

                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
</section>

