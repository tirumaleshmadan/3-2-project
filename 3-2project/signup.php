<?php
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
       <head>
            <title>CodeTechie</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
            
            <link media="all" rel="stylesheet" href="css/1.css">
            <link rel="stylesheet" type="text/css" href="https://hrcdn.net/fcore/assets/hackerrank_r_app-23692ab37e2f0601d887.css">
            <link rel="stylesheet" type="text/css" href="css/3.css">
            <link rel="stylesheet" type="text/css" href="css/4.css">
            <link rel="stylesheet" type="text/css" href="css/5.css">
            <link rel="stylesheet" type="text/css" href="css/6.css">
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

            <style type="text/css">
                  
            </style>
       </head>
       <body>
            <div class="content">
                  <div class="body-wrap  community-page auth-page login-page">
                        <div class="toast-message loading">
                              <span class="toast-container containment">
                                    <i class="ui-icon-loading"></i>
                                    <span class="toast-text">Loading...</span>
                              </span>
                        </div>
                        <div class="theme-m new-design">
                              <div class="container"></div>
                              <div class="community-content">
                                    <div class="auth-container container theme-m">
                                          <div class="auth-content-wrap">
                                                <div class="logo-wrap">
                                                      <img class="logo-img" src="title.png">
                                                </div>
                                                <div class="auth-box-container">
                                                      <div class="auth-box">
                                                            <div class="ui-tabs-wrap auth-content">
                                                                  <div class="render-list clearfix">
                                                                        <ul class="tab-header">
                                                                              <li class="tab-item active">
                                                                                    <a class="tab-item-link" href="signup.php">Signup</a>
                                                                              </li>
                                                                              <li class="tab-item">
                                                                                    <a class="tab-item-link" href="login.php">Login</a>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                                  <div class="tab-list-content">
                                                                        <div class="signup-form auth-form theme-m">
                                                                              <form class="form" method="post">
                                                                                    <div class="form-item">
                                                                                          <div class="custom-input theme-m size-large">
                                                                                                <div class="input-wrap align-icon-left has-icon">
                                                                                                      <input id="input-6" type="text" class="input" placeholder="First &amp; Last name" aria-label="First &amp; Last name" aria-invalid="false" name="name" value="" required/>
                                                                                                      <i class="ui-icon-user input-icon"></i>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="form-item">
                                                                                          <div class="custom-input theme-m size-large">
                                                                                                <div class="input-wrap align-icon-left has-icon">
                                                                                                      <input id="input-7" type="email" class="input" placeholder="Email" aria-label="Email" aria-invalid="false" name="email" value="" required/>
                                                                                                      <i class="ui-icon-mail input-icon"></i>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="form-item">
                                                                                          <div class="custom-input theme-m size-large">
                                                                                                <div class="input-wrap align-icon-left has-icon">
                                                                                                      <input id="input-8" type="password" class="input" placeholder="Your password" aria-label="Your password" aria-invalid="false" name="password" value="" required/>
                                                                                                      <i class="ui-icon-lock input-icon"></i>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="form-item clearfix">
                                                                                          <button class="ui-btn ui-btn-large ui-btn-primary auth-button" tabindex="0" type="submit" name="submit" value="request">
                                                                                                <div class="ui-content align-icon-right">
                                                                                                      <span class="ui-text">Create An Account</span>
                                                                                                </div>
                                                                                          </button>
                                                                                    </div>
                                                                                    <?php
                                                                                          if(isset($_POST["submit"]))
                                                                                          {
                                                                                                $name=$_POST["name"];
                                                                                                $email=$_POST["email"];
                                                                                                $_SESSION['user_email']=$email;
                                                                                                $password=$_POST["password"];
                                          mysqli_query($my,"insert into user_data(name,email,password) value('$name','$email','$password')");
                                                                                          }
                                                                                    ?>
                                                                              </form>
                                                                        </div>
                                                                        <div class="social-login">
                                                                              <div class="social-login-label">
                                                                                    <span class="label-text">or connect with</span>
                                                                              </div>
                                                                              <ul class="social-btn-wrap">
                                                                                    <li class="social-btn-item">
                                                                                          <a class="social-btn" data-automation="facebook" data-analytics="SignupFacebook">
                                                                                                <img class="social-btn-icon" alt="Login with Facebook" src="https://hrcdn.net/fcore/assets/facebook-colored-af4249157d.svg">
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="social-btn-item">
                                                                                          <a class="social-btn" data-analytics="SignupGoogle" data-automation="google">
                                                                                                <img class="social-btn-icon" alt="Login with Google" src="https://hrcdn.net/fcore/assets/google-colored-20b8216731.svg">
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="social-btn-item">
                                                                                          <a class="social-btn" data-analytics="SignupLinkedIn">
                                                                                                <img class="social-btn-icon" alt="Login with LinkedIn" src="https://hrcdn.net/fcore/assets/linkedin-colored-1db195795c.svg">
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="social-btn-item">
                                                                                          <a class="social-btn" data-analytics="SignupGithub">
                                                                                                <img class="social-btn-icon" alt="Login with Github" src="https://hrcdn.net/fcore/assets/github-colored-1db995054b.svg">
                                                                                          </a>
                                                                                    </li>
                                                                              </ul>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>     
      </body>