<?php 
$pageTitle = "Contact | Pink Lockets";
include('header.php'); ?>

        <div class="grid_6">
          <form>
            <p>First Name:</p><input type="text" name="firstname"><br>
            <p>Last Name:</p><input type="text" name="lastname"><br>
            <p>Email:</p><input type="text" name="email"><br>
            <p>Phone:</p><input type="text" name="phone"><br>
            <p>Message:</p><textarea name="message" cols="50" rows="5" id="message"></textarea>
            <input name="submit" type="submit" class="textareaValidMsg" id="submit" value="Submit" />
            <input type="reset" name="clear" id="clear" value="Clear" /> 
          </form>
            <script type="text/javascript">
              var frmvalidator  = new Validator("contactform");
              frmvalidator.addValidation("name","req","Please enter your First and Last Name");
              frmvalidator.addValidation("name","maxlen=50","Max length for FirstName is 50");
              frmvalidator.addValidation("name","alpha_s","Alphabetic chars only");
              frmvalidator.addValidation("phone","maxlen=50");
              frmvalidator.addValidation("phone","req");
              frmvalidator.addValidation("email","req","Please enter a valid Email");
              frmvalidator.addValidation("email","maxlen=50");
              frmvalidator.addValidation("email","email");
              frmvalidator.addValidation("message","req","Please leave a comment or question before submitting. Thank You!");
              frmvalidator.addValidation("message","maxlen=500");
            </script>
<?php include('footer.php'); ?>