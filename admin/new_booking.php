<?php include("include/header.php"); ?>

<div class="container" style="margin-left: 300px; width: calc(100% - 300px); max-width: none; padding-top: 30px;">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">New Booking</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="guestName" class="form-label">Guest Name</label>
                        <input type="text" class="form-control" id="guestName" placeholder="Enter guest name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="guestPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="guestPhone" placeholder="Enter phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="roomSelect" class="form-label">Room</label>
                        <select class="form-select" id="roomSelect" required>
                            <option value="">Select room</option>
                            <option>101</option>
                            <option>102</option>
                            <option>201</option>
                            <option>205</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="bookingStatus" class="form-label">Status</label>
                        <select class="form-select" id="bookingStatus" required>
                            <option value="">Select status</option>
                            <option>Confirmed</option>
                            <option>Pending</option>
                            <option>Checked In</option>
                            <option>Checked Out</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="checkIn" class="form-label">Check In</label>
                        <input type="date" class="form-control" id="checkIn" required>
                    </div>
                    <div class="col-md-6">
                        <label for="checkOut" class="form-label">Check Out</label>
                        <input type="date" class="form-control" id="checkOut" required>
                    </div>
                    <div class="col-12 text-end">
                        <button type="reset" class="btn btn-secondary">Clear</button>
                        <button type="submit" class="btn btn-primary">Save Booking</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
