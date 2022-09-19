<?php
$server='localhost';
$username='root';
$password='';
$database='zalego';

$dbconnect=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submitbutton'])) 
 {
         $email=$_POST['email'];

        $emaildata=mysqli_query($conn, "INSERT INTO 
           subscribers(email)VALUES('$email')");
      

         if($emaildata)
      {
     echo 'SUCCESS';
      }
       else
      {
         echo 'INVALID';
        }
}

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
    <a href="index.php"></a>
    <title>About Us</title>
</head>
<body>
    <!-- navigation bar here -->
    <?php include ('navbar.php')?>
  <!-- End navigation bar -->
  <br>



       <div class="container">
              <main class="p-5 mb-4 bg-secondary rounded-3">
                    <h1 class="text-bg-secondary">
                    <i>
                About Us
                 </i>
             </h1>
             <p class="text-bg-secondary">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nam exercitationem, ullam quasi sit quam corrupti ratione! Consequatur earum qui cum provident voluptas quas suscipit?
             </p>
        </main>
              </div>

                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <h1>
                            Our Program
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, magni. Ducimus dolor sequi quam at, eos recusandae tempora fugit qui? Voluptates, aliquam culpa molestiae unde pariatur perspiciatis explicabo, iure nemo officiis beatae odit velit eveniet fugiat rem. Culpa, voluptatum enim?

                        </p>
                    </div>
                        <div class="col-lg-6">
                        <img src="images/pro.jpg" alt="program">                     
                    </div>
                </div>
                        
                 <h2>
                     The Programs;
                 </h2>
                 <br>

                   
    


       
           
<div class="row">
                <div class="col-lg-3">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                  <div class="card-hearder bg-light text-dark text-center">
                      <span>
                      <b> 
                        <u> 
                      Skill Discovery
                        </u>
                      </b>
                    </span>
                      <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat vitae ab, soluta voluptatibus autem totam commodi esse impedit, placeat pariatur eos corrupti. Repellat accusamus quaerat asperiores libero corrupti, nulla quasi! </p>
                      <a href="#" class="btn btn-primary">View Details</a>
                  </div>
                  <div class="card-body">
                    

                 </div>
                 <div class="card-footer"></div>
                    </div>
              </div>

              <div class="col-lg-3">
                   <div class="card border-dark mb-3" style="max-width: 18rem;">
                   <div class="card-hearder bg-light text-dark text-center">
                      <span>
                        <b>
                            <u>
                      Upskilling Program
                            </u>
                        </b>
                    </span>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse distinctio modi optio velit, sit sed, inventore voluptatum eius tenetur commodi labore architecto ex libero voluptatem, iure quia. Aliquam, impedit voluptatem. </p>
                      <a href="#" class="btn btn-primary">View Details</a>
                  </div>
                   <div class="card-body">
                       
                         
                    </div>
                   <div class="card-footer"></div>
                   </div>
              </div>

              <div class="col-lg-3">
                   <div class="card border-dark mb-3" style="max-width: 18rem;">
                   <div class="card-hearder bg-light text-dark text-center">
                      <span>
                        <b>  
                            <u>
                      Path Finding Programs
                            </u>
                        </b>
                    </span>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, error! Vel adipisci quas libero similique non amet, obcaecati numquam esse perspiciatis consequuntur! Cupiditate eveniet sequi repudiandae adipisci architecto quam est? </p>
                      <a href="#" class="btn btn-primary">View Details</a>
                  </div>
                   <div class="card-body">
                       
                         
                    </div>
                   <div class="card-footer"></div>
                   </div>
              </div>



              <form action="aboutus.php" method="POST">
            <div class="row">
            <div class="mb-3 col-lg-6">
                   <label for="email" class="form-label">Email</label>
                   <input type="email" name="email" class="form-control" placeholder="your email address">
             </div>  
          </div> 

           <br>    
         <button type="submit" name="submitbutton" class="btn btn-primary">subscribe</button>  
</form>

                
                <hr>
    
                <footer>
                   &copy; Company2022
                </footer>
</div>

          <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script> -->
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>




</body>
</html>






 