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
        <td class="text-left"><?php echo $dataClients['client_fullname']; ?><br><?php echo $dataClients['client_email']; ?></td>
        <td></td>
        <td></td>
        <td><?php echo $dataClients['client_added']; ?></td>
        <td>
            <button class="btn btn-success edit btn-sm" data-id="<?php echo $dataClients['client_id']; ?>" data-toggle="modal" type="button">Edit</button>
            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCustomer" type="button">Delete</button>
        </td>
    </tr>

    <?php
    }
}
?>