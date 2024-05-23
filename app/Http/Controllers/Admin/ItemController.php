<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        //
    }
    
    public function create()
    {
        return view('admin.item.create-item');
    }

    public function store(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required|max:255',
            'size' => 'required|max:255',
            'colour' => 'required|max:255',
            'category' => 'required|max:255',
            'tags' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:4048',
        ]);

        if ($validated) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            
            $item = new Item();
            $item->name = $request->name;
            $item->price = $request->price;
            $item->description = $request->description;
            $item->size = $request->size;
            $item->colour = $request->colour;
            $item->category = $request->category;
            $item->tags = $request->tags;
            $item->image = 'images/' . $imageName;
            $item->created_by = auth()->user()->id;

            if ($item->save()) {
                return redirect('/admin/dashboard')->with('success', 'Item created successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong e.g item creation failed');
            }
        }
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('admin.item.create-item', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required|max:255',
            'size' => 'required|max:255',
            'colour' => 'required|max:255',
            'category' => 'required|max:255',
            'tags' => 'required|max:255',
        ]);

        if ($validated) {
            $item = Item::find($id);


        }
    }

    public function delete($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/admin/dashboard')->with('success', 'Item deleted successfully');
    }
   
}
