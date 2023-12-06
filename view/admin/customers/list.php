 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
   <link rel="stylesheet" href="/assets/index-style.css">
   <title>Customers</title>
   <!-- insert stylesheets here -->
 </head>

 <body>
   <!-- navbar -->
   <nav class="navbar navbar-light bg-light p-3">
     <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
       <a class="navbar-brand" href="#">
         <img src="/assets/logo.png" alt="" height="55px">
       </a>
       <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
     </div>
     <div class="col-12 col-md-4 col-lg-2">
       <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
     </div>
     <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">

       <div class="dropdown">

         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
           Menu
         </button>
         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
           <li><a class="dropdown-item" href="#">Settings</a></li>
           <li><a class="dropdown-item" href="#">Messages</a></li>
           <li><a class="dropdown-item" href="/controller/auth/logout.php">Sign out</a></li>
         </ul>
       </div>
     </div>
   </nav>
   <!-- navbar end -->

   <div class="container-fluid">
     <div class="row">
       <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
         <div class="position-sticky pt-md-5">
           <ul class="nav flex-column">
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                   <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                   <polyline points="9 22 9 12 15 12 15 22"></polyline>
                 </svg>
                 <span class="ml-2">Dashboard</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                   <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                   <polyline points="13 2 13 9 20 9"></polyline>
                 </svg>
                 <span class="ml-2">Orders</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="../services/list.php">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                   <circle cx="9" cy="21" r="1"></circle>
                   <circle cx="20" cy="21" r="1"></circle>
                   <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                 </svg>
                 <span class="ml-2">Services</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                   <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                   <circle cx="9" cy="7" r="4"></circle>
                   <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                   <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                 </svg>
                 <span class="ml-2">Customers</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                   <line x1="18" y1="20" x2="18" y2="10"></line>
                   <line x1="12" y1="20" x2="12" y2="4"></line>
                   <line x1="6" y1="20" x2="6" y2="14"></line>
                 </svg>
                 <span class="ml-2">Reports</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="../developers/list.php">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                   <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                   <polyline points="2 17 12 22 22 17"></polyline>
                   <polyline points="2 12 12 17 22 12"></polyline>
                 </svg>
                 <span class="ml-2">Developers</span>
               </a>
             </li>
           </ul>
         </div>
       </nav>
       <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
         <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
            
           </ol>
         </nav>

         <h1 class="h2">Customers</h1>
         <!-- <a class="btn btn-secondary" href="./add.php" role="button" style="position: fixed;right:5%">ADD</a> -->
         <p>This is the customers table list</p>



         <div class="row">
           <div class="col-12 col-xl-12 mb-4 mb-lg-0">
             <div class="card">
               <h5 class="card-header">Customers</h5>
               <div class="card-body">
                 <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th scope="col">id</th>
                         <th scope="col">Username</th>
                         <th scope="col">Name</th>
                         <th scope="col">Email</th>
                         <th scope="col">Phone</th>
                         <th scope="col">Adress</th>
                         <th scope="col">Created_at</th>
                         <th scope="col">Action</th>

                       </tr>
                     </thead>
                     <tbody>


                       <?php
                        require __DIR__ . '/../../../controller/admin/customers/list.php';

                        ?>


                     </tbody>
                   </table>
                 </div>
                 <a href="#" class="btn btn-block btn-light">View all</a>
               </div>
             </div>
           </div>
           <!-- <div class="col-12 col-xl-4">
  <div class="card">
  <h5 class="card-header">Traffic last 6 months</h5>
  <div class="card-body">
      <div id="traffic-chart"></div>
  </div>
</div>
  </div>
</div> -->
           <footer class="pt-5 d-flex justify-content-between">
             
             <ul class="nav m-0">
               <li class="nav-item">
                 <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link text-secondary" href="#">Terms and conditions</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link text-secondary" href="#">Contact</a>
               </li>
             </ul>
           </footer>
       </main>
     </div>
   </div>




   <script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
   <script src="/assets/js/sript.js"></script>
 </body>

 </html>