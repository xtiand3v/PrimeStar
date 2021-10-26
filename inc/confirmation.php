<?php 
if(isset($_GET['s'])){
    if($_GET['s'] == "logout"){
        ?>
        <script>
            swal({
                        title: "Success",
                        text: "Logged out successfully.",
                        icon: "success",
                        button: false,
                    })
                    setInterval(function() {
                        window.location.href = "index.php"
                    }, 800);
        </script>
        <?php
    }
}

?>