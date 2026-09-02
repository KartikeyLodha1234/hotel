<?php include("include/header.php"); ?>

<div class="container" style="margin-left: 300px; width: calc(100% - 300px); max-width: none; padding-top: 30px;">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Booking / Reservation</h4>
            <a href="new_booking.php" class="btn btn-light btn-sm">New Booking</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Guest</th>
                            <th>Room</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ayesha Noor</td>
                            <td>101</td>
                            <td>2026-09-05</td>
                            <td>2026-09-08</td>
                            <td><span class="badge bg-success">Confirmed</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Hamza Ali</td>
                            <td>205</td>
                            <td>2026-09-06</td>
                            <td>2026-09-09</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
