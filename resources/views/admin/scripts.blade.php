<!-- Toastr JS -->
<!-- Display toastr notification -->
@if(session('success'))
    <script type="text/javascript">
        toastr.success("{{ session('success') }}");
    </script>
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    // Modal functions
    function openCategoryModal() {
      document.getElementById('categoryModal').style.display = 'block';
    }

    function closeCategoryModal() {
      document.getElementById('categoryModal').style.display = 'none';
    }

    function openProductModal() {
      document.getElementById('productModal').style.display = 'block';
    }

    function closeProductModal() {
      document.getElementById('productModal').style.display = 'none';
    }

    // Close modals when clicking outside
    window.onclick = function(event) {
      if (event.target.className === 'modal') {
        event.target.style.display = 'none';
      }
    }

    // Delete confirmation
    document.querySelectorAll('.delete-btn').forEach(button => {
      button.addEventListener('click', function() {
        if (confirm('Are you sure you want to delete this item?')) {
          // Add your delete logic here
          alert('Item deleted successfully!');
        }
      });
    });
  </script>
  <script>
    // Initialize Toastr
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000",
    };

    // Display success message
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    // Display error message
    @if(session('error'))
        toastr.error("{{ session('error') }}");
    @endif
// Open Edit Category Modal
function openEditCategoryModal(categoryId) {
    // You can use AJAX to fetch the category details if required
    document.getElementById('editCategoryModal').style.display = 'block';
}

// Close Edit Category Modal
function closeEditCategoryModal() {
    document.getElementById('editCategoryModal').style.display = 'none';
}

// Open Edit Product Modal
function openEditProductModal(productId) {
    // You can use AJAX to fetch the product details if required
    document.getElementById('editProductModal').style.display = 'block';
}

// Close Edit Product Modal
function closeEditProductModal() {
    document.getElementById('editProductModal').style.display = 'none';
}
</script>
