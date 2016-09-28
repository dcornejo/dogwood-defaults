<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inactive site</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nixie+One">

    <style type="text/css">
        body {
            background-color: black;
            color: white;
            font-family: "Nixie One", sans-serif;
        }
        a {
            color: aqua;
        }
        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        a:active {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<br/>
<h2><?php echo ("Sorry, " . $_SERVER['HTTP_HOST'] . " is not an active website"); ?></h2>
<p>
    Please check the URL and try again. Contact <a href="mailto:webmaster@dogwood.com">webmaster@dogwood.com</a>
    if you feel this is an error
</p>
<p>
    Seeing this page does not imply that the URL is for sale.
</p>
</body>
</html>