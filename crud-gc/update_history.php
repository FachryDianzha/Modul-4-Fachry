<?php 
// update_history.php
$proses = $_POST['proses'];
$waktu= $_POST['waktu'];
mysql_query("INSERT INTO log_activity VALUES('','$proses','$waktu','$_SESSION[id_user]')");
?>
 
// Tempatkan diatas tag </body>
<script>
    function history($proses, $waktu){
        $.ajax({
            //Kirimkan data untuk di proses update/insert
            url: "update_history.php",
            //Data yang dikirimkan
            data: {proses : $proses, waktu: $waktu},
            type: "POST",
            //Jika success
            success: function(data){
                console.log("***********Success***************"); // Data Tersimpan
                console.log(data); 
            },
            //Jika error
            error: function(){
                    console.log("***********Error***************"); // Gagal Tersimpan
                    console.log(data); 
            }
        });
    }
</script>
 