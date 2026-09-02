<?php include("include/header.php"); ?>

<div class="container" style="margin-left: 300px; width: calc(100% - 300px); max-width: none; padding-top: 30px;">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Add Staff</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="staffName" class="form-label">Staff Name</label>
                        <input type="text" class="form-control" id="staffName" placeholder="Enter staff name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="staffRole" class="form-label">Role</label>
                        <select class="form-select" id="staffRole" required>
                            <option value="">Select role</option>
                            <option>Manager</option>
                            <option>Reception</option>
                            <option>Cleaner</option>
                            <option>Chef</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="staffPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="staffPhone" placeholder="Enter phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="staffEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="staffEmail" placeholder="Enter email" required>
                    </div>
                    <div class="col-12 text-end">
                        <button type="reset" class="btn btn-secondary">Clear</button>
                        <button type="submit" class="btn btn-primary">Save Staff</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
