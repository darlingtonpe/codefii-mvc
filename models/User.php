<?php
class Users
{
  public function __construct()
  {
    if(Add::exists())//don't modify this
    {
        if(Token::check(Add::get('token')))//don't modify this
        {
          $validate  = new Validate();
          $validate = $validate->check($_POST, array(
            'username'=>array(
                'required'=>true,
                 'min'=>2,
                 'max'=>20,
                 'unique'=>'users'
            ),
            'password'=>array(
                'required'=>true,
                'min'=>6

            ),
            'confirm_password'=>array(
                'required'=>true,
                'matches'=>'password'
            ),
            'name'=>array(
              'required'=>true,
               'min'=>2,
               'max'=>50
            )
          ));
            if($validate->passed())
            {
            // Session::flash('success','you are registered successfully!');//remember to assign two parameter to this
            //   header("Location:index.php");
            //instantiate the user class
            $user = new User;
            //call the hash class and salt method
            $salt = Hash::salt(150);
              try{
                $user->create('users',array(
                    'username'=> Add::get('username'),
                    'password'=> Hash::make(Add::get('password'),$salt),
                    'salt'=>$salt,
                    'name'=>Add::get('name'),
                    'joined'=> Date::now(),
                    'group'=>1
                ));
              throw new RuntimeException();
              }catch(LogicException $e)
              {
                die($e->getMessage());
              }finally{
                Session::flash('home','registration successful!');
                Redirect::to('index');//don't pass the extension alongside with the page name
                // var_dump($user);

              }//no exception cought woooow!
                }else{
                  foreach($validate->errors() as $error)
                  {
                    echo $error.'<br />';
                  }

            }

        }

    }

  }
}
?>
