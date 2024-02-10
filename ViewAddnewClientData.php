<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Font Awesome CDN link -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-x7G2g6iWGBnhi6KP0O8eSbLcAOeyUby4pb6L2f44rnAXU6cfJjsh5i86rVrbcA6OaYpH6PhTc1Gi9aKafDGEtVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f4f6f4;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-bottom: 6px;
        }

        button.hold {
            background-color: #ffcc00;
        }

        button.delete {
            background-color: #8A0000;
        }

        button.unhold {
            background-color: #e68a00;
        }

        button.active {
            background-color: #00cc00;
        }

        button.edit {
            background-color: #ff9900;
        }

        button.view {
            background-color: #1a75ff;
        }

        button.chat {
            background-color: #9933ff;
        }

        button.setting {
            background-color: #ff5050;
        }

        button i {
            align-content: center;
            margin-right: 5px;
        }

        .additional-buttons {
            display: flex;
        }

        /* .additional-buttons button {
            margin-right: 10px;
            Adjust the margin as needed
        } */
    </style>

    <title>Extended Table with Buttons</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand Name</th>
                <th>Mobile Number</th>
                <th>Package</th>
                <th>Reference by</th>
                <th>Hold</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample row, you can dynamically generate rows using JavaScript -->

            <?php if (!empty($addnewclient1)) {
                foreach ($addnewclient1 as $userData) { ?>
                    <tr>
                        <td><?php echo  $userData['id'] ?></td>
                        <td><?php echo  $userData['brand_name'] ?></td>
                        <td><?php echo  $userData['mobile_number'] ?></td>
                        <td><?php echo  $userData['package'] ?></td>
                        <td><?php echo  $userData['reference_by'] ?></td>

                        <td><button class="hold" onclick="holdRow(this)"><i class="fas fa-hand-paper"></i> Hold</button></td>
                        <td><button class="active" onclick="activeRow(this)"><i class="fas fa-check-circle"></i> Active</button></td>
                        <td colspan="2" class="additional-buttons">
                            <button class="hold">   <a href="<?php echo base_url().'index.php/User_con/editData/'.$userData['id']?>" class="btn btn-primary"> <img src="pen.png">  </a></button> &nbsp &nbsp
                            <button class="delete"><a href="<?php echo base_url().'index.php/User_con/deleteData/'.$userData['id']?>" class="btn btn-primary"> Delete </button> &nbsp &nbsp
                            <button class="hold"> <a href="#" class="btn btn-primary">chat </a> </button>&nbsp &nbsp &nbsp
                            <button class="hold"> <a href="#" class="btn btn-primary">Details</a> </button> &nbsp &nbsp
                        </td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td colspan="5"> record not found</td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha512-gnqE98d89zrzpo+AVz8zcx1bFx2Yzru/pBXN54F/KlQV0H6Gk/BBp2HPV5ZEj+yMCKLpCp9L3jAiqtyW3pAexg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- 
    <script>
        function holdRow(button) {
            // Implement hold functionality here
            alert("Hold button clicked");
        }

        function actionRow(button) {
            // Implement action functionality here
            alert("Action button clicked");
        }

        function unholdRow(button) {
            // Implement unhold functionality here
            alert("Unhold button clicked");
        }

        function activeRow(button) {
            // Implement active functionality here
            alert("Active button clicked");
        }

        function editRow(button) {
            // Implement edit functionality here
            alert("Edit button clicked");
        }

        function viewRow(button) {
            // Implement view functionality here
            alert("View button clicked");
        }

        function chatRow(button) {
            // Implement chat functionality here
            alert("Chat button clicked");
        }

        function settingRow(button) {
            // Implement setting functionality here
            alert("Setting button clicked");
        }
    </script> -->

</body>

</html>