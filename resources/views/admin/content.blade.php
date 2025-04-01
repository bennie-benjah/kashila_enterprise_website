<div class="main-content">
    <div class="header">
      <h1>Dashboard</h1>
      <div class="user-actions">
        <span>Welcome, Admin</span>
        <img src="./image/logo7.jpg" alt="User" class="user-img">
      </div>
    </div>

    <!-- Stats Cards -->
    <div class="cards">
      <div class="card primary">
        <h3>Total Products</h3>
        <h2>{{ $productsCount }}</h2>
      </div>
      <!-- resources/views/admin/index.blade.php -->

<div class="card success">
    <h3>Categories</h3>
    <h2>{{ $categoriesCount }}</h2> <!-- Display the count of categories -->
</div>

      <!-- resources/views/admin/index.blade.php -->

<div class="card warning">
    <h3>Active Users</h3>
    <h2>{{ $activeUsersCount }}</h2> <!-- Display the count of active users -->
</div>

      <div class="card danger">
        <h3>Pending Orders</h3>
        <h2>3</h2>
      </div>
    </div>

    <!-- Categories Section -->
    <!-- resources/views/admin/index.blade.php -->

<div id="categories" class="content-table">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Categories</h2>
        <button class="btn btn-primary" onclick="openCategoryModal()">
            <i class="fas fa-plus"></i> Add Category
        </button>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-btn delete-btn">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


    <!-- Products Section -->
    <!-- resources/views/admin/products/index.blade.php -->

<div id="products" class="content-table">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
      <h2>Products</h2>
      <button class="btn btn-primary" onclick="openProductModal()">
        <i class="fas fa-plus"></i> Add Product
      </button>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Product Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Stock</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td> <!-- Display the category name -->
            <td>${{ number_format($product->price, 2) }}</td>
            <td>{{ $product->stock }}</td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-btn delete-btn">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>


    <!-- resources/views/admin/index.blade.php -->

<div id="users" class="content-table">
    <h2>Users</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Joined</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->user_type) }}</td> <!-- Assuming 'user_type' column holds roles -->
                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

  </div>
