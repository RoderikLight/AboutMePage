<div id="company-card">
    <h1>This an example of a single table for management purposes!</h1>

    <form style="padding-bottom: 20px;">
        <div class="row">
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required pattern="[0-9]+" title="Please enter only numbers">
                    <label for="phone">Phone</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                    <label for="address">Address</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                    <label for="city">City</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <button style="font-size: 16px;" type="button" onclick="alert('This is a fake button! Tricked you!')">Add Company</button>
            </div>
        </div>
    </form>

    <table style="width: 100%;" id="companiesTable">
        <thead>
            <tr>
                <th style="width: 200px; text-align: left;">ID</th>
                <th style="width: 200px; text-align: left;">Name</th>
                <th style="width: 200px; text-align: left;">Address</th>
                <th style="width: 200px; text-align: left;">City</th>
                <th style="width: 200px; text-align: left;">Phone</th>
                <th style="width: 200px; text-align: left;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Acme Corp</td>
                <td>123 Elm St</td>
                <td>Springfield</td>
                <td>5551234567</td>
                <td>
                    <button class="edit-button">Edit</button>
                    <button class="delete-button">Delete</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Globex Inc</td>
                <td>456 Oak St</td>
                <td>Shelbyville</td>
                <td>5559876543</td>
                <td>
                    <button class="edit-button">Edit</button>
                    <button class="delete-button">Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Initech</td>
                <td>789 Pine St</td>
                <td>Capital City</td>
                <td>5556543210</td>
                <td>
                    <button class="edit-button">Edit</button>
                    <button class="delete-button">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<style>
    #company-card {
        background-color: #f0f4f8;
        color: #333;
        font-family: Arial, sans-serif;
    }

    #company-card h1 {
        color: #2c3e50;
    }

    #company-card form {
        background-color: #ecf0f1;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #company-card .form-control {
        background-color: #fff;
        border: 1px solid #bdc3c7;
        border-radius: 4px;
    }

    #company-card .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 8px rgba(52, 152, 219, 0.2);
    }

    #company-card .form-floating > label {
        color: #7f8c8d;
        transition: color 0.2s, transform 0.2s;
    }

    #company-card .form-floating > .form-control:focus ~ label,
    #company-card .form-floating > .form-control:not(:placeholder-shown) ~ label {
        color: #3498db;
        transform: translateY(-1.5em) scale(0.85);
    }

    #company-card table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    #company-card th, #company-card td {
        padding: 12px;
        border: 1px solid #bdc3c7;
    }

    #company-card th {
        background-color: #3498db;
        color: #fff;
    }

    #company-card tr:nth-child(even) {
        background-color: #ecf0f1;
    }

    #company-card tr:hover {
        background-color: #d5dfe8;
    }

    #company-card button {
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }

    #company-card button:hover {
        background-color: #2980b9;
    }

    #company-card .edit-button {
        background-color: #f39c12;
    }

    #company-card .edit-button:hover {
        background-color: #e67e22;
    }

    #company-card .delete-button {
        background-color: #e74c3c;
    }

    #company-card .delete-button:hover {
        background-color: #c0392b;
    }
</style>