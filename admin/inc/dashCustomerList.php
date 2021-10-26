<?php
include ('../inc/connection.php');
$getClients = mysqli_query($conn,"SELECT * from clients ORDER by client_id DESC LIMIT 5");

if(mysqli_num_rows($getClients) >= 1){
    $num = 1;
    while($dataClients = mysqli_fetch_array($getClients)){
    ?>
    <tr class="text-center">
        <th scope="row"><?php echo $num++; ?></th>
        <th scope="row"><?php echo $dataClients['client_id']; ?></th>
        <td class="text-left"><?php echo $dataClients['client_firstname']." ".$dataClients['client_lastname']; ?><br><?php echo $dataClients['client_email']; ?></td>
        
        <td><?php echo $dataClients['client_added']; ?></td>
    </tr>

    <?php
    }
}
?>