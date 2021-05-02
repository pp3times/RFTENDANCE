<!DOCTYPE html>
<html>
<head>
    <title>RFTENDANCE | HOMEPAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png">

    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/Users.css">
    <script>
      $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
    </script>
    <style type="text/css">
        *{
            font-family: 'Kanit',sans-serif;
        }
        .fullpage{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            flex-direction: column;
        }
        .main{
            font-size: 10rem;
        }
        .line{
            width: 80rem;
            height: .3rem;
            background-color: black;
        }
        .sub{
            margin: 2rem;
        }
    </style>
</head>
<body>
<?php include'header.php'; ?>

<div class="fullpage">
    <span class="main">RFTENDANCE</span><span class="line"></span>
    <span class="sub">RFID ATTENDANCE SYSTEM</span>
</div>

</body>
</html>