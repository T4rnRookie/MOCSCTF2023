<?php
error_reporting(0); 
//include('api.php');
$username = $_POST['username'];
$password = $_POST['password'];
if(empty($username)||empty($password)){
	die("username or password empty!");
}
?>
<html>
   <head>
      <meta charset="utf-8">
      <title>Online exam</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
        .body-content {
            margin-top:20px;
            padding-left: 15px;
            padding-right: 15px;
        }
      </style>
   </head>
   <body>    
     <div class="navbar navbar-default navbar-fixed-top">
       <div class="container">
         <div class="navbar-header">
           <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <p class="navbar-brand">Online exam</p>
         </div> 
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
              <p class="navbar-brand">Hi,<?=$username?></p>
            <li>
              <a href="index.php">
                <span class="glyphicon glyphicon-log-out"></span> quit
              </a>
            </li>
          </ul>
        </div>
 
       </div>
     </div>
 
    <div class="container body-content">
    	<a href="api.php?img=https://p1.itc.cn/images01/20230207/8a9e552d8ec047acaa638da34cea9ed1.png&username=<?=$username?>">
    		<input type="submit" value="Click me to get exam" />
        <a href="./phpinfo.php">
        <input type="submit" value="system-config(delete when finished" />
    </form>
      <footer class="navbar navbar-fixed-bottom text-center bg-primary">
        <p>Get good grades</p>
      </footer>
    </div>
      <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </body>
</html>
