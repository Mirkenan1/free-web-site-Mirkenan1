<?php
//require_once 'baglan.php';
 // session_start();

/* Database Bağlantısı 
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'miri1234';
$db_database = 'idreamdress'; 
$conn = @mysql_connect($db_host,$db_user,$db_pass);
    if(!$conn){
        die("Baglanti hatasi: ".mysql_error()); 
    }       
    $db_select = mysql_select_db($db_database,$conn);
    if(!$db_select){
        die("Veritabani hatasi: ".mysql_error());   
    }
    mysql_query("SET NAMES utf8");
    session_start();*/
// Database Bağlantısı 
/*
    if ($_REQUEST['term']) { // Bir terim gelip gelmediğini kontrol ediyoruz.
        $term = $_REQUEST['term']; // Gelen terimi değişkene atıyoruz.
        // Gelen terim ile eşleşen kayıt olup olmadığını sorguluyoruz.
        $check_query = mysql_query("SELECT * FROM slider WHERE slider_title LIKE '%".$term."%'");
        $check_row = mysql_fetch_array($check_query);
        // Gelen terim ile eşleşen kayıt olup olmadığını sorguluyoruz.
        if ($check_row) { // Sorgulama sonucu dolu olursa eğer sonuçları ekrana basıyoruz.
            $query = mysql_query("SELECT * FROM slider WHERE slider_title LIKE '%".$term."%'");
            while ($row = mysql_fetch_array($query)){
                $name = $row['slider_title'];
                echo '<li class="list-group-item">'.$name.'</li>';
            }
        }else{
            // Eğer eşleşen kayıt yoksa alttaki uyarıyı ekrana basıyoruz.
            echo '<li class="list-group-item">Eşleşen kayıt bulunamadı.</li>';
        }
    }
*/
if ($_REQUEST['term']){

    echo $_REQUEST['term'];
}


?>