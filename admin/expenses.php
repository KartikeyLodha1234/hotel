<?php include("include/header.php"); ?>

<div class="container" style="margin-left: 300px; width: calc(100% - 300px); max-width: none; padding-top: 30px;">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Expenses</h4>
            <a href="#" class="btn btn-light btn-sm">Add Expense</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Electricity Bill</td>
                            <td>Utilities</td>
                            <td>$220.00</td>
                            <td>2026-09-01</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cleaning Supplies</td>
                            <td>Maintenance</td>
                            <td>$90.00</td>
                            <td>2026-09-02</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
