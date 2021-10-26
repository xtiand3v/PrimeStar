<form method="POST">
<!-- Modal -->
<div class="modal fade" id="liteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;background: rgba(0,0,0,0.8)">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LITE PLAN SUBSCRIPTION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to continue? 
        <br>
        <small>Upon submitting, you will be redirected to the checkout page.</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="liteBtn" class="btn btn-warning" value="Submit">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="proModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;background: rgba(0,0,0,0.8)">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PRO PLAN SUBSCRIPTION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to continue? <br>
        <small>Upon submitting, you will be redirected to the checkout page.</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="proBtn" class="btn btn-warning" value="Submit">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="premiumModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;background: rgba(0,0,0,0.8)">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PREMIUM PLAN SUBSCRIPTION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to continue? <br>
        <small>Upon submitting, you will be redirected to the checkout page.</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="premiumBtn" class="btn btn-warning" value="Submit">
      </div>
    </div>
  </div>
</div>
</form>


<?php 
include ('inc/connection.php');
$email = $_SESSION['email'];
if(isset($_POST['liteBtn'])){
    $check = mysqli_query($conn,"SELECT * FROM client_subscription WHERE client_email = '$email'");
    if(mysqli_num_rows($check) >= 1){
        ?>
        <script>
               swal({
                        title: "Error",
                        text: "You already subscribed a plan.",
                        icon: "info",
                        button: false,
                    })
        </script>
        <?php

    } else {
        $insertPro = mysqli_query($conn,"INSERT into client_subscription(client_email,subscription_id,subscription_status,payment_status,review_limit,remarks,subscription_added) VALUES ('$email','1','Trial','Unpaid','10','',NOW())");
    if($insertLite){
        ?>
        <script>
            window.open('https://buy.stripe.com/eVa8yo1LM4JxddS9AK', '_blank');
                    
            swal({
                        title: "Success",
                        text: "Subscribed to Lite Plan successfully.",
                        icon: "success",
                        button: false,
                    })
                    setInterval(function() {
                        window.location.href = "home.php"
                    }, 1000);
        </script>
        <?php
    }
}
}


if(isset($_POST['proBtn'])){
    $check = mysqli_query($conn,"SELECT * FROM client_subscription WHERE client_email = '$email'");
    if(mysqli_num_rows($check) >= 1){
        ?>
        <script>
               swal({
                        title: "Error",
                        text: "You already subscribed a plan.",
                        icon: "info",
                        button: false,
                    })
        </script>
        <?php

    } else {
    $insertPro = mysqli_query($conn,"INSERT into client_subscription(client_email,subscription_id,subscription_status,payment_status,review_limit,remarks,subscription_added) VALUES ('$email','2','Trial','Unpaid','20','',NOW())");
    if($insertPro){
        ?>
        <script>
            window.open('https://buy.stripe.com/bIY8yo8aa2Bp5LqfZ9', '_blank');
                    
            swal({
                        title: "Success",
                        text: "Subscribed to Pro Plan successfully.",
                        icon: "success",
                        button: false,
                    })
                    setInterval(function() {
                        window.location.href = "home.php"
                    }, 1000);
        </script>
        <?php
    }
}
}


if(isset($_POST['premiumBtn'])){
    $check = mysqli_query($conn,"SELECT * FROM client_subscription WHERE client_email = '$email'");
    if(mysqli_num_rows($check) >= 1){
        ?>
        <script>
               swal({
                        title: "Error",
                        text: "You already subscribed a plan.",
                        icon: "info",
                        button: false,
                    })
        </script>
        <?php

    } else {
        $insertPro = mysqli_query($conn,"INSERT into client_subscription(client_email,subscription_id,subscription_status,payment_status,review_limit,remarks,subscription_added) VALUES ('$email','3','Trial','Unpaid','35','',NOW())");
    if($insertPremium){
        ?>
        <script>
            window.open('https://buy.stripe.com/28o15W0HI4Jx7Ty00c', '_blank');
                    
            swal({
                        title: "Success",
                        text: "Subscribed to Premium Plan successfully.",
                        icon: "success",
                        button: false,
                    })
                    setInterval(function() {
                        window.location.href = "home.php"
                    }, 1000);
        </script>
        <?php
    }
}
}
?>



