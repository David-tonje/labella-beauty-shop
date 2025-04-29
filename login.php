<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - LABELLA</title>
  <link rel="stylesheet" href="style.css">

  <style>
        .form-container {
    max-width: 400px;
    margin: 60px auto;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    background: #fff0f7;
    font-family: 'Poppins', sans-serif;
  }
  
  .form-container h2 {
    color: #a6005a;
    text-align: center;
    margin-bottom: 20px;
  }
  
  .form-container input {
    width: 100%;
    padding: 12px 15px;
    margin: 10px 0;
    border-radius: 30px;
    border: 1px solid #ccc;
    outline: none;
  }
  
  .form-container button {
    width: 100%;
    padding: 12px;
    background-color: #a6005a;
    color: white;
    border: none;
    border-radius: 30px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 10px;
  }
  
  .form-container button:hover {
    background-color: #ff69b4;
  }

  .form-container a {
  color: #a6005a;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s ease;
}

.form-container a:hover {
  color: #ff69b4;
  text-decoration: underline;
}


  @media (max-width: 480px) {
  .form-container {
    padding: 20px 15px;
  }

  .form-container h2 {
    font-size: 1.3rem;
  }

  .form-container input,
  .form-container button {
    font-size: 0.95rem;
    padding: 10px;
  }
}
  </style>

</head>
<body>
  <div class="form-container">
    <h2>Welcome Back</h2>
    <form action="login_process.php" method="POST">
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
      <p>New to LABELLA? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</body>
</html>
