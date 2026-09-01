    <?php

    include("include/header.php");
    ?>

    <div class="container mt-5 mb-5">
    <div class="row">
        <!-- Add/Edit Room Type Form -->
        <div class="col-lg-5 mb-4">
        <div class="form-card">
            <div class="form-header">
            <h3 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Add Room Type</h3>
            <p class="text-muted mb-0">Create or edit room type categories</p>
            </div>

            <form id="roomTypeForm">
            <div class="row g-3">
                <!-- Type Name -->
                <div class="col-12">
                <label for="type_name" class="form-label">
                    <i class="fas fa-heading me-1"></i>Room Type Name
                </label>
                <input type="text" class="form-control" id="type_name" name="type_name" placeholder="e.g., Single Bed, Double Suite" required>
                <small class="form-text text-muted">Enter the type name</small>
                </div>

                <!-- Description -->
                <div class="col-12">
                <label for="type_description" class="form-label">
                    <i class="fas fa-align-left me-1"></i>Description
                </label>
                <textarea class="form-control" id="type_description" name="type_description" rows="3" placeholder="Describe this room type..."></textarea>
                <small class="form-text text-muted">What makes this room type unique?</small>
                </div>

                <!-- Max Guests -->
                <div class="col-6">
                <label for="type_max_guests" class="form-label">
                    <i class="fas fa-users me-1"></i>Max Guests
                </label>
                <input type="number" class="form-control" id="type_max_guests" name="type_max_guests" min="1" max="10" placeholder="2" required>
                </div>

                <!-- Base Price -->
                <div class="col-6">
                <label for="type_base_price" class="form-label">
                    <i class="fas fa-dollar-sign me-1"></i>Base Price
                </label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" id="type_base_price" name="type_base_price" step="0.01" placeholder="0.00" required>
                </div>
                </div>

                <!-- Amenities -->
                <div class="col-12">
                <label class="form-label">
                    <i class="fas fa-star me-1"></i>Amenities
                </label>
                <div class="amenities-grid">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="amenity_wifi" name="amenities" value="wifi">
                    <label class="form-check-label" for="amenity_wifi">WiFi</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="amenity_ac" name="amenities" value="ac">
                    <label class="form-check-label" for="amenity_ac">Air Conditioning</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="amenity_tv" name="amenities" value="tv">
                    <label class="form-check-label" for="amenity_tv">Smart TV</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="amenity_minibar" name="amenities" value="minibar">
                    <label class="form-check-label" for="amenity_minibar">Mini Bar</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="amenity_balcony" name="amenities" value="balcony">
                    <label class="form-check-label" for="amenity_balcony">Balcony</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="amenity_safe" name="amenities" value="safe">
                    <label class="form-check-label" for="amenity_safe">Safe</label>
                    </div>
                </div>
                </div>

                <!-- Form Actions -->
                <div class="col-12">
                <div class="d-flex gap-3 pt-3 border-top">
                    <button type="submit" class="btn btn-primary-custom flex-grow-1">
                    <i class="fas fa-check me-2"></i>Save Type
                    </button>
                    <button type="reset" class="btn btn-secondary-custom">
                    <i class="fas fa-times me-2"></i>Clear
                    </button>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>

        <!-- Room Types List -->
        <div class="col-lg-7">
        <div class="form-card">
            <div class="form-header">
            <h3 class="mb-0"><i class="fas fa-list me-2"></i>Room Types</h3>
            <p class="text-muted mb-0">Manage all room type categories</p>
            </div>

            <div class="room-types-table">
            <table class="table table-hover mb-0">
                <thead>
                <tr>
                    <th>Type Name</th>
                    <th>Max Guests</th>
                    <th>Base Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="typesTableBody">
                <!-- Room types will be populated here -->
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">
                    <i class="fas fa-inbox me-2"></i>No room types added yet
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>

        <!-- Sample Data Info -->
        <div class="alert alert-info mt-4" role="alert">
            <i class="fas fa-info-circle me-2"></i>
            <strong>Info:</strong> Add room types to categorize your rooms. Each type can have different pricing and amenities.
        </div>
        </div>
    </div>
    </div>

    <!-- Additional Styles for Room Types Page -->
    <style>
    .amenities-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.8rem;
        padding: 1rem;
        background: rgba(106, 178, 255, 0.05);
        border-radius: 0.5rem;
        border-left: 3px solid #6cb2ff;
    }

    .amenities-grid .form-check {
        display: flex;
        align-items: center;
    }

    .amenities-grid .form-check-input {
        cursor: pointer;
        border-color: #ddd;
    }

    .amenities-grid .form-check-input:checked {
        background-color: #6cb2ff;
        border-color: #6cb2ff;
    }

    .amenities-grid .form-check-label {
        cursor: pointer;
        margin-bottom: 0;
        margin-left: 0.5rem;
        font-size: 0.9rem;
    }

    .room-types-table {
        overflow-x: auto;
    }

    .room-types-table table {
        font-size: 0.9rem;
    }

    .room-types-table th {
        background-color: #f8f9fa;
        color: #0b2b40;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
    }

    .room-types-table tr:hover {
        background-color: #f8f9fa;
    }

    .room-types-table td {
        vertical-align: middle;
        padding: 1rem !important;
    }

    .type-actions {
        display: flex;
        gap: 0.5rem;
    }

    .type-actions .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }

    .type-actions .btn-edit {
        background-color: #4a90e2;
        color: white;
        border: none;
    }

    .type-actions .btn-edit:hover {
        background-color: #357abd;
        color: white;
    }

    .type-actions .btn-delete {
        background-color: #e74c3c;
        color: white;
        border: none;
    }

    .type-actions .btn-delete:hover {
        background-color: #c0392b;
        color: white;
    }

    @media (max-width: 991.98px) {
        .amenities-grid {
        grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 767.98px) {
        .amenities-grid {
        grid-template-columns: repeat(2, 1fr);
        }

        .room-types-table {
        font-size: 0.8rem;
        }

        .room-types-table th, .room-types-table td {
        padding: 0.5rem !important;
        }
    }
    </style>

    <!-- Room Types Management Script -->
    <script>
    (function() {
        const form = document.getElementById('roomTypeForm');
        const typesTableBody = document.getElementById('typesTableBody');
        let roomTypes = [];

        // Load room types from localStorage (for demo)
        function loadRoomTypes() {
        const stored = localStorage.getItem('roomTypes');
        if (stored) {
            roomTypes = JSON.parse(stored);
            renderTable();
        }
        }

        // Save room types to localStorage
        function saveRoomTypes() {
        localStorage.setItem('roomTypes', JSON.stringify(roomTypes));
        }

        // Render table
        function renderTable() {
        if (roomTypes.length === 0) {
            typesTableBody.innerHTML = `
            <tr>
                <td colspan="4" class="text-center text-muted py-4">
                <i class="fas fa-inbox me-2"></i>No room types added yet
                </td>
            </tr>
            `;
            return;
        }

        typesTableBody.innerHTML = roomTypes.map((type, index) => `
            <tr>
            <td><strong>${type.name}</strong></td>
            <td>${type.maxGuests}</td>
            <td>$${parseFloat(type.basePrice).toFixed(2)}</td>
            <td>
                <div class="type-actions">
                <button class="btn btn-sm btn-edit" onclick="editType(${index})">
                    <i class="fas fa-edit"></i> Edit
                </button>
                <button class="btn btn-sm btn-delete" onclick="deleteType(${index})">
                    <i class="fas fa-trash"></i> Delete
                </button>
                </div>
            </td>
            </tr>
        `).join('');
        }

        // Add/Update room type
        form.addEventListener('submit', function(e) {
        e.preventDefault();

        const typeName = document.getElementById('type_name').value;
        const typeDescription = document.getElementById('type_description').value;
        const maxGuests = document.getElementById('type_max_guests').value;
        const basePrice = document.getElementById('type_base_price').value;
        
        const amenitiesCheckboxes = document.querySelectorAll('input[name="amenities"]:checked');
        const amenities = Array.from(amenitiesCheckboxes).map(cb => cb.value);

        const newType = {
            name: typeName,
            description: typeDescription,
            maxGuests: maxGuests,
            basePrice: basePrice,
            amenities: amenities
        };

        roomTypes.push(newType);
        saveRoomTypes();
        renderTable();

        // Reset form
        form.reset();
        document.querySelectorAll('input[name="amenities"]').forEach(cb => cb.checked = false);

        alert('Room type added successfully!');
        });

        // Delete room type
        window.deleteType = function(index) {
        if (confirm('Are you sure you want to delete this room type?')) {
            roomTypes.splice(index, 1);
            saveRoomTypes();
            renderTable();
        }
        };

        // Edit room type
        window.editType = function(index) {
        const type = roomTypes[index];
        document.getElementById('type_name').value = type.name;
        document.getElementById('type_description').value = type.description;
        document.getElementById('type_max_guests').value = type.maxGuests;
        document.getElementById('type_base_price').value = type.basePrice;

        // Check amenities
        document.querySelectorAll('input[name="amenities"]').forEach(cb => {
            cb.checked = type.amenities.includes(cb.value);
        });

        // Remove old type and scroll to form
        roomTypes.splice(index, 1);
        saveRoomTypes();
        renderTable();

        window.scrollTo({ top: 0, behavior: 'smooth' });
        };

        // Load on page init
        loadRoomTypes();
    })();
    </script>

    <?php include("include/footer.php"); ?>
