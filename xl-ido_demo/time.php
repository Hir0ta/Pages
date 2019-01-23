<html>
<head>
    <meta charset="utf-8" />
    <title>Timepicker example</title>
    <link href="style.css"rel="stylesheet" type="text/css" /> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--Gijgo CSS-->
    <link href="node_modules/gijgo/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!--Gijgo JS-->
    <script src="node_modules/gijgo/js/gijgo.min.js" type="text/javascript"></script>
    <script src="node_modules/gijgo/js/messages/messages.hu-hu.js" type="text/javascript"></script>
    <style>
        .proba [role="header"]{
            background-color: red;
        }
    </style>
</head>
<body>
    <input id="timepicker" width="276" />
    <script>
        $('#timepicker').timepicker({
            locale: 'hu-hu'
        });
    </script>
</body>
</html>