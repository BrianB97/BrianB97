<?php include 'header.php';?>
      

        <section class="contactpagina">
        <div class="parallexContainer outer-width" style="   background-color: #3c2f8d;">
            <div class="parallex">
                <div id="background" class="mouse-bg"
                     style="background-image: url('images/Find us.png');"></div>
                <div id="foreground" class="mouse-bg">
                    <h1 class="title">
                        <small>   Find us</small>
                        Get in touch
                    </h1>
                </div>

            </div>
        </div>
        <div class="addresssContainer">
                            <div class="two_cols  site-width">
                    <div class="right addresses">
                        <div>
                            <h2 class="heading_1">ADDRESSES</h2>
                            
                            <div class="address" itemscope itemtype="http://schema.org/LocalBusiness">
                                <h1><span itemprop="name">Brian's car page  </span></h1>
                                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                    <span itemprop="addressLocality">Nederland</span>
                                    <h2 class="heading_2">Contact</h2>
                                    <span itemprop="streetAddress">P.O Box: 14321</span>
                                </div>
                                <span itemprop="telephone"> Phone: 0612345654</span>
                                <span itemprop="fax"> Fax: </span>
                                <span itemprop="email"> information@carpage.org</span>
                            </div>
                        </div>


                    </div>

                    <div class="left">
                        <img src="images/contact.jpg"
                             alt="Brian's car page "/>
                    </div>
                </div>
            
        </div>
        <div class="two_cols">


            <div class="right">
                <div class="map__container">
                <div id="googleMap" style="width:100%;height:400px;"></div>

               <script>
                function myMap() {
                    var mapProp= {
                        center:new google.maps.LatLng(51.508742,-0.120850),
                        zoom:5,};
                    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);}
            </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC45H7zKW9c0lW6xMw-5NdCPyGOh-kfEAA&callback=myMap" type="text/javascript" ></script>

                </div>

            </div>
            <div class="left form">
                <div>
                    <h2 class="heading_1">SEND US A MESSAGE</h2>
                    <?php
if (isset($_POST['submit'])) {
	
	if (isset($_POST['Gebruikersnaam'])) {
		$Gebruikersnaam = $_POST['Gebruikersnaam'];
	}
	if (isset($_POST['Telefoonnummer'])) {
		$Telefoonnummer = $_POST['Telefoonnummer'];
	}
	if (isset($_POST['Naam'])) {
		$Naam = $_POST['Naam'];
	}
	if (isset($_POST['Emailadres'])) {
		$Emailadres = $_POST['Emailadres'];
	}
	if (isset($_POST['Bericht'])) {
		$Bericht = $_POST['Bericht'];
	}
	$information =
    $Gebruikersnaam &&
		$Telefoonnummer &&
		$Naam &&
		$Emailadres &&
		$Bericht;
	if (isset($_POST["Gebruikersnaam"])) {
		if (empty($Gebruikersnaam)) {
			echo "Please fill in your username <br>";
		}
	}
	if (isset($_POST["Telefoonnummer"])) {
		if (empty($Telefoonnummer)) {
			echo "Please fill in ypur firstname <br>";
		}
	}
	if (isset($_POST["Naam"])) {
		if (empty($Naam)) {
			echo "Please fill  your Name <br>";
		}
	}
	if (isset($_POST["Emailadres"])) {
		if (empty($Emailadres)) {
			echo "Please fill in your email <br>";
		}
	}
	if (isset($_POST["Bericht"])) {
		if (empty($Bericht)) {
			echo "Please fill in your message <br>";
		}
	}
	if (!empty($information)) {
		$stmt = $conn->prepare("SELECT Gebruikersnaam FROM contact WHERE Gebruikersnaam = :Gebruikersnaam");
		$stmt->bindParam(':Gebruikersnaam', $Gebruikersnaam);
		$stmt->execute();
		$db_query = "INSERT INTO `contact`(
            `Gebruikersnaam`,
            `Telefoonnummer`,
            `Naam`,
            `Emailadres`,
            `Bericht`)
            VALUES(
            :Gebruikersnaam,
            :Telefoonnummer,
            :Naam,
            :Emailadres,
            :Bericht)";
		$db_result = $conn->prepare($db_query);
		$add_to_db = $db_result->execute(array(
			":Gebruikersnaam" => $Gebruikersnaam,
			":Telefoonnummer" => $Telefoonnummer,
			":Naam" => $Naam,
			":Emailadres" => $Emailadres,
			":Bericht" => $Bericht
		));
	}
}
?>

                    <form method="POST"  accept-charset="UTF-8" class="form-container clearfix" id="contact-form">
                        <div class="input input-nao">
                            <input class="input-field input-field-nao required" type="text" name="Gebruikersnaam" id="inputName" >
                            <label class="input-label input-label-nao" for="inputName">
                                <span class="input-label-content input-label-content-nao">Username</span>
                            </label>
                           
                        </div>
                        <div class="input input-nao">
                            <input class="input-field input-field-nao required" type="text" name="Naam" id="inputName" >
                            <label class="input-label input-label-nao" for="inputName">
                                <span class="input-label-content input-label-content-nao">Name</span>
                            </label>
                        </div>
                        
                    <div class="input input-nao">
                        <input class="input-field input-field-nao required" type="text" name="Telefoonnummer" id="inputEmail" >
                        <label class="input-label input-label-nao" for="inputEmail">
                            <span class="input-label-content input-label-content-nao">Phone</span>
                        </label>
                    </div>
                        <div class="input input-nao">
                            <input class="input-field input-field-nao required" name="Emailadres" type="email" id="inputEmail" >
                            <label class="input-label input-label-nao" for="inputEmail">
                                <span class="input-label-scontent input-label-content-nao">Email Address</span>
                            </label>
                        </div>
                        <div class="input input-nao">
                            <textarea class="input-field input-field-nao required" id="inputMsg" name="Bericht" rows="5" cols="40"></textarea>
                            <label class="input-label input-label-nao" for="inputMsg">
                                <span class="input-label-content input-label-content-nao">Your message</span>
                            </label>
                        </div>
                        
                        <button onclick="succesful()" id="feedback-submit-button" class="link_1 white btn-submit" name="submit" type="submit">
                            <span>Send</span>
                            
                        </button>
                        <script>
                            function succesful() {
                                alert("Message succesfully send");
                            }
                            </script>
                    </form>
                </div>
            </div>
        </div>
    </section> 

    <?php include 'footer.php';?>

