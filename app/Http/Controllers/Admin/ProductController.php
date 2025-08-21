<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Products;
use App\Models\Stock;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function categories_allPage()
    {
        $categories = Categorie::all();

        return view("admin.categories.categories_all", compact("categories"));
    }

    public function categories_addPage()
    {
        $category_data = new Categorie;

        $title = "Add new Category";

        $url = route('admin.categories_addPage');

        return view('admin.categories.categories_add', compact('category_data', 'title', 'url'));
    }

    public function categories_add(Request $request)
    {
        Categorie::create($request->all());

        return redirect()->route("admin.categories_allPage")->with("success", "New categories added successfully");

    }
    public function category_edit($id)
    {
        $category_data = Categorie::find($id);

        $title = "Category data update";

        $url = route('admin.category_update', ['id' => $id]);

        return view('admin.categories.categories_add', compact('category_data', 'title', 'url'));
    }

    public function category_update(Request $request, $id)
    {
        $category = Categorie::find($id);

        if (!$category) {
            return redirect()->route('admin.categories_allPage')->with('success-trash', 'Category not found.');
        }

        $category->update($request->all());

        return redirect()->route('admin.categories_allPage')->with('success', 'Category data updated successfully.');
    }

    public function category_delete($id)
    {
        $category = Categorie::find($id);

        if (!$category) {
            return redirect()->route('admin.categories_allPage')->with('success-trash', 'Category not found');
        }

        $category->delete();

        return redirect()->route('admin.categories_allPage')->with('success-delete', 'Category delete successfully');
    }


    public function product_allPage()
    {
        $products = Products::paginate(10);

        return view("admin.products.product_all", compact("products"));
    }

    public function product_addPage()
    {
        $categories = Categorie::all();

        $product_data = new Products;

        $url = route('admin.product_addPage');

        $title = "New Product add";

        return view("admin.products.product_add", compact("product_data", "url", "title", "categories"));
    }

    public function product_add(Request $request)
    {
        Products::create($request->all());

        $pro_id = $request->input("pro_id");

        return redirect()->route('admin.pro_stock_addPage', ['pro_id' => $pro_id])->with("success", "New product add successfully");
    }

    public function product_edit($id)
    {
        $categories = Categorie::all();

        $product_data = Products::find($id);

        $url = route('admin.product_update', ['id' => $id]);

        $title = "Product data update";

        return view("admin.products.product_add", compact("product_data", "url", "title", "categories"));
    }

    public function product_update(Request $request, $id)
    {
        Products::find($id)->update($request->all());

        return redirect()->route("admin.product_allPage")->with("success", "Product data update successfully.");
    }

    public function product_delete($id)
    {
        $product = Products::find($id);

        if ($product) {
            // Find and delete the product
            $product->delete();

            // Find all related stocks and delete them
            $stocks = Stock::where("pro_id", $product->pro_id)->get();

            foreach ($stocks as $stock) {
                $stock->delete();
            }

            return redirect()->route('admin.product_allPage')->with('success-delete', 'Product and related stocks deleted successfully.');
        } else {
            return redirect()->route('admin.product_allPage')->with('success-trash', 'Product not found.');
        }


    }

    public function product_feature($id, $status)
    {
        $product = Products::find($id);

        if ($product) {

            $product->feature = $status;

            $product->save();

            return redirect()->route('admin.product_allPage')->with('success', 'Product featured successfully.');

        } else {

            return redirect()->route('admin.product_allPage')->with('success-trash', 'Product not found.');

        }
    }

    public function product_status($id, $status)
    {
        $product = Products::find($id);

        if ($product) {

            $product->status = $status;

            $product->save();

            return redirect()->route('admin.product_allPage')->with('success', 'Product featured successfully.');

        } else {

            return redirect()->route('admin.product_allPage')->with('success-trash', 'Product not found.');

        }
    }


    public function pro_stockPage($pro_id)
    {
        $stocks = Stock::where('pro_id', $pro_id)->get();

        return view('admin.products.stock_all', compact('stocks', 'pro_id'));
    }

    public function pro_stock_addPage($pro_id)
    {
        $stock_data = new Stock;

        $stock_data->pro_id = $pro_id; // Set pro_id to the value of $pro_id

        $url = route('admin.pro_stock_addPage',['pro_id'=> $pro_id]);

        $title = "Add new stock";

        return view('admin.products.stock_add', compact('stock_data', 'url', 'title'));
    }


    public function pro_stock_add(Request $request, $pro_id)
    {
        Stock::create($request->all());

        return redirect()->route('admin.pro_stockPage', ['pro_id' => $pro_id])->with('success', 'New stock added successfully');
    }

    public function pro_stock_edit($id)
    {
        $stock_data = Stock::find($id);

        $url = route('admin.pro_stock_update',['id'=> $id]);

        $title = "Stock data update";

        return view('admin.products.stock_add', compact('stock_data', 'url', 'title'));

        // dd($stock_data);
    }

    public function pro_stock_update(Request $request, $id)
    {
        $stock = Stock::find($id);

        $stock->update($request->all());

        return redirect()->route('admin.pro_stockPage', ['pro_id' => $stock->pro_id])->with('success', 'Stock data updated successfully.');

    }

    public function pro_stock_delete($id)
    {
        $stock = Stock::find($id);

        if ($stock) {

            $stock->delete();

            return redirect()->route('admin.pro_stockPage', ['pro_id' => $stock->pro_id])->with('success-delete', 'Stock deleted successfully');

        } else {
            return redirect()->route('admin.pro_stockPage', ['pro_id' => $stock->pro_id])->with('success-trash', 'Stock not found or deleted on before.');
        }
    }





}
