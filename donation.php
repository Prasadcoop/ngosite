<!DOCTYPE html>
<html>
<head>
    <title></title> 
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  </head>
  <style type="text/css">
    .wrapper {
    background-color: #f4f2f7;
    margin: 20px auto;
    max-width: 400px;
    padding: 15px 20px;
    border-radius: 10px
}

  </style>
<body style="background-image: linear-gradient(89deg, #dfb4bb,#f3ebeb,#d9d93d); opacity:1;">
  
   <?php include 'menu.php';   ?>
   
   
  <div class="rounded " style="margin:4% 5% 0% 8%; ">
     <form  class="card-center m-2 shadow-lg" style='border-radius:1.25rem;' style="background-color:#FFF;">
         <h3 class="text-center" style=" font-family: fangsong;">Fill Details</h3>
      
         <div class="row   mb-4">
                <div class="col">
                 <div class="form-outline m-2">
                 <label class="form-label" for="form3Example1">First name</label>
                  <input type="text" id="form3Example1" class="form-control " />
             
         </div>
   </div>
   <div class="col">
     <div class="form-outline m-2">
     <label class="form-label" for="form3Example2">Last name</label>
       <input type="text" id="form3Example2" class="form-control" />
       
     </div>
   </div>
 </div>

 <!-- Email input -->
 <div class="form-border m-2">
 <label class="form-label" for="form3Example3">Email address</label>
   <input type="email" id="form3Example3" class="form-control" />
   
 </div>

 <div class="form-outline m-2
 ">
 <label class="form-label" for="form3Example3">Phone Number</label>
   <input type="phone" id="form3Example3" class="form-control" />
   
 </div>

 <!-- Checkbox -->
 <div class="form-group from-check m-3 ml-4">
   <input class="form-check-input" type="checkbox" value="" id="exampleCheck1"  />
   <label class="form-check-label" for="exampleCheck1" >Check Term & Condition </label>
 </div>

 <!-- Submit button -->
 <button type="button" class="btn btn-danger  m-2 rounded"  data-toggle="modal" data-target="#exampleModalCenter" >Make A Payment</button>


 <!-- Register buttons -->
 <div class="text-center">
   
   <button type="button" class="btn btn-primary btn-floating mx-1">
     <i class="fab fa-facebook-f"></i>
   </button>

   <button type="button" class="btn btn-primary btn-floating mx-1">
     <i class="fab fa-google"></i>
   </button>

   <button type="button" class="btn btn-primary btn-floating mx-1">
     <i class="fab fa-twitter"></i>
   </button>

   <button type="button" class="btn btn-primary btn-floating mx-1">
     <i class="fab fa-github"></i>
   </button>
 </div>
</form>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="wrapper">
    <h4 class="text-uppercase">Payment Details</h4>
    <form class="form mt-4">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a43ceed218.js" crossorigin="anonymous"></script>
</html> 