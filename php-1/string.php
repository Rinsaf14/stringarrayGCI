<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php 
        echo "<h3>Soal No 1</h3>";
        /*
        Soal No 1
        Tunjukan dengan menggunakan echo berapa panjang dari string berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut!
        contoh: 
        $string = "PHP is never old";
        Output:
        Panjang string: 16
        Jumlah kata: 4
        */
        $first_sentence = "Hello PHP"; //Panjang string 10, jumlah kata 2
        $second_sentence ="I'm ready for the challanges"; // Panjang string 28, jumlah kata 5

        // Menghitung panjang string dan jumlah kata
        $first_sentence_length = strlen($first_sentence);
        $first_sentence_word_count = str_word_count($first_sentence);

        $second_sentence_length = strlen($second_sentence);
        $second_sentence_word_count = str_word_count($second_sentence);

        // Output soal 1
        echo "String pertama: \"$first_sentence\" <br>";
        echo "Panjang string: $first_sentence_length <br>";
        echo "Jumlah kata: $first_sentence_word_count <br><br>";

        echo "String kedua: \"$second_sentence\" <br>";
        echo "Panjang string: $second_sentence_length <br>";
        echo "Jumlah kata: $second_sentence_word_count <br><br>";
        
        echo "<h3>Soal No 2</h3>";
        /*
        SOAL NO 2
        Mengambil kata pada string dan karakter-karakter yang ada di dalamnya
        */
        $string2 = "I love PHP";

        echo "<label>String: </label> \"$string2\" <br>";
        // Mengambil kata pertama dan kedua
        $words = explode(" ", $string2); // Memecah string menjadi array kata
        echo "Kata pertama: " . $words[0] . "<br>";
        echo "Kata kedua: " . $words[1] . "<br>";
        echo "Kata ketiga: " . $words[2] . "<br>"; // Kata ketiga

        echo "<h3>Soal No.3</h3>";
        /*
        SOAL NO 3
        Mengubah karakter atau kata yang ada di dalam sebuah string
        */
        $string3 = "PHP is old but sexy!";
        echo "String: \"$string3\" <br>";
        // OUTPUT: "PHP is old but awesome"
        $new_string = str_replace("sexy", "awesome", $string3);
        echo "Output: \"$new_string\" <br>";
    ?>
</body>
</html>