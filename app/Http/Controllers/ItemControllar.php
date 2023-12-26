<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Items;
class ItemControllar extends Controller{
    function addItem(Request $r){
       $item=new Items();
       $item->Sno=null;
       $item->item= $r->item;
       $item->save();
       return redirect('/');
    }
    function showItem(){
        $items=Items::all();
        return view('index',['items'=>$items]);
    }
    function deletItem($Sno){
        $item=Items::find($Sno);
        $item->delete();
        return redirect('/');
    }
    function editItem($Sno){
        $items=Items::find($Sno);
        return view('edit',['items'=>$items]);
    }
    function updateItem(Request $r){
        $item=Items::find($r->Sno);
        $item->item=$r->item;
        $item->save();
        return redirect('/');
    }
}