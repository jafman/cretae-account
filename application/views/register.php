<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/iofrm-theme4.css">
    <style>
        #error_div{
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
             
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="<?=base_url()?>assets/images/graphic1.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Create Account.</h3>  

                        <div id="error_div" class="alert alert-danger" role="alert">
                           <span id="account_error"></span>  
                        </div>

                        <form>
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" type="text" name="phone" placeholder="Phone Number" required>
                            <input class="form-control" type="number" name="name" placeholder="Age" required>
                            <input class="form-control" type="email" id="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="button" class="ibtn" onclick="tryRegister()">Register</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/popper.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/main.js"></script>
<script>

    function showError(msg){
        document.getElementById('account_error').innerHTML = msg; 
        document.getElementById("error_div").style.display = "block";
    }

    function hideError(){
        document.getElementById('account_error').innerHTML = ""; 
        document.getElementById("error_div").style.display = "none";
    }

    function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
    }   

    function tryRegister(){
        var email = document.getElementById('email').value;
        if(validateEmail(email)){
            alert('Good')
        }else{
            alert('Bad')
        }
    }

    function validatePassword(pw) {

        return /[A-Z]/       .test(pw) &&
            /[a-z]/       .test(pw) &&
            /[0-9]/       .test(pw) &&
            /[^A-Za-z0-9]/.test(pw) &&
            pw.length > 8;

}

     

</script>
</body>
</html>