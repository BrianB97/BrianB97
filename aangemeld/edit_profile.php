<?php
session_start();
//print_r( $_SESSION );
if (!isset($_SESSION['ID'])) {
    header("Location:register.php");
}
?>

<?php include 'header.php';?>

<?php
       
        $sql = "SELECT * FROM `member` WHERE username = '" . $_SESSION['username'] . "'";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        ?>

        <!--Hier begint het formulier voor het updaten van het ingelogde account-->
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>My Account</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <?php foreach ($people as $person): ?>

                            <tr>
                                <th>Username</th>
                                <td><?php echo $person->username; ?></td>
                            </tr>
                            <tr>
                                <th>Firstname</th>
                                <td><?php echo $person->firstname; ?></td>
                            </tr>
                            <tr>
                                <th>Lastname</th>
                                <td><?php echo $person->lastname; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $person->email; ?></td>
                            </tr>
                            <tr>
                                <th>Update</th>
                                <td><a class="btn btn-primary btn-block" data-toggle="modal"
                                       data-target="#edit">Edit</a></td>
                            </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div><!-- Hier eindigd het form-->
        <?php
        if (isset($_POST['submit'])) {
            $data = [
                'id' => $_POST['ID'],
                'username' => $_POST['username'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
            ];
            $sql = "UPDATE member SET username = :username, firstname = :firstname, lastname = :lastname, email = :email WHERE id = :id";
            $conn->prepare($sql)->execute($data);

            if ($sql) {
                $_SESSION['username'] = $_POST['username'];
                header('Refresh:0');
            }
        }
        ?>
        <!-- Modal -->
        <div class="modal fade" id="edit" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Account</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="edit_profile" enctype="multipart/form-data">

                            <div class="form-group">
                                <input value="<?php echo $person->ID; ?>" type="hidden" name="ID" id="id"
                                       class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input value="<?php echo $person->username; ?>" type="text" name="username"
                                       id="username"
                                       class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input value="<?php echo $person->firstname; ?>" type="text" name="firstname"
                                       id="firstname"
                                       class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input value="<?php echo $person->lastname; ?>" type="text" name="lastname"
                                       id="lastname"
                                       class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="<?php echo $person->email; ?>" name="email" id="email"
                                       class="form-control"/>
                            </div>
                            <input type="submit" id="submit" name="submit" class="btn btn-info" value="Update"/>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!--end modal content-->
            </div><!--end modal dialog-->
        </div><!--eind modal-->

  
<script>
    $('#collapseOne').on('show.bs.collapse', function () {
        $('.panel-heading').animate({
            backgroundColor: "#515151"
        }, 500);
    })

    $('#collapseOne').on('hide.bs.collapse', function () {
        $('.panel-heading').animate({
            backgroundColor: "#00B4FF"
        }, 500);
    })
</script>


<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php include 'footer.php';?>