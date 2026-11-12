<?php
namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ItemController extends Controller
{
    public function index() { return view('items.index',['items'=>Item::orderBy('id')->get()]); }
    public function show(Item $item) { return view('items.show',['item'=>$item]); }
    public function create() { return view('items.create',['categories'=>['device','accessory']]); }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>['required','string','min:2','max:80'],
            'category'=>['required',Rule::in(['device','accessory'])],
            'quantity'=>['required','integer','between:0,99'],
            'price_minor'=>['required','integer','between:0,999999'],
        ]);
        $item = Item::create($data);
        return redirect()->route('items.show',$item)->setStatusCode(303);
    }
}
