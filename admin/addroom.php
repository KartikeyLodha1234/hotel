<?php
$page_title = "Add Room";
$page_icon  = "fa-bed";
include("include/header.php");
?>

<div class="container mt-5 mb-5">
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
                  <p id="uploadText">Drag & drop your room image here or click to browse</p>
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
              <small class="form-text text-muted">Describe the room features and amenities</small>
            </div>

            <!-- Form Actions -->
            <div class="col-12">
              <div class="d-flex gap-3 pt-3 border-top">
                <button type="submit" class="btn btn-primary-custom flex-grow-1">
                  <i class="fas fa-check me-2"></i>Add Room
                </button>
                <button type="reset" class="btn btn-secondary-custom">
                  <i class="fas fa-times me-2"></i>Cancel
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Image Upload & Validation Script -->
<script>
  (function() {
    const uploadBox = document.getElementById('uploadBox');
    const fileInput = document.getElementById('room_image');
    const uploadText = document.getElementById('uploadText');
    const previewContainer = document.getElementById('previewContainer');
    const previewImage = document.getElementById('previewImage');

    // Prevent default drag behaviors
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
      uploadBox.addEventListener(eventName, preventDefaults, false);
      document.body.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
      e.preventDefault();
      e.stopPropagation();
    }

    // Highlight drop area when item is dragged over it
    ['dragenter', 'dragover'].forEach(eventName => {
      uploadBox.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
      uploadBox.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
      uploadBox.classList.add('highlight');
    }

    function unhighlight(e) {
      uploadBox.classList.remove('highlight');
    }

    // Handle dropped files
    uploadBox.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
      const dt = e.dataTransfer;
      const files = dt.files;
      fileInput.files = files;
      handleFiles(files);
    }

    // Handle selected files
    fileInput.addEventListener('change', function(e) {
      handleFiles(e.target.files);
    });

    function handleFiles(files) {
      if (files.length === 0) return;

      const file = files[0];

      // Validate file type
      const validTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
      if (!validTypes.includes(file.type)) {
        alert('Please select a valid image file (JPG, PNG, GIF, or WebP)');
        fileInput.value = '';
        return;
      }

      // Validate file size (5MB max)
      const maxSize = 5 * 1024 * 1024;
      if (file.size > maxSize) {
        alert('File size must not exceed 5MB');
        fileInput.value = '';
        return;
      }

      // Update upload text
      uploadText.textContent = file.name;

      // Show preview
      const reader = new FileReader();
      reader.onload = function(e) {
        previewImage.src = e.target.result;
        previewContainer.style.display = 'block';
      };
      reader.readAsDataURL(file);
    }

    // Form submission
    document.getElementById('roomForm').addEventListener('submit', function(e) {
      e.preventDefault();

      // For now, just show success message
      // In production, this would send data to a PHP backend
      alert('Room added successfully! (Frontend demo - backend not yet implemented)');
      this.reset();
      fileInput.value = '';
      previewContainer.style.display = 'none';
      uploadText.textContent = 'Drag & drop your room image here or click to browse';
    });
  })();
</script>

<?php include("include/footer.php"); ?>