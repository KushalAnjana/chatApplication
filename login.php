<?php
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>
<?php
include_once "header.php"; 

?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>
               Chat Application
            </header>
            <form action="#">
                <div class="error-txt">
                    
                </div>
               
                    <div class="field input">
                        <label for="">
                            Email:
                        </label>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="field input">
                        <label for="">
                            Password:
                        </label>
                        <input type="password" name="password" placeholder="Enter your Password">
                        <i class="fas fa-eye"></i>
                    </div>
                   
                    <div class="field button">
                        
                        <input type="submit" value="Continue to Chat">
                    </div>
                
            </form>
            <div class="link">
                Not yet Signed Up? <a href="index.php">Signup Now</a>
            </div>
        </section>
    </div>
    <script src="javascript/password.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>