<html>  
<head>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "LectureLogin.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="screen">
      <div class="screen__content">
        <div class="text-center"> 
        <button class="index" style="border: none; outline: none; background: none;" onclick="window.open('index.html','_self')"><img src="https://upload.wikimedia.org/wikipedia/en/f/f1/Universiti_Tunku_Abdul_Rahman_Logo.jpg" class="rounded mx-auto d-block mt-3"></button>
        </div>
        <form class="login" action = "lecturer_authentication.php" onsubmit = "return validation()" method = "POST">
          <div class="login__field">
          <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" class="login__input" placeholder="Lecturer ID" id ="user" name  = "user">
          </div>
          <div class="login__field">
          <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" class="login__input" placeholder="Password" id ="pass" name  = "pass">
          </div>
          <button class="button login__submit" type="submit" value="Submit">
            <span class="button__text">Log In</span>
          </button>				
        </form>
      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>		
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>		
    </div>
  </div>
  <script>  
    function validation()  
    {  
        var id=document.f1.user.value;  
        var ps=document.f1.pass.value;  
        if(id.length=="" && ps.length=="") {  
            alert("User Name and Password fields are empty");  
            return false;  
        }  
        else  
        {  
            if(id.length=="") {  
                alert("User Name is empty");  
                return false;  
            }   
            if (ps.length=="") {  
            alert("Password field is empty");  
            return false;  
            }  
        }                             
    }  
</script>  
</body>
</html>  