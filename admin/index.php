<?php
$pageTitle = "Admins";
include 'init.php';

  //define the error messages
  $usernameErr = $fnameErr = $lnameErr = $emailErr = $cemailErr = $passErr = $cpassErr = '';

  //check the wanted page [Manage | Edit(Update) | Add(Insert) | Delete] before going there
  $do = isset($_GET['do'])? $_GET['do'] : 'Manage';

  if($do == 'Manage') { //manage page to show all the admins
?>
    <div class="container admin">
          <h1 class="text-center">Manage Admins</h1>
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col" class="table-dark">#ID</th>
                  <th scope="col" class="table-dark">Username</th>
                  <th scope="col" class="table-dark">Email</th>
                  <th scope="col" class="table-dark">Fullname</th>
                  <th scope="col" class="table-dark">Phone</th>
                  <th scope="col" class="table-dark">Control</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <th scope="row">5</th>
                  <td>beshoy</td>
                  <td>Beshoy Morad</td>
                  <td>besh0morta@gmail.com</td>
                  <td>01273311810</td>
                  <td>
                    <!-- here we need to send the admin id to edit or delete -->
                    <a href="?do=Edit&adminId=5" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                    <a href="?do=Delete&adminId=5" class="btn btn-danger"><i class="fas fa-user-minus"></i> Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <a href="?do=Add" class="btn btn-primary add-btn"><i class="fa fa-plus"></i> Add New Admin</a>
    </div>
<?php
  } elseif ($do == 'Add') {
    //define the error messages and input values
    $usernameErr = $fnameErr = $lnameErr = $emailErr = $cemailErr = $passErr = $cpassErr = '';
    $userName = $fName = $lName = $email = $cEmail = $pass = $cPass = '';

    // get the data from the form and validate it then insert into admin table
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      //get the data from the form
      $userName = $_POST['username'];
      $fName = $_POST['firstname'];
      $lName = $_POST['secondname'];
      $email = $_POST['email'];
      $cEmail = $_POST['confirmemail'];
      $pass = $_POST['password'];
      $cPass = $_POST['confirmpassword'];
      
      //start the validations
      //first we have to filter the input then validate it with the proper function
      $userName = input_data($userName);
      $fName = input_data($fName);
      $lName = input_data($lName);
      $email = input_data($email);
      $cEmail = input_data($cEmail);
      $pass = input_data($pass);
      $cPass = input_data($cPass);

      //then we call the validation function
      $usernameErr = validateString($userName);
      $fnameErr = validateString($fName);
      $lnameErr = validateString($lName);
      $emailErr = validateEmail($email);
      $cemailErr = validateEmail($cEmail);
      $passErr = validatePassword($pass);
      $cpassErr = validatePassword($cPass);
      //check all of the errors
      if ($usernameErr == "" && $fnameErr == "" && $lnameErr == "" && $emailErr == "" &&
          $cemailErr == "" && $passErr == "" && $cpassErr == "") { 
        //every thing good and ready to insert the data to db
        echo $userName;
        echo '<br>';
        echo $fName;
        echo '<br>';
        echo $lName;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $cEmail;
        echo '<br>';
        echo $pass;
        echo '<br>';
        echo $cPass;
      }
    }
?>
    <div class="AdminsForm container mb-5">
      <h1 class="text-center">Add New Admins</h1>
      <form class="col-lg-8 m-auto" action="?do=Add" method="POST">
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
          <input type="text" class="form-control" name="username" 
                  placeholder="User Name" aria-label="Username" aria-describedby="basic-addon1" 
                  value="<?php echo $userName; ?>" required>
        </div>
        <span class="error"><?php echo $usernameErr; ?></span>
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
          <input type="text" class="form-control" name="firstname"
                  placeholder="First Name" aria-label="FirstName" aria-describedby="basic-addon1"
                  value="<?php echo $fName; ?>" required>
        </div>
        <span class="error"><?php echo $fnameErr; ?></span>
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
          <input type="text" class="form-control" name="secondname" 
                  placeholder="Second Name" aria-label="SecondName" aria-describedby="basic-addon1"
                  value="<?php echo $lName; ?>" required>
        </div>
        <span class="error"><?php echo $lnameErr; ?></span>
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="email" class="form-control" name="email" 
                  placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" 
                  value="<?php echo $email; ?>" required>
        </div>
        <span class="error"><?php echo $emailErr; ?></span>
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="email" class="form-control" name="confirmemail"
                  placeholder="Confirm Email" aria-label="ConfirmEmail" aria-describedby="basic-addon1"
                  value="<?php echo $cEmail; ?>" required>
        </div>
        <span class="error"><?php echo $cemailErr; ?></span>
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
          <input type="password" class="form-control" name="password" id="password1"
                  placeholder="Password must be hard & complex" aria-label="ConfirmEmail" aria-describedby="basic-addon1"
                  value="<?php echo $pass; ?>" required>
          <span class="input-group-text" onclick="togglePasswordVisibility(1)"><i class="bi bi-eye"
                                                                                  id="eyeIcon1"></i></span>
        </div>
        <span class="error"><?php echo $passErr; ?></span>
        <div class="input-group mb-2">
          <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
          <input type="password" class="form-control" name="confirmpassword" id="password2"
                  placeholder="Confirm The Password" aria-label="ConfirmPassword" aria-describedby="basic-addon1"
                  value="<?php echo $cPass; ?>" required>
          <span class="input-group-text" onclick="togglePasswordVisibility(2)"><i class="bi bi-eye"
                                                                          id="eyeIcon2"></i></span>
        </div>
        <span class="error"><?php echo $cpassErr; ?></span>
        <button type="submit" class="btn btn-primary form-btn">Add</button>
      </form>
    </div>
<?php
  } elseif ($do == 'Edit') {
?>
    <!-- need to get the data of that admin and put it as value attribute for all the inputs -->
    <div class="AdminsForm container mb-5">
        <h1 class="text-center">Edit Admins</h1>
        <form class="col-lg-6 m-auto" action="?do=Update" method="POST">
          <div class="mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="Username" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="Firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname" id="Firstname" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="Secondname" class="form-label">Second Name</label>
            <input type="text" class="form-control" name="secondname" id="Secondname" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="ConfirmEmail" class="form-label">Confirm Email</label>
            <input type="email" class="form-control" name="confirmemail" id="ConfirmEmail" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="Password" required>
          </div>
          <div class="mb-3">
            <label for="ConfirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confirmpassword" id="ConfirmPassword" required>
          </div>
          <button type="submit" class="btn btn-primary form-btn">Edit</button>
        </form>
    </div>

<?php
  } elseif ($do == 'Update') {
    // get the data from the form and validate it then update the admin table
  } elseif ($do == 'Delete') {
    // get the data from the form and validate it then delete the admin
  }
?>

<?php 
include $tpl . 'footer.php';
?>