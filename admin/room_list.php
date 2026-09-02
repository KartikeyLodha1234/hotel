<?php include("include/header.php"); ?>

<div class="container" style="margin-left: 300px; width: calc(100% - 300px); max-width: none; padding-top: 30px;">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Room List</h4>
            <a href="addroom.php" class="btn btn-light btn-sm">Add New Room</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Room Number</th>
                            <th>Room Type</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Single</td>
                            <td>$120.00</td>
                            <td><span class="badge bg-success">Available</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>102</td>
                            <td>Double</td>
                            <td>$180.00</td>
                            <td><span class="badge bg-warning text-dark">Booked</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>201</td>
                            <td>Suite</td>
                            <td>$260.00</td>
                            <td><span class="badge bg-secondary">Maintenance</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>