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
