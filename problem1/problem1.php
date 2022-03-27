<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    class baseclass1
    {
        // public $maxCA = 30;
        public $ca1marks= 21;
        public $ca2marks= 29;
    }

    class childclass1 extends baseclass1
    {
        // public $maxFinal = 100;

        function __construct($endterm)
        {
            $this->endterm = $endterm;
        }

        function totalMarks()
        {
            echo "<h2>Marks obtained in CA1 = ",$this->ca1marks,"/30</h2><br>";
            echo "<h2>Marks obtained in CA2 = ",$this->ca2marks,"/30</h2><br>";
            echo "<h2>Marks obtained in ENDTERM = ",$this->endterm,"/100</h2><br>";
            $this->total= $this->ca1marks + $this->ca2marks + $this->endterm;
            echo "<h1>Total marks obtained in CA1, CA2 and EndTerm = ",$this->total,"/160</h1><br>";
            echo "<h1>Total percentage = ", $this->total/160 *100, "%</h1>";
        }
    }

    $obj1 = new childclass1(86);
    $obj1->totalMarks();
    ?>
</body>

</html>