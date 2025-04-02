<div id="categoryModal" class="modal" style="display: none; position: fixed; z-index: 500; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
    <div style="background-color: white; margin: 0 auto; padding: 10px; border-radius: 5px; width: 50%; max-width: 600px;">
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
<!-- Edit Category Modal -->
@foreach($categories as $category)
<div id="editCategoryModal" class="modal" style="display: none; position: fixed; z-index: 500; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
    <div style="background-color: white; margin: 0 auto; padding: 10px; border-radius: 5px; width: 50%; max-width: 600px;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Edit Category</h2>
        <span style="cursor: pointer; font-size: 24px;" onclick="closeEditCategoryModal()">&times;</span>
      </div>
      <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="editCategoryName">Category Name</label>
          <input type="text" id="editCategoryName" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <div class="form-group">
          <label for="editCategoryDescription">Description</label>
          <textarea id="editCategoryDescription" name="description" class="form-control" rows="3">{{ $category->description }}</textarea>
        </div>
        <div style="display: flex; justify-content: flex-end; gap: 10px;">
          <button type="button" class="btn btn-danger" onclick="closeEditCategoryModal()">Cancel</button>
          <button type="submit" class="btn btn-primary">Update Category</button>
        </div>
      </form>
    </div>
  </div>
  @endforeach
  <!-- Product Modal -->
  <div id="productModal" class="modal" style="display: none; position: fixed; z-index: 500; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);max-height: 80vh; overflow-y: auto;">
    <div style="background-color: white; margin: 0 auto; padding: 10px; border-radius: 5px; width: 50%; max-width: 600px;">
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
    <div class="form-group">
      <label for="productDescription">Description</label>
      <textarea name="description" id="productDescription" class="form-control" rows="3"></textarea>
    </div>
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
  <!-- Edit Product Modal -->
  @foreach($products as $product)
<div id="editProductModal" class="modal" style="display: none; position: fixed; z-index: 200; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); max-height: 80vh; overflow-y: auto;">
    <div style="background-color: white; margin: 0 auto; padding: 5px; border-radius: 5px; width: 50%; max-width: 600px;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
        <h2>Edit Product</h2>
        <span style="cursor: pointer; font-size: 24px;" onclick="closeEditProductModal()">&times;</span>
      </div>
      <form method="POST" action="{{ route('admin.products.update', ['product' => $product->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="editProductName">Product Name</label>
          <input type="text" name="name" id="editProductName" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
          <label for="editProductCategory">Category</label>
          <select name="category_id" id="editProductCategory" class="form-control" required>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="editProductPrice">Price ($)</label>
          <input type="number" name="price" id="editProductPrice" class="form-control" value="{{ $product->price }}" step="0.01" required>
        </div>
        <div class="form-group">
          <label for="editProductStock">Stock Quantity</label>
          <input type="number" name="stock" id="editProductStock" class="form-control" value="{{ $product->stock }}" required>
        </div>
        <div class="form-group">
          <label for="editProductImage">Product Image</label>
          <input type="file" name="image" id="editProductImage" class="form-control">
          <p>Current image: <img src="{{ asset('storage/'.$product->image) }}" width="50" alt="Current Image"></p>
        </div>
        <div style="display: flex; justify-content: flex-end; gap: 10px;">
          <button type="button" class="btn btn-danger" onclick="closeEditProductModal()">Cancel</button>
          <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
      </form>
    </div>
  </div>
  @endforeach
