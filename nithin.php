<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT MANAGEMENT SYSTEM</title>
        
        <style>
            .register
            {
                display: none;
            }
            body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    background-image: url('https://img.freepik.com/free-vector/silhouette-forest-landscape-background_1308-70459.jpg'); /* Replace 'your-background-image.jpg' with the actual path to your background image */
    background-size: cover; /* Ensures that the background image covers the entire body */
    background-position: center; /* Centers the background image */
  }
            .wrapper{
    position: relative;
    width: 400px;
    height: 440px;
    background: transparent;
    border: 2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0,0,0,.5);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden; 
    transition: height .2s ease;
   }
   .wrapper.active{
    height: 520px;
   }
   .wrapper .form-box{
    width: 100%;
    padding: 40px;
   }
   .wrapper .form-box.login{
    transition: transform .18s ease;
    transform: translateX(0);
   }
   .wrapper.active .form-box.login{
    transition: none;
    transform: translate(-400px);
   }
   .wrapper .form-box.register{
    position:absolute;
    transition: none;
    transform: translate(400px);
   }
   .wrapper.active .form-box.register{
    transition: transform .18s ease;
    transform: translateX(0);
   }
   
   .wrapper .icon-close{
    position: absolute;
    top: 0;
    right: 0;
    width: 45px;
    height: 45px;
    background: #162938;
    font-size: 2em;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom-left-radius: 20px;
    cursor: pointer
    
   }
   .form-box h2{
    font-size: 2em;
    color: #162938;
    text-align: center;
   }
   .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #162938;
    margin: 30px 0;

   }
   .input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translate(-50%);
    font-size: 1em;
    color: #162938;
    font-weight: 500;
    pointer-events: none;
    transition: -5s;
   }
   .input-box input:focus~label,
   .input-box input:valid~label{
    top: -5px;
   }
   .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #162038;
    font-weight: 600;
    padding: 0 35px 0 5px;
   }
   .input-box .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color: #162938;
    line-height: 57px;

   }
   .remember-forgot{
    font-size: .9em;
    color: #162938;
    font-weight: 500;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;
   }
   .remember-forgot label input{
    accent-color: #162938;
    margin-right: 3px;
   }
   .remember-forgot a{
    color: #162938;
    text-decoration: none;
   }
   .remember-forgot a:hover{
    text-decoration: underline;
   }
   .btn{
    width: 100%;
    height: 45px;
    background: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500;
   }
   .login-register{
    font-size: .9em;
    color: #162938;
    text-align: 500;
    margin: 25px 0 10px;
   }
   .login-register p a{
    color: #162938;
    text-decoration: none;
    font-weight: 600;
   }
   .login-register p a:hover{
    text-decoration: underline;
   }
   
        </style>

      

    </head>
    <center>
    <body >
        
        <!-- <nav>
            <label class="logo">Anits College</label>
            <ul>
                <li><a href="">Home </a></li>
                <li><a href="">Contact </a></li>
                <li><a href="">Admission</a></li>
                <li><a href="" class="btn btn-success">Login</a></li>
            </ul>
        </nav> -->
        <div class="wrapper">
            <span class="icon close"><ion-icon name="close"></ion-icon>
            </span>
            <div class="form-box login">
                <h2>Login</h2>
               <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                ,<button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" 
                        class="register-link">Register</a></p>
                </div>
               </form>
            </div>
            <div class="form-box register">
                <h2>Registration</h2>
               <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required>
                    <label>username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    agree to the terms & conditions</label>
                    <a href="#">Forgot Password?</a>
                </div>
                ,<button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" 
                        class="login-link">Login</a></p>
                </div>
               </form>
            </div>
        </div>


        <script>
            const wrapper=document.querySelector('.wrapper');
            const loginLink=document.querySelector('.login-link');
            const registerLink=document.querySelector('.register-link');
            registerLink.addEventListener('click',()=>{
                wrapper.classList.add('active');
            });
            loginLink.addEventListener('click',()=>{
                wrapper.classList.remove('active');
            });
        </script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        
    </body>
</center>
</html>