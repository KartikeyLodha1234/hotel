<?php
include_once 'include/header.php';
?>
    <!-- ===== MAIN CONTENT: Add Room form ===== -->
    <main class="demo-content" id="mainContent">
        <div class="container-fluid mt-2 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-card">
                        <div class="form-header">
                            <h2 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Add New Room</h2>
                            <p class="text-muted mb-0">Fill in the room details below</p>
                        </div>

                        <form id="roomForm" enctype="multipart/form-data">
                            <div class="row g-3">
                                <!-- Room Name -->
                                <div class="col-md-6">
                                    <label for="room_name" class="form-label">
                                        <i class="fas fa-door-open me-1"></i>Room Name
                                    </label>
                                    <input type="text" class="form-control" id="room_name" name="room_name" placeholder="e.g., Deluxe Suite 101" required>
                                    <small class="form-text text-muted">Enter a unique name for this room</small>
                                </div>

                                <!-- Room Type -->
                                <div class="col-md-6">
                                    <label for="room_type" class="form-label">
                                        <i class="fas fa-tag me-1"></i>Room Type
                                    </label>
                                    <select class="form-select" id="room_type" name="room_type" required>
                                        <option value="">Select room type...</option>
                                        <option value="single">Single Bed</option>
                                        <option value="double">Double Bed</option>
                                        <option value="suite">Suite</option>
                                        <option value="deluxe">Deluxe</option>
                                        <option value="penthouse">Penthouse</option>
                                    </select>
                                    <small class="form-text text-muted">Choose the room category</small>
                                </div>

                                <!-- Price per Night -->
                                <div class="col-md-6">
                                    <label for="room_price" class="form-label">
                                        <i class="fas fa-dollar-sign me-1"></i>Price per Night
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" id="room_price" name="room_price" placeholder="0.00" step="0.01" required>
                                    </div>
                                    <small class="form-text text-muted">Enter the nightly rate</small>
                                </div>

                                <!-- Capacity -->
                                <div class="col-md-6">
                                    <label for="room_capacity" class="form-label">
                                        <i class="fas fa-users me-1"></i>Guest Capacity
                                    </label>
                                    <input type="number" class="form-control" id="room_capacity" name="room_capacity" placeholder="Number of guests" min="1" max="10">
                                    <small class="form-text text-muted">Maximum guests allowed</small>
                                </div>

                                <!-- Room Image Upload -->
                                <div class="col-12">
                                    <label for="room_image" class="form-label">
                                        <i class="fas fa-image me-1"></i>Room Image
                                    </label>
                                    <div class="upload-box" id="uploadBox" onclick="document.getElementById('room_image').click()">
                                        <input type="file" id="room_image" name="room_image" accept="image/*" class="d-none" required>
                                        <div class="upload-content">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <p id="uploadText">Drag &amp; drop your room image here or click to browse</p>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Max file size: 5MB. Supported formats: JPG, PNG, GIF, WebP</small>
                                </div>

                                <!-- Image Preview -->
                                <div class="col-12" id="previewContainer" style="display: none;">
                                    <label class="form-label">Image Preview</label>
                                    <div class="preview-box">
                                        <img id="previewImage" src="" alt="Room preview" class="preview-img">
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="col-12">
                                    <label for="room_description" class="form-label">
                                        <i class="fas fa-align-left me-1"></i>Description
                                    </label>
                                    <textarea class="form-control" id="room_description" name="room_description" rows="4" placeholder="Add room amenities, features, and other details..."></textarea>
                                </div>

                                <!-- Form Actions -->
                                <div class="col-12">
                                    <div class="d-flex gap-3 pt-3 border-top">
                                        <button type="submit" class="btn btn-primary-custom flex-grow-1">
                                            <i class="fas fa-check me-2"></i>Add Room
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Bootstrap 5.3.8 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<!-- Mobile toggle -->
<script>
    (function() {
        const toggleBtn = document.getElementById('menuToggle');
        const collapseWrap = document.getElementById('navCollapse');
        if (toggleBtn && collapseWrap) {
            toggleBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                collapseWrap.classList.toggle('show');
                const icon = toggleBtn.querySelector('i');
                if (icon) {
                    icon.className = collapseWrap.classList.contains('show') ? 'fas fa-times' : 'fas fa-bars';
                }
            });
        }
    })();
</script>

<!-- Room image upload & validation -->
<script>
    (function() {
        const uploadBox = document.getElementById('uploadBox');
        const fileInput = document.getElementById('room_image');
        const uploadText = document.getElementById('uploadText');
        const previewContainer = document.getElementById('previewContainer');
        const previewImage = document.getElementById('previewImage');

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadBox.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            uploadBox.addEventListener(eventName, () => uploadBox.classList.add('highlight'), false);
        });
        ['dragleave', 'drop'].forEach(eventName => {
            uploadBox.addEventListener(eventName, () => uploadBox.classList.remove('highlight'), false);
        });

        uploadBox.addEventListener('drop', function(e) {
            const files = e.dataTransfer.files;
            fileInput.files = files;
            handleFiles(files);
        }, false);

        fileInput.addEventListener('change', function(e) {
            handleFiles(e.target.files);
        });

        function handleFiles(files) {
            if (files.length === 0) return;
            const file = files[0];

            const validTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            if (!validTypes.includes(file.type)) {
                alert('Please select a valid image file (JPG, PNG, GIF, or WebP)');
                fileInput.value = '';
                return;
            }

            const maxSize = 5 * 1024 * 1024;
            if (file.size > maxSize) {
                alert('File size must not exceed 5MB');
                fileInput.value = '';
                return;
            }

            uploadText.textContent = file.name;

            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }

        document.getElementById('roomForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Room added successfully! (Frontend demo - backend not yet implemented)');
            this.reset();
            fileInput.value = '';
            previewContainer.style.display = 'none';
            uploadText.textContent = 'Drag & drop your room image here or click to browse';
        });
    })();
</script>
</body>
</html>
