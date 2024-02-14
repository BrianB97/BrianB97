<?php include 'header.php';?>
        <section class="campaignPage">
        <div class="campaignFeatured outer-width">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img
                                    src="images/donation.png"
                                    alt=""/></div>
                                    </div>
            </div>
            <br>
<?php             
if (isset($_POST['submit'])) {

	if (isset($_POST['amount'])) {
		$amount = $_POST['amount'];
	}
	if (isset($_POST['firstname'])) {
		$firstname = $_POST['firstname'];
	}
	if (isset($_POST['lastname'])) {
		$lastname = $_POST['lastname'];
    }
    if (isset($_POST['phonenumber'])) {
		$phonenumber = $_POST['phonenumber'];
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if (isset($_POST['addresses'])) {
		$addresses = $_POST['addresses'];
	}
	$information =
		$amount &&
		$firstname &&
        $lastname &&
        $phonenumber &&
		$email &&
		$addresses;
	if (isset($_POST["amount"])) {
		if (empty($amount)) {
			echo "Please fill in your amount <br>";
		}
	}
	if (isset($_POST["firstname"])) {
		if (empty($firstname)) {
			echo "Please fill in ypur firstname <br>";
		}
	}
	if (isset($_POST["lastname"])) {
		if (empty($lastname)) {
			echo "Please fill  your lastname <br>";
		}
    }
    if (isset($_POST["phonenumber"])) {
		if (empty($phonenumber)) {
			echo "Please fill  your phone number <br>";
		}
	}
	if (isset($_POST["email"])) {
		if (empty($email)) {
			echo "Please fill in your email <br>";
		}
	}
	if (isset($_POST["addresses"])) {
		if (empty($addresses)) {
			echo "Please fill in your addresses <br>";
		}
	}
	if (!empty($information)) {
        $stmt = $conn->prepare("SELECT firstname FROM donatie WHERE firstname = :firstname"); 
		$stmt->bindParam(':firstname', $firstname);
		$stmt->execute();
		$db_query = "INSERT INTO `donatie`(
            `amount`,
            `firstname`,
            `lastname`,
            `phonenumber`,
            `email`,
            `addresses`)
            VALUES(
            :amount,
            :firstname,
            :lastname,
            :phonenumber,
            :email,
            :addresses)";
		$db_result = $conn->prepare($db_query);
		$add_to_db = $db_result->execute(array(
			":amount" => $amount,
			":firstname" => $firstname,
            ":lastname" => $lastname,
            ":phonenumber"=> $phonenumber,
			":email" => $email,
			":addresses" => $addresses
		));
	}
}
?>            


            <div class="container ">
               <div class="row">
                   <div class="col-5"></div>

                   <div class="col-2" style="background-color:lightblue">
                        <form method="POST"  class="form-container " id="contact-form">

                        <div class="heading_1">Donate to Brian's car page</div>

                        
                        <div class="amount">
                            <div class="button">
                                <p>

                                    <input type="text" class="set-amount required" name="amount" value=""
                                           data-validation-message="Amount is required"
                                           placeholder="Enter your amount ">
                                </p>
                            </div>
                        </div>
                        <div class="fields">
                            <h2 class="heading_1">Your details</h2>
                            <p>
                                <input type="text" name="firstname" placeholder="First Name" class="required" value=""
                                       data-validation-message="First Name is required">
                            </p>
                            <p>
                                <input type="text" name="lastname" placeholder="Last Name" class="required" value=""
                                       data-validation-message="Last Name is required">
                            </p>
                            <p>
                                <input type="email" name="email" placeholder="Email Address" class="required" value=""
                                       data-validation-message="Email Address is required">
                            </p>
                            <p>
                                <input type="text" name="phonenumber" placeholder="Phone Number" class="required" value=""
                                       data-validation-message="phone Number is required">
                            </p>
                            <p>
                                <input type="text" name="addresses" placeholder="Address" class="required" value=""
                                       data-validation-message="Address is required">
                            </p>

                        </div>


                        <div class="confirm">

                        </div>
                        <button onclick="succesful()" class="link_1 black" name="submit" type="submit"> Donate now
                        </button>
                        <script>
                            function succesful() {
                                alert("Donation succesful");
                            }
                            </script>

                    </form><br></div>
                    <div class="col-5"></div>

</div>
            </div>
            <br>
               <section class="move">
            <div class="site-width para_1">
                <h3 class="heading_1">About us</h3>
                <p>
                </p>
                <a href="About-us.php" class="link_1 white">Explore</a>
            </div>
        </section>
    </section>

    <?php include 'footer.php';?>
