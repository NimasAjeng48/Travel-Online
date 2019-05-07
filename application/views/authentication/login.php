<html>
  <head>
    <title>Login MultiLevel</title>
  </head>
  <body  background="<?php echo base_url ('assets/assets/images/login.jpg')?>">
    <form method="post" action="<?php echo site_url('authentication/auth/login'); ?>" role="login">
      <?php
      //menampilkan error menggunakan alert javascript
        if(isset($error)){
        echo '<script>
        alert("'.$error.'");
        </script>';
        }
      ?>
<br><br>
<center>
        <h1>Silahkan Login Sebagai Admin</h1></br></br>
        <h3>LOGIN</h3>

        <input type="text" name="username" id="username" placeholder="Masukan Username" size="30" required/></br></br>
        <input type="password" name="password" id="password" placeholder="Masukan Password" size="30" required/></br></br>
          <br/>
        <button type="submit" name="submit" value="login">Masuk</button>
        <button type="submit" name="submit" value="login">
          <a href="<?php echo site_url('welcome/index')?>"> Cancel </a>
        </button>
      </center>
    </form>
  </body>
</html>
