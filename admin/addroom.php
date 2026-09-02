<?php include("include/header.php"); ?>

<div class="container d-flex justify-content-center" style="margin-top: 70px; margin-left: 260px; width: calc(100% - 260px); max-width: none;">
    <div class="card shadow-sm border-0" style="width: 100%; max-width: 920px;">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add New Room</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="roomNumber" class="form-label">Room Number</label>
                        <input type="text" class="form-control" id="roomNumber" name="roomNumber" placeholder="e.g. 101" required>
                    </div>

                    <div class="col-md-6">
                        <label for="roomType" class="form-label">Room Type</label>
                        <select class="form-select" id="roomType" name="roomType" required>
                            <option value="">Select a room type</option>
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="suite">Suite</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="0.00" required>
                    </div>

                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="">Select status</option>
                            <option value="available">Available</option>
                            <option value="occupied">Occupied</option>
                            <option value="maintenance">Maintenance</option>
                        </select>
                    </div>

                    <div class="col-12 text-end">
                        <button type="reset" class="btn btn-secondary">Clear</button>
                        <button type="submit" class="btn btn-primary">Add Room</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>