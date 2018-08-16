<?php 
session_start();
    include_once("settings/connect.php");
    require_once("settings/config.php");
    // include_once("auth/session_others.php");
// include_once("../../settings/user_info.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edges">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#690005">
    <link rel="stylesheet" type="text/css" href="/style/fonts.css">
    
    <link rel="stylesheet" type="text/css" href="/style/drawer.css">
    <link rel="stylesheet" type="text/css" href="/style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/style/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="/style/main.css">
    <link rel="stylesheet" type="text/css" href="/style/responsive.css">
    <title>cscc</title>

</head>
<body>
    
    
    <!--//////////////////////////////////////////////////-->
    <!--////////////   Header and Navbar  START    /////////////////-->
    <!--//////////////////////////////////////////////////-->
    
             <?php  include "include/global/header.php"; ?>
    
    <!--//////////////////////////////////////////////////-->
    <!--////////////    Navbar  END    ///////////////////-->
    <!--//////////////////////////////////////////////////-->
    
    
    <main class="container-fluid" style="height:600px;">
      <section class="row" style="padding-top:20px;">
        
        <?php include "include/items.php" ; ?>


      </section>     
    </main>
    <footer></footer>

   <script type="text/javascript" src="/scripts/jquery/jquery.min.js"></script>
   <script type="text/javascript" src="/style/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="/scripts/sticky-kit/dist/sticky-kit.min.js"></script>
   <script type="text/javascript" src="/scripts/font-to-json/form-to-json.js"></script>
   <script type="text/javascript">
 $(document).ready(function(){



           $('[data-toggle="tooltip"]').tooltip();
           $('.sticky').stick_in_parent({offset_top:-90});
           $('.sticky2').stick_in_parent({offset_top:38});



		$('form').on('submit',function(e){
		                e.preventDefault();
		        
		            var _this = $(this);
		            window.allFields = JSON.parse(formToJson(this)) ;
		            var error = [];
		            var requiredFields = ['biz_name','biz_address','biz_keyword'];
		                 for(var a in requiredFields){
		                    var field = requiredFields[a];
		                    if(typeof allFields[field] =='undefined'){
		                        $.notify({ message:`${field} field is required` },{ type:'danger',z_index:10000})
		                        return false;

		                     }
		                 }

		                 
		                  allFields.author = $('.token-author').val();
		 })
 
        


}) //Document.Ready Function
   </script>
</body>
</html>