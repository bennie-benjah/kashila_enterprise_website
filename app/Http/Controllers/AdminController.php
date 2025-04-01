<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all categories from the database
        $users = User::all();
        $products = Product::with('category')->get();
        $categories = Category::paginate(10); // You can also add pagination if needed
        $categoriesCount = Category::count();
        $productsCount = Product::count();
        $activeUsersCount = User::where('user_type', 'user')->count(); // Filter by user_type
        // Pass categories to the view
        return view('admin.index', compact('categories', 'categoriesCount','productsCount', 'activeUsersCount', 'users', 'products'));
    }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|unique|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        // Store the new category
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Redirect with success message to trigger the toastr notification
        return redirect()->route('admin/dashboard')
                         ->with('success', 'Category added successfully!');
    }
    public function storeProduct(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        }

        // Create new product record
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // Redirect back with success message
        return redirect()->route('admin/dashboard')->with('success', 'Product added successfully!');
    }
    public function destroy($id)
{
    $product = Product::find($id);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found');
    }

    // Delete the product image if stored
    if ($product->image && file_exists(public_path('storage/' . $product->image))) {
        unlink(public_path('storage/' . $product->image));
    }

    $product->delete();

    return redirect()->back()->with('success', 'Product deleted successfully');
}
public function destroyCategory($id)
{
    $category = Category::find($id);

    if (!$category) {
        return redirect()->back()->with('error', 'Product not found');
    }



    $category->delete();

    return redirect()->back()->with('success', 'Category deleted successfully');
}

}
