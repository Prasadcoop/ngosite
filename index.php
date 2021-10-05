<!DOCTYPE html>
<html>
<head>
    <title></title> 
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    
  </head>
<body style="background-image: linear-gradient(89deg, #dfb4bb,#f3ebeb,#d9d93d); opacity:1;">
  
<?php include 'menu.php';   ?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>

  <div class="carousel-inner" style="opacity:1;">
    <div class="carousel-item active">
       <img class="hero-image" style="opacity:1;" src="img\OIP2.jpg" alt="Los Angeles" width="1100" height="500" >
      <div class="carousel-caption m-1">
        <h3 class="text-light bg-transparent"><b>Causes you can raise funds for</b></h3>
       <p><b>Be it for a personal need, social cause or a creative idea - you can count on us for
   the project that you want to raise funds for.!</b></p>
      </div>   
    </div>
    
   
    <div class="carousel-item">
      <img src="img\or4.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Meet the World's 
   Best Social Good
   Organizations for 2021</h3>
        <p>Given the many changes in what has led to today’s understanding of social good, 
          it is no surprise to see the diversity of 
          participants in the 200 Rankings</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\or1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Donate Medicines</h3>
        <p>There is a growing need for nonprofit and non-governmental organizations (NGOs) throughout 
   the world to be more effective and productive.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\or3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Donate Education</h3>
        <p>Help needy people in villages survive the pandemic</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<section>
<div class="rounded " style="margin:4% 5% 0% 8%; ">
     <form  class="card-center m-2 shadow-lg needs-validation" action="details.php" method="post" style='border-radius:1.25rem;' style="background-color:#FFF;" novalidate>
         <h3 class="text-center" style=" font-family: fangsong;">Donar's Details</h3>
      
         <div class="row   mb-4">
                <div class="col">
                 <div class="form-outline m-2">
                 <label class="form-label " for="validationCustom01">First name</label>
                  <input type="text" id="form2Example1" name="fname" class="form-control" required="true"/>
             
         </div>
   </div>
   <div class="col">
     <div class="form-outline m-2">
     <label class="form-label" for="form3Example2">Last name</label>
       <input type="text" id="form3Example2" class="form-control" autocomplete="off" name="lname" required="true" />
       
     </div>
   </div>
 </div>

 <!-- Email input -->
 <div class="form-border m-2">
 <label class="form-label" for="form3Example3">Email address</label>
   <input type="email" id="form3Example3" class="form-control"  autocomplete="off" name="email" required="true" />
   
 </div>

 <div class="form-outline m-2">
 <label class="form-label" for="form3Example3">Phone Number</label>
   <input type="phone" id="form3Example3" class="form-control" autocomplete="off" name="phone" required="true" />
   
 </div>

 <!-- Checkbox -->
 <div class="form-group from-check m-3 ml-4">
   <input class="form-check-input" type="checkbox" value="" id="exampleCheck1" required="true" />
   <label class="form-check-label" for="exampleCheck1" >Check Term & Condition </label>
 </div>

 <!-- Submit button -->
 <button type="button" class="btn btn-danger  m-2 rounded"  data-toggle="modal" data-target="#exampleModalCenter" >Make A Payment</button>
</form>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="wrapper">
    <h4 class="text-uppercase">Payment Details</h4>
    <form action="payment.php" method="post" class="form mt-4">
    <div class="form-group">
	<label for="regular1" class="control-label" >Choose The Plan</label>
	<select class="form-control">
	  <option>$50</option>
	  <option>$75</option>
	  <option>$120</option>
	  <option>$200</option>
	  <option>$250</option>
	</select>
</div>
        <div class="form-group"> <label for="name" class="text-uppercase">name on the card Holder</label> <input type="text" class="form-control" placeholder="eg.siddesh"> </div>
        <div class="form-group"> <label for="card" class="text-uppercase">card number</label>
            <div class="card-number"> <input type="text" class="card-no" step="4" placeholder="1234 4567 5869 1234" pattern="^[0-9].{15,}"> <span class=""> <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-marcus-samuelsson-group-2.png" alt="" width="30" height="30"> </span> </div>
        </div>
        <div class="d-flex w-100">
            <div class="d-flex w-50 pr-sm-4">
                <div class="form-group"> <label for="expiry" class="text-uppercase">exp.date</label> <input type="text" class="form-control" placeholder="MM/YYYY"> </div>
            </div>
            <div class="d-flex w-50 pl-sm-5 pl-3">
                <div class="form-group"> <label for="cvv">CVV</label> <a href="#" title="CVV is a credit or debit card number, the last three digit number printed on the signature panel">what's this</a> <input type="password" class="form-control pr-5" maxlength="3" placeholder="123"> </div>
            </div>
        </div>
        <div class="form-inline pt-sm-3 pt-2"> <input type="checkbox" 
        name="address" id="address"> <label for="address" class="px-sm-1 pl-1 pt-sm-0 pt-2">
          My billing address is the same as the shipping</label>
         </div>

        <div class="my-3"> <input type="submit" value="place your order" class="text-uppercase btn btn-danger btn-block p-3"> </div>
        <div id="form-footer">
            <p>By placing your order, you agree to our</p>
            <p><a href="#">privacy notice</a> & <a href="#">terms of use</a>.</p>
        </div>
    </form>
</div>
    </div>
  </div>
