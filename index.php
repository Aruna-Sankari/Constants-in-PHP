    <html>
	<head>
	<title>Constants</title>
	</head>
	<body>
   <h4><u>CONSTANTS</u></h4>
    <?php
    define("data", "PHP");
    define("version", 8.2);
    echo "Welcome to" . " " . data . " " . "Version" . (version);
    ?>

    <h4><u>ARRAY IN CONSTANTS</u></h4>
    <?php
    define("names", ["arun", "priya", "raji", "rani", " muthu"]);
    echo names[1] . "<br><br>";
    echo names[3];
    ?>
	</body>
	</html>