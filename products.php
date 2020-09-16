<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<style>
  /*--------Basic Setup---------*/
   .row {
    margin-bottom: 15px;
   }
  /*---------Headers------------*/
   .header {
    padding: 0;
   }
   .text-center {
    letter-spacing: 7px;
    margin-bottom: 15px;
  }
  /*--------Images-------------*/
      img {
        height: 150px;
        width: 200px;
      }
  /*------- Star Rating ---------*/
  .star-container p {
    position: relative;
    left: 80px;
  }
  .star-container {
    display: inline-flex;
    position: relative;
    margin: 0;   
  }
  .star-inner {
    position: absolute;
    top: 0;
    left: 0;
    white-space: nowrap;
    overflow: hidden;
    width: 0;
  }
  .star-outer {
    position: absolute;
    top: 0;
    left: 0;
  }
  .star-outer::before {
    position: relative;
    display: inline-block;
    content: "\f005 \f005 \f005 \f005 \f005";
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: #ccc;

  }
  .star-inner::before {
    position: relative;
    display: inline-block;
    content: "\f005 \f005 \f005 \f005 \f005";
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: #FFD700;
  }
  /*------------Feedbacks List ---------------*/
   .feedbacks{
    border: 2px transparent;
    height: 150px;
    width: auto;
    overflow:scroll;
    overflow-x:hidden;
    position: relative;
   }
   .feedbacks::-webkit-scrollbar {
    width: 5px;
  }
  /* Track */
   .feedbacks::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
   .feedbacks::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
   .feedbacks::-webkit-scrollbar-thumb:hover {
    background: #555; 
}
   .blockquote {
    position: absolute;
    top: 10px;
    right:10px;
   }

   /*------------Write Feedbacks ---------------*/
   .form-check{
    margin: 0 auto;
   }
   #modal-textarea {
    resize: none;
   }
   /*------------Modal Cart ---------------*/
   .input-column{
    max-width: 100px;
   }
   .user-input {
    display: inline-block;
   }
   /*----------- Mobile -------------------*/
   @media (max-width: 984px){
      .input-column{
        max-width: 70px;
      }
      #cart-headerNames{
        padding-left: 10px;
        padding-right: 10px;
    }
   }
   @media (max-width: 696px){
       .input-column{
        max-width: 50px;
      }
      #cart-headerNames{
        padding-left: 2px;
        padding-right: 2px;
    }
     .card-vic {
        order: 1;
      }
      .card-andy {
        order: 2;
      }
      .card-alex {
        order: 3;
  }
   }
   @media (max-width: 656px) {
    #cart-header
    {
        display: none;
    }
    .modal-body {
      padding: 2px;
    }
    .modal-body tbody tr td {
      padding: 12px 2px;
    }
    .card {
      width: 18rem;
    }
  }
  @media (max-width:  425px){
    .intro {
    background-position: 25% 75%;
     }
     .input-column{
      width: 30px;
     }
  }
   @media (max-width: 320px){
  .text-center {
    letter-spacing: 0px;
  }
  h4 {
    margin-bottom: 10px;
  }
 }
</style>
</head>
<body> 
<div class="container">
<div class="row">
  <div class="col-lg-12">
    <h2 class="text-center">Products</h2>
  </div>
</div>
<div class="row justify-content-center">
  <div class="d-flex flex-column col-xs-6">
    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#cartModal">Shopping Cart</button>
  </div>
</div>
<!-- Mop -->
<div class="row">
  <div class="d-flex flex-column col-lg-6 align-items-center">
    <img src="images/mop.jpg" class="img-responsive img-product"><br/>
    <i>Click Image to Enlarge/Shrink</i><br/>
    <button type="button" class="btn btn-outline-success write-feedback" data-feedbackID="1" data-toggle="modal" data-target="#myModal">Write Feedback!</button>
    <!--<input type="button" name="write-feedback" value="Write Feedback!">-->
  </div>
  <div class="d-flex flex-column col-lg-6">
    <div class="row d-flex justify-content-between"> 
      <h3 class="header col-lg-6">Mop</h3>
      <div class="star-container col-lg-6" data-name="mop"><div class="star-outer"></div></div>
    </div><br/>
        <div class="row">
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
          The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
        <div class="row d-flex justify-content-between">
            <h2>$5.99</h2>
            <button type="button" class="btn btn-outline-info addToCart" data-on-off="off" data-feedbackID="1" >Add to Cart</button>
            <!--<input type="button" name="Cart" value="Add to Cart">-->
        </div><br/>
        <div class="row">
          <button type="button" class="btn btn-outline-success feedback-btn write-feedback" data-on-off="off" data-feedbackID="1">Show Feedback</button>
          <!--<input class="feedback-btn" data-feedbackID="1" type="button" name="hide-show-feedback" value="Show Feedback">-->
        </div>
        <div class="row feedbacks" data-feedbackID="1">
          <blockquote class="blockquote text-right">
           <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><footer class="blockquote-footer"><span class="firstname">Victor</span>&nbsp<span class="lastname">Liu</span></footer> -->
          </blockquote>
        </div>
  </div>
