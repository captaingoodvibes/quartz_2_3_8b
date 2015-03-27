<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">-->

<!-- From slip.js <!DOCTYPE html>
<meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0">  -->


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <!-- Basic Page Needs
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <?PHP 
                $dbs = new dbSession();
                $database_name = $dbs->dbName;
                echo "<title>$database_name - Quartz Task Manager.</title>"
        ?>
        <meta name="description" content="Spiros task list manager and CRM contact relationship managment cascading task list cascading job list job board" >
        <meta name="author" content="">

        <!-- Mobile Specific Metas
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="viewport" content="width=320"> -->

        <!-- FONT
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

        <!-- CSS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <!-- <link rel="stylesheet" href="css/main.css" type="text/css">-->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/slip.css">
        <link rel="stylesheet" type="text/css" href="jqueryslidemenu.css" />
        <!-- ======================== Testing the first mobile slide menu -->
       <!--  <link rel="stylesheet" type="text/css" href="css/normalize_mobile.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/icons.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" /> -->
        
        
        <!-- Favicon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

        

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        
        <!--
        [if lte IE 7]>
        <style type="text/css">
        html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
        </style>
        <![endif]-->
        <script type="text/javascript" src="./config/jquery.min.js"></script>
        <script type="text/javascript" src="jqueryslidemenu.js"></script>

</head>
<body bgcolor="#FFFFFF">