</div>
</section>
<section class="my-5">
  <div class="py-5">
    <h3 class="desc text-center"style="font-family: fangsong;">Why Donate US</h3>
   </div>
   <p class="text-center" style="margin:4%; font-size:140%; font-family: fangsong; ">Donating money to HelpIT helps one get the blessings of those in 
    need and at the same time fulfil
    one’s service to the Lord. The amount of money donated or the kind of service is of little significance. 
    What matters are the intentions with which a donation is made.
    Further, donating money to Childs is considered a noble act since HelpIT are the platform 
      where the devotees can perform their services to 
      the Childs and come in contact with Him. Therefore, helping in building the home of
     the Childrens career can be one of the best ways in which one can contribute.<a class="nav-link" href="reason.php">See more...</a>   
</p>
  
</section>
<section class="my-5">  
  <div class="py-5" > 
    <h2 class="text-center" >Our Work </h2>
   </div>
   <div class="container-fluid">
      <div class="row"> 
         <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
                <img class="card-img-top" src="img/or7.jpg" alt="Card image" >
                <div class="card-body">
                   <h4 class="card-title">Medical Facility</h4>
                   <button class="btn btn-danger" type="button" 
                       data-toggle="collapse" data-target="#example_1"
                       aria-expanded="false" aria-controls="example_1">
                       See Profile
                  </button>
                     
                </div>
            </div>
            <div class="collapse" id="example_1">
            <div class="card card-body">
            Genetics,
   Independent Scientist in Global Health (ISGHA),
  Informatics (ITGH),
International Research Collaboration (FIRCA),
Medical Education Partnership Initiative (MEPI),
New Foreign Investigators (GRIP),
NIH / PEPFAR Collaboration for Implementation Science Administrative Grant Supplements,
Population,
Scholars and Fellows (FICRS-F),
Stigma.
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="img/or6.jpg" alt="Card image"  >      
                <div class="card-body">
                   <h4 class="card-title">Educational Needs</h4>
                     
                   <button class="btn btn-danger" type="button" 
                       data-toggle="collapse" data-target="#example_2"
                       aria-expanded="false" aria-controls="example_2">
                       See Profile
                  </button>
                  </div>
            </div>
               
          <div class="collapse" id="example_2">
            <div class="card card-body">
             We Help to Educate
            Compassion’s Educational Needs Fund helps children
             stay in school and learn valuable skills that enable them to
              be contributing adults in their communities one day. They may receive 
              textbooks, uniforms and fees for labs. They may also receive tutoring with
               their homework, 
             and spiritual and emotional support when things get tough.
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
            <img class="card-img-top" src="img/socity.jpg" alt="Card image" >
                <div class="card-body">
                <h4 class="card-title">Socity</h4>
                <button class="btn btn-danger" type="button" 
                       data-toggle="collapse" data-target="#example_3"
                       aria-expanded="false" aria-controls="example_3">
                       See Profile
                  </button>
                 
                  </div>
              </div>
                  <div class="collapse" id="example_3">
            <div class="card card-body">
            Human beings are inherently social. Developing competencies in this domain enhance a 
person’s ability to succeed in school as well as positively influence mental health, success in 
work, and the ability to be a citizen in a democracy. This paper outlines research and theories 
related to the development of social competence and provides a literature review of theory and 
research supporting the vital importance of social competence, including a discussion of 
empirically-based interventions and measurement tools that educators can use to facilitate 
development of social competence.

            </div>
         
            </div>
        </div>
</div>
</div>


</div>

</section>

<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">About Us</h3>
  </div>
    <p class="first-child"><!--style="margin:3%;
    font-size:100%; font-family:'Scheherazade New', serif;"--->
    HelpIT is a non-profit that Organization work for childs who lost his parents in covid pandamic. Established in 2021, Educate needy childs’ 

Strongly aligned with the <a href="https://en.wikipedia.org/wiki/Right_of_Children_to_Free_and_Compulsory">‘Right to Education Act’</a> 
or the <a href="https://samagra.education.gov.in/about.html">‘Samagra Siksha’</a>, Educate Boys&Girls is committed to the Government’s 
vision to improve access to primary education for children, especially young girls.
developments of childrens currently operates successfully in over<a class="nav-link" href="about.php">See more...</a>  
</p>
  
</section>
<section class="contact my-5" >
  <div class="py-5">
        <h3 class="text-center" style=" font-family: fangsong;">Contact </h3>
</div>
<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
    <label >Name</label>
    <input type="text" required="true" name="user" placfont-family: cursive; placeholder="Enter Your name.." autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
    <label >Email Id</label>
    <input type="text" name="email" required="true" placeholder="Enter Your email Id.." autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
    <label >Mobile</label>
    <input type="text"  name="mobile" required="true" placeholder="Enter Your no.." autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
    <label>Message</label>
    <textarea type="text" required="true" name="comment" placeholder="Send Message..." autocomplete="off" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
  </form>
</div>
</section>
<footer>
    <p class="p-3 bg-dark text-white text-center"> © 2021 All rights reserved. Educate/Growth.</p>
</footer>

</body>
<script type="text/javascript">
    ${document}.ready(function{}{
      $('ul li a').click(function(){
        if( $(this).hasClass('current')){
        $(this).removeClass('current');
      }
      else{
        $('li a.current').removeClass('current');
        $(this).addClass('current');
      }
      });
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a43ceed218.js" crossorigin="anonymous"></script>
</html>   