</div>
<!-- Backpack -->
<div class="row">
  <div class="d-flex flex-column col-lg-6 align-items-center">
    <img src="images/backpack.jpg" class="img-responsive img-product"><br/>
    <i>Click Image to Enlarge/Shrink</i><br/>
    <button type="button" class="btn btn-outline-success write-feedback" data-feedbackID="2" data-toggle="modal" data-target="#myModal">Write Feedback!</button>
    <!--<input type="button" name="write-feedback" value="Write Feedback!">-->
  </div>
  <div class="d-flex flex-column col-lg-6">
    <div class="row d-flex justify-content-between"> 
      <h3 class="header col-lg-6">Backpack</h3>
      <div class="star-container col-lg-6" data-name="backpack"><div class="star-outer"></div></div>
    </div><br/>
        <div class="row">
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
          The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
        <div class="row d-flex justify-content-between">
            <h2>$30.99</h2>
            <button type="button" class="btn btn-outline-info addToCart" data-on-off="off" data-feedbackID="2">Add to Cart</button>
            <!--<input type="button" name="Cart" value="Add to Cart">-->
        </div><br/>
        <div class="row">
          <button type="button" class="btn btn-outline-success feedback-btn" data-on-off="off" data-feedbackID="2">Show Feedback</button>
          <!--<input class="feedback-btn" data-feedbackID="1" type="button" name="hide-show-feedback" value="Show Feedback">-->
        </div>
        <div class="row feedbacks" data-feedbackID="2">
          <blockquote class="blockquote text-right">
           <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><footer class="blockquote-footer"><span class="firstname">Victor</span>&nbsp<span class="lastname">Liu</span></footer> -->
          </blockquote>
        </div>
  </div>
</div>
<!-- Paper Towel -->
<div class="row">
  <div class="d-flex flex-column col-lg-6 align-items-center">
    <img src="images/paper_towel.jpg" class="img-responsive img-product"><br/>
    <i>Click Image to Enlarge/Shrink</i><br/>
    <button type="button" class="btn btn-outline-success write-feedback" data-feedbackID="3" data-toggle="modal" data-target="#myModal">Write Feedback!</button>
    <!--<input type="button" name="write-feedback" value="Write Feedback!">-->
  </div>
  <div class="d-flex flex-column col-lg-6">
    <div class="row d-flex justify-content-between"> 
      <h3 class="header col-lg-6">Paper Towel</h3>
      <div class="star-container col-lg-6" data-name="Paper Towel"><div class="star-outer"></div></div>
    </div><br/>
        <div class="row">
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
          The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
        <div class="row d-flex justify-content-between">
            <h2>$8.99</h2>
            <button type="button" class="btn btn-outline-info addToCart" data-on-off="off" data-feedbackID="3">Add to Cart</button>
            <!--<input type="button" name="Cart" value="Add to Cart">-->
        </div><br/>
        <div class="row">
          <button type="button" class="btn btn-outline-success feedback-btn" data-on-off="off" data-feedbackID="3">Show Feedback</button>
          <!--<input class="feedback-btn" data-feedbackID="1" type="button" name="hide-show-feedback" value="Show Feedback">-->
        </div>
        <div class="row feedbacks" data-feedbackID="3">
          <blockquote class="blockquote text-right">
           <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><footer class="blockquote-footer"><span class="firstname">Victor</span>&nbsp<span class="lastname">Liu</span></footer> -->
          </blockquote>
        </div>
  </div>
</div>
<!-- Pillow -->
<div class="row">
  <div class="d-flex flex-column col-lg-6 align-items-center">
    <img src="images/pillow.jpg" class="img-responsive img-product"><br/>
    <i>Click Image to Enlarge/Shrink</i><br/>
    <button type="button" class="btn btn-outline-success write-feedback" data-feedbackID="4" data-toggle="modal" data-target="#myModal">Write Feedback!</button>
    <!--<input type="button" name="write-feedback" value="Write Feedback!">-->
  </div>
  <div class="d-flex flex-column col-lg-6">
    <div class="row d-flex justify-content-between"> 
      <h3 class="header col-lg-6">Pillow</h3>
      <div class="star-container col-lg-6" data-name="Pillow"><div class="star-outer"></div></div>
    </div><br/>
        <div class="row">
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
          The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
        <div class="row d-flex justify-content-between">
            <h2>$41.99</h2>
            <button type="button" class="btn btn-outline-info addToCart" data-on-off="off" data-feedbackID="4">Add to Cart</button>
            <!--<input type="button" name="Cart" value="Add to Cart">-->
        </div><br/>
        <div class="row">
          <button type="button" class="btn btn-outline-success feedback-btn" data-on-off="off" data-feedbackID="4">Show Feedback</button>
          <!--<input class="feedback-btn" data-feedbackID="1" type="button" name="hide-show-feedback" value="Show Feedback">-->
        </div>
        <div class="row feedbacks" data-feedbackID="4">
          <blockquote class="blockquote text-right">
           <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><footer class="blockquote-footer"><span class="firstname">Victor</span>&nbsp<span class="lastname">Liu</span></footer> -->
          </blockquote>
        </div>
  </div>
