<?php include('process.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">


    <title>Bootstrap Grid Layout</title>
</head>
<body>
  <!-- navigation bar here -->
      <?php include ('navbar.php')?>
  <!-- End navigation bar -->
   <br>



    <div class="container">
      <main class="p-5 mb-4 text-bg-secondary rounded-3">
         <marquee> 
           <h1 class="text-bg-secondary">
               <i>
               Welcome, Samurai Muriithi
               </i>
           </h1>
           <p class="text-bg-secondary">
           Perfection is achieved not when there is nothing more to add, but rather when there is nothing more to take away
            </p>
            <button class="btn btn-primary">Learn more</button>
            
         </marquee> 
      </main>
      <div class="container">
          <div class="row">
        
              <div class="col-lg-4">
                  <h1>
                      Cloud Engineering
                  </h1>
                  <p>
                  A cloud engineer is an IT professional responsible for any technological duties associated with cloud computing, including design, planning, management, maintenance and support.

Cloud engineer is a general term encompassing a few different roles, including:

cloud architect
cloud software engineer
cloud security engineer
cloud systems engineer
cloud network engineer
Each position focuses on a specific type of cloud computing, rather than the technology as a whole. Companies that hire cloud engineers are often looking to deploy cloud services, scale up their use of cloud resources or further their cloud understanding and technology.
                  </p>
                  <button class="btn btn-primary">
                      Learn More
                  </button>
                  </div>
                  <div class="col-lg-4">
                    <h1>
                        Software Development
                    </h1>
                    <p>
                    Software development is the process of conceiving, specifying, designing, programming, documenting, testing, and bug fixing involved in creating and maintaining applications, frameworks, or other software components. Software development involves writing and maintaining the source code, but in a broader sense, it includes all processes from the conception of the desired software through to the final manifestation of the software, typically in a planned and structured process.[1] Software development also includes research, new development, prototyping, modification, reuse, re-engineering, maintenance, or any other activities that result in software products
                    </p>
                    <button class="btn btn-primary">
                        Learn More
                    </button>
                    </div>
                    <div class="col-lg-4">
                        <h1>
                            Dev-OPs Engineering
                        </h1>
                        <p>
                        DevOps engineers reduce that complexity, closing the gap between actions needed to quickly change an application, and the tasks that maintain its reliability.

Development teams and IT operations teams can have different skills and different goals. Developers want to introduce new features to an application, while operations teams want to preserve the stability of an application once it is released. 

DevOps is all about the unification and automation of processes, and DevOps engineers are instrumental in combining code, application maintenance, and application management. All of these tasks rely on understanding not only development life cycles, but DevOps culture, and its philosophy, practices, and tools. 
                        </p>
                        <button class="btn btn-primary">
                            Learn More
                        </button>
                        </div>
            
    
    
    </div>
    <br>
          <!-- contact us page here -->
          <div class="row pt-5">
            <h1>Contact us</h1>
            <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor earum nihil dicta odit cumque, molestias voluptatum? Debitis id nam saepe.
            </p>
             
        <form action="index.php" method="POST">
               
            <?php
                   if($response) 
                {
                    include('respond.php');
                }
             ?>
               
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter your first Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter your last name">
                    </div>
                
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="enter your phone number">
                    </div>
                      <div class="mb-3 col-lg-12">
                       <label for="message" class="form-label">Your Message</label>
                       <textarea cols="30" rows="5" name="message" class="form-control"></textarea>
                      </div>
    


            </div>    
            <button type="submit" name="submitbutton" class="btn btn-primary">Send a Message</button>  
     </form>

          </div>
         <!-- End contact us page -->
        



    <hr>
    <footer>
        &copy; samurai2022
    </footer>
</div>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script> -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>