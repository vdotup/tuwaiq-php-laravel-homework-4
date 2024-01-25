<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;

use function PHPUnit\Framework\isNull;

class ItemsController extends Controller
{
    public function getItemGroup()
    {
        $data = Itemgroup::all();
        return view("itemgroup", ['data'=>$data]);
    }

    public function saveItemGroup(Request $request)
    {
        $data = Itemgroup::create([
            'itemGroupName'=> $request->itemGroupName,
        ]);

        $data->save();

        return redirect()->route('itemgroup');
    }

    public function deleteItemGroup($id)
    {
        $group = Itemgroup::find($id);
        $group->delete();
        return redirect()->route('itemgroup');
    }

    public function editItemGroup($id)
    {
        $row = Itemgroup::find($id);
        return view("editItemGroup", ['row'=>$row]);
    }
    public function updateItemGroup(Request $request)
    {
        $group = Itemgroup::find($request->id);
        $group->itemGroupName = $request->itemGroupName;
        $group->save();

        return redirect('itemgroup');
    }

    public function getItems()
    {
        $data = Items::all();
        return view("items", ['data'=>$data]);
    }
    
    public function saveItem(Request $request)
    {
        $data = Items::create([
            'itemName'=> $request->itemName,
            'price'=> $request->price,
            'quantity'=> $request->quantity,
            'color'=> $request->color,
            'itemGroupID'=> $request->itemGroupID,
        ]);

        $data->save();

        return redirect()->route('items');
    }

    public function deleteItem($id)
    {
        $item = Items::find($id);
        $item->delete();
        return redirect()->route('items');
    }

    public function editItem($id)
    {
        $row = Items::find($id);
        return view("editItem", ['row'=>$row]);
    }
    public function updateItem(Request $request)
    {
        $item = Items::find($request->id);
        $item->itemName = $request->itemName;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->color = $request->color;
        $item->itemGroupID = $request->itemGroupID;

        $item->save();

        return redirect('items');
    }
}
