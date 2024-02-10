<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #7d96da;
        }

        .container {
            max-width: 900px;
            width: 100%;
            border-radius: 6px;
            padding: 30px;
            margin: 0 15px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 16px;
            min-height: 490px;
            background-color: #fff;
            overflow: hidden;
        }

        .fields {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            width: calc(100% / 3 - 15px);
            margin: 4px 0;
        }

        input,
        select {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
        }

        input:is(:focus, :valid) {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .media {
            /* padding: 25px; */
            margin: 25px 0;
            display: flex;
            /* justify-content: space-between; */
        }

        fieldset {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            border: none;
            margin-bottom: 20px;
            margin-top: 60px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f6f4;
            color: #000;
        }

        input[readonly] {
            background-color: #f4f4f4;
            cursor: not-allowed;
        }

        .add-button {
            margin-top: 10px;
            background-color: #ff3333;
            color: #fff;
            border: none;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #ff3333;
            color: #fff;
            border: none;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 6px;
        }

        .submit-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>

    <title>Document</title>
</head>

<body>

    <div class="container">
        <form method="post" name="AddNewClient" action="<?php echo base_url() . 'index.php/User_con/AddnewClient' ?>">
            <div class="input-field">
                Image:
                <label for="image" id="imageLabel">
                    <img src="imgicon.png" alt="Image Icon" style="width: 120px; border: #2855d1;">
                </label>
                <input type="file" id="image" name="image" accept="image/*" style="display: none;">
            </div>

            <div class="fields">
                <div class="input-field">
                    <label>Brand Name</label>
                    <input type="text" name="brand_name" placeholder="Enter your name" required>
                </div>

                <div class="input-field">
                    <label for="package">Package:</label>
                    <select id="package" name="package">
                        <option value="district1">District 1</option>
                        <option value="district2">District 2</option>
                    </select>
                </div>

                <div class="input-field">
                    <label for="status">Status:</label>
                    <select id="status" name="status">
                        <option value="status1">Status 1</option>
                        <option value="status2">Status 2</option>
                    </select>
                </div>

                <div class="input-field">
                    <label>Owner Name</label>
                    <input type="text" name="owner_name" placeholder="Enter your Name" id="ownername" required>
                </div>

                <div class="input-field">
                    <label for="calender">Calender Type:</label>
                    <select id="calender" name="calender">
                        <option value="calender 1">Type 1</option>
                        <option value="calender 2">Type 2</option>
                    </select>

                </div>

                <div class="input-field">
                    <label>Mobile Number</label>
                    <input type="number" name="mobile" placeholder="Enter mobile number" required>
                </div>

                <div class="input-field">
                    <label>Alternate Mobile Number</label>
                    <input type="number" name="Altmobile" placeholder="Enter alternate mobile number" required>
                </div>

                <div class="input-field">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address"></textarea>
                </div>

                <div class="input-field">
                    <label>State Name</label>
                    <input type="text" name="state" placeholder="Enter State name" required>
                </div>

                <div class="input-field">
                    <label>District Name</label>
                    <input type="text" name="district" placeholder="Enter District name" required>
                </div>

                <div class="input-field">
                    <label>Taluka Name</label>
                    <input type="text" name="taluka" placeholder="Enter Taluka name" required>
                </div>

                <div class="input-field">
                    <label for="pinCode">Pin Code:</label>
                    <input type="text" name="pincode" id="pinCode" name="pinCode">
                </div>

                <div class="input-field">
                    <label>Reference by</label>
                    <input type="text" name="reference" placeholder="Enter reference name" id="reference" required>
                </div>

                <div class="input-field">
                    <label>Sales Executive</label>
                    <input type="text" name="executive" placeholder="Enter sales executive name" id="salesExecutive" required>
                </div>
            </div>

            <label>Social media</label>
            <div class="media">
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <img src="facebook.png" alt="Facebook Icon" style="height: 50px;">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <img src="instagram.png" alt="Instagram Icon" style="height: 50px;">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <img src="twitter.png" alt="Twitter Icon" style="height: 50px;">
                </a>
            </div>

            <div class="container1">
                <label>Brand Coordinator Person</label>
                <button class="add-button" onclick="addNewRow()">Add New Row</button>
                <fieldset>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="dataTableBody"></tbody>
                    </table>
                </fieldset>
            </div>

            <!-- <button class="submit-button" onclick="submitForm()">
                <span>Submit</span>
                <i class="uil uil-navigator"></i>
            </button>
        </form>
    </div> -->

            <script>
                function submitForm() {
                    var name = document.getElementById('name').value;
                    var age = document.getElementById('age').value;
                    var location = document.getElementById('location').value;

                    var tableBody = document.getElementById('dataTableBody');
                    var newRow = tableBody.insertRow(tableBody.rows.length);
                    var cells = [
                        newRow.insertCell(0),
                        newRow.insertCell(1),
                        newRow.insertCell(2),
                        newRow.insertCell(3),
                    ];

                    cells[0].innerHTML = '<input type="text" value="' + name + '" readonly>';
                    cells[1].innerHTML = '<input type="text" value="' + age + '" readonly>';
                    cells[2].innerHTML = '<input type="text" value="' + location + '" readonly>';

                    cells[3].innerHTML = '<button class="delete-button" onclick="deleteRow(this)">Delete</button>' +
                        '<button class="add-row-button" onclick="addNewRow()">Add</button>';

                    document.getElementById('name').value = '';
                    document.getElementById('age').value = '';
                    document.getElementById('location').value = '';
                }

                function addNewRow() {
                    var tableBody = document.getElementById('dataTableBody');
                    var newRow = tableBody.insertRow(tableBody.rows.length);

                    for (var i = 0; i < 3; i++) {
                        var cell = newRow.insertCell(i);
                        cell.innerHTML = '<input type="text">';
                    }

                    var actionCell = newRow.insertCell(3);
                    actionCell.innerHTML = '<button class="delete-button" onclick="deleteRow(this)">Delete</button>' +
                        '<button class="add-row-button" onclick="addNewRow()">Add</button>';
                }

                function deleteRow(button) {
                    var row = button.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                }
            </script>

            <button class="submit-button" onclick="submitForm()">
                <span>Submit</span>
                <i class="uil uil-navigator"></i>
            </button>
        </form>
    </div>

</body>

</html>