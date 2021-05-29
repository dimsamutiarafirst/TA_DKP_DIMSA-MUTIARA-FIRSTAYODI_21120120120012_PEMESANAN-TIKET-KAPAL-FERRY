<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kapal Ferry</title>
    <style>
        body{
            background-image: url(bgrbr.png);
            background-size: 1355px;
            background-repeat: no-repeat;
            background-position: top;
            background-attachment: scroll;
            padding: 25px;
        }
        .form{
            background-image: url(kapal.png);
            background-position: center;
            color: #000;
            font-family: verdana;
            text-align: center;
            font-size: 1em;
            width: 80%;
            margin-top: 400px;
            margin-left: 80px;
            padding: 50px;
            spacing: 20px;
        }
</style>
    <body>
    <h1 class="form">
    <?php 
    class user{
      protected $email;
      protected $password;
      protected $userData;
  
      public function __construct($email, $password){
        $this->userData=[
          (object)[
            'email' => "06dimsa@gmail.com",
            'password' => "123",
            'username' => 'Dimsa Mutiara Firstayodi'
          ],
          (object)[
            'email' => "31sabila@gmail.com",
            'password' => "123",
            'username'=>'Salsabila Devinta'
          ],
        ];
        $this->email = $email;
        $this->password = $password;
      }
  
      protected function auth(){
        foreach($this->userData as $key => $value){
          if($value->email == $this->email && $value->password == $this->password ){
            return $value;
          }
        }
        return false;
      }

      public function login(){
        $isUser = $this->auth();
        if($isUser){
          return $data = $isUser->username;
        } else {
          return false;
        }
      }
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new user($email, $password);

    if($getUsername = $user->login()){
    echo "Halo, ".$getUsername;
    echo '<br>';
    echo 'Tiket Anda berhasil dipesan';
    echo '<br>';
    echo '<br>';
    echo 'Jangan lupa untuk membawa tiket saat akan melakukan perjalanan';
    echo '<br>';
    echo '<br>';
    echo 'Tetap Waspada dan Patuhi Protokol Kesehatan';
    echo '<br>';
    echo 'Semoga Perjalanan Anda menyenangkan';
    } else {
    echo "Maaf, akun Anda belum terdaftar.";
    }
?>
    </h1>
    </body>
</head>
</html>
        
        
        
