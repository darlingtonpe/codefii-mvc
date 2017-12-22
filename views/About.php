

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <h2>welcome</h2>
    <?php
    
    // $user->add();


     ?>
    <form method="post" action="">
      <div class="form-field">
        <label>Username</label>
        <input type="text" name="username" value=""placeholder="Username" autocomplete="off"/>
      </div>
      <div class="form-field">
        <label>Password</label>
        <input type="password" id="password"name="password" placeholder="******" autocomplete="off"/>
      </div>
      <div class="form-field strength">
            <div class="pass-info">
        <b id="strength">Strength:</b>
        <div class="figure" id="strength_human"></div>
        <div class="figure" id="strength_score"></div>
          </div>

      </div>
      <div class="form-field">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="******" autocomplete="off"/>
      </div>
      <div class="form-field">
        <label>Name</label>
        <input type="text" name="name" value=""placeholder="Name" autocomplete="off"/>
        </div>
        <div class="form-field">
          <input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
          <button type="Submit" name="submit">Submit</button>
          </div>
    </form>


  </body>
</html>
