<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
    <?php
    echo "<h3>Soal 1</h3>";
    /*
        SOAL NO 1
        Kelompokkan nama-nama di bawah ini ke dalam Array.
        Kids: "Mike", "Dustin", "Lucas", "Max", "Eleven"
        Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray"
    */

    $kids = ["Mike", "Dustin", "Lucas", "Max", "Eleven"];  // Array untuk kids
    $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];  // Array untuk adults
    echo "<h3>Soal 2</h3>";
    /*
        SOAL No 2
        Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. 
    */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    foreach ($kids as $kid) {
        echo "<li>$kid</li>";  // Menampilkan isi array kids
    }

    echo "</ol>";

    echo "Total Adults: " . count($adults); //Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    foreach ($adults as $adult) {
        echo "<li>$adult</li>";  // Menampilkan isi array adults
    }
    echo "</ol>";

    /*
        SOAL No 3
        Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi

        Name: "Will Byers",
        Age: 12,
        Aliases: "Will the Wise",
        Status: "Alive"

        Name: "Mike Wheeler",
        Age: 12,
        Aliases: "Dungeon Master",
        Status: "Alive"

        Name: "Jim Hopper",
        Age: 43,
        Aliases: "Chief Hopper",
        Status: "Deceased"

        Name: "Eleven",
        Age: 12,
        Aliases: "El",
        Status: "Alive"

        Output:
        Array
        (
            [0] => Array
                (
                    [Name] => Will Byers
                    [Age] => 12
                    [Aliases] => Will the Wise
                    [Status] => Alive
                )

            [1] => Array
                (
                    [Name] => Mike Wheeler
                    [Age] => 12
                    [Aliases] => Dungeon Master
                    [Status] => Alive
                )

            [2] => Array
                (
                    [Name] => Jim Hopper    
                    [Age] => 43
                    [Aliases] => Chief Hopper
                    [Status] => Deceased
                )

            [3] => Array
                (
                    [Name] => Eleven
                    [Age] => 12
                    [Aliases] => El
                    [Status] => Alive
                )

            */
            $characters = [
                [
                    "Name" => "Will Byers",
                    "Age" => 12,
                    "Aliases" => "Will the Wise",
                    "Status" => "Alive"
                ],
                [
                    "Name" => "Mike Wheeler",
                    "Age" => 12,
                    "Aliases" => "Dungeon Master",
                    "Status" => "Alive"
                ],
                [
                    "Name" => "Jim Hopper",
                    "Age" => 43,
                    "Aliases" => "Chief Hopper",
                    "Status" => "Deceased"
                ],
                [
                    "Name" => "Eleven",
                    "Age" => 12,
                    "Aliases" => "El",
                    "Status" => "Alive"
                ]
            ];
        
            // Menampilkan data dalam array multidimensi
            echo "<pre>";
            print_r($characters);
            echo "</pre>";

    ?>
</body>
</html>