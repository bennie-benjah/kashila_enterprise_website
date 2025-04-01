<div id="categoryModal" class="modal" style="display: none; position: fixed; z-index: 1001; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
    <div style="background-color: white; margin: 5% auto; padding: 20px; border-radius: 5px; width: 50%; max-width: 600px;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Add New Category</h2>
        <span style="cursor: pointer; font-size: 24px;" onclick="closeCategoryModal()">&times;</span>
      </div>
      <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" id="categoryName" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="categoryDescription">Description</label>
            <textarea id="categoryDescription" name="description" class="form-control" rows="3"></textarea>
        </div>
        <div style="display: flex; justify-content: flex-end; gap: 10px;">
            <button type="button" class="btn btn-danger" onclick="closeCategoryModal()">Cancel</button>
            <button type="submit" class="btn btn-primary">Save Category</button>
        </div>
    </form>

    </div>
  </div>

  <!-- Product Modal -->
  <div id="productModal" class="modal" style="display: none; position: fixed; z-index: 1001; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
    <div style="background-color: white; margin: 5% auto; padding: 20px; border-radius: 5px; width: 50%; max-width: 600px;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Add New Product</h2>
        <span style="cursor: pointer; font-size: 24px;" onclick="closeProductModal()">&times;</span>
      </div>
      <!-- Product Add Form -->
<form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="productName">Product Name</label>
      <input type="text" name="name" id="productName" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="productCategory">Category</label>
      <select name="category_id" id="productCategory" class="form-control" required>
        <option value="">Select Category</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="productPrice">Price ($)</label>
      <input type="number" name="price" id="productPrice" class="form-control" step="0.01" required>
    </div>
    <div class="form-group">
      <label for="productStock">Stock Quantity</label>
      <input type="number" name="stock" id="productStock" class="form-control" required>
    </div>
    {{-- <div class="form-group">
      <label for="productDescription">Description</label>
      <textarea name="description" id="productDescription" class="form-control" rows="3"></textarea>
    </div> --}}
    <div class="form-group">
      <label for="productImage">Product Image</label>
      <input type="file" name="image" id="productImage" class="form-control">
    </div>
    <div style="display: flex; justify-content: flex-end; gap: 10px;">
      <button type="button" class="btn btn-danger" onclick="closeProductModal()">Cancel</button>
      <button type="submit" class="btn btn-primary">Save Product</button>
    </div>
  </form>

    </div>
  </div>