</div>
<!-- Sunglasses -->
<div class="row">
  <div class="d-flex flex-column col-lg-6 align-items-center">
    <img src="images/sunglasses.jpg" class="img-responsive img-product"><br/>
    <i>Click Image to Enlarge/Shrink</i><br/>
    <button type="button" class="btn btn-outline-success write-feedback" data-feedbackID="5" data-toggle="modal" data-target="#myModal">Write Feedback!</button>
    <!--<input type="button" name="write-feedback" value="Write Feedback!">-->
  </div>
  <div class="d-flex flex-column col-lg-6">
    <div class="row d-flex justify-content-between"> 
      <h3 class="header col-lg-6">Sunglasses</h3>
      <div class="star-container col-lg-6" data-name="Sunglasses"><div class="star-outer"></div></div>
              <!--
          <div class="star-inner"></div>
          <p>4.7</p>
          -->
    </div><br/>
        <div class="row">
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
          The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
        <div class="row d-flex justify-content-between">
            <h2>$200</h2>
            <button type="button" class="btn btn-outline-info addToCart" data-on-off="off" data-feedbackID="5">Add to Cart</button>
            <!--<input type="button" name="Cart" value="Add to Cart">-->
        </div><br/>
        <div class="row">
          <button type="button" class="btn btn-outline-success feedback-btn" data-on-off="off" data-feedbackID="5">Show Feedback</button>
          <!--<input class="feedback-btn" data-feedbackID="1" type="button" name="hide-show-feedback" value="Show Feedback">-->
        </div>
        <div class="row feedbacks" data-feedbackID="5">
          <blockquote class="blockquote text-right">
           <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><footer class="blockquote-footer"><span class="firstname">Victor</span>&nbsp<span class="lastname">Liu</span></footer> -->
          </blockquote>
        </div>
  </div>
</div>
</div>
<!-- Feedback Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header d-flex justify-content-center">
        <h4 class="modal-title">Feedback Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="d-flex flex-column">
          <input class="hidden-id" type="hidden" name="hiddenID" value=""> 
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" id="input-fname" name="modal-fname" placeholder="Enter First Name" required>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" id="input-lname" name="modal-lname" placeholder="Enter Last Name" required>
          </div>
          <div class="form-group">
            <label>Rating (1-5 Star)</label>
            <input type="number" class="form-control" id="input-quantity" name="modal-quantity" min="1" max="5" step="0.1" required>
          </div>
          <div class="form-group">
            <label>Write Feedback!</label>
            <textarea class="form-control" id="modal-textarea" name="modal-textarea" rows="2" required></textarea>
          </div>
          <div class="form-check">
            <small>Are you over 18 years old?</small>
            <input type="checkbox" name="modal-checkbox" id="eighteen-check" required>
          </div><br/>
          <button type="submit" name="modal-submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- Shopping Cart -->
<div class="modal fade" id="cartModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header d-flex justify-content-center">
        <h4 class="modal-title">Shopping Cart</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <table class="table">
            <thead>
              <tr id="cart-header">
                <th scope="col">Product Name</th>
                <th class="input-column" scope="col">Quantity</th>
                <th scope="col"></th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody> <!--Content added here -->
            </tbody>
          </table>
          <div class="row justify-content-center">
            <button type="submit" id="checkout-btn" data-toggle="modal" data-dismiss="modal" data-target="" name="modal-submit" class="btn btn-primary">Checkout!</button>
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- Checkout -->
<div class="modal fade" id="checkout-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header d-flex justify-content-center">
        <h4 class="modal-title">Shopping Cart</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row justify-content-center">
         <p>Check Out Successful!</p>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
      </div>

    </div>
  </div>
</div>
<!--TODO: When "checkout" is clicked, another modal pops up and dissappears after 2 seconds with the text saying "Successfully checked out".-->


    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="products_frontend.js"></script>
</body>
</html>