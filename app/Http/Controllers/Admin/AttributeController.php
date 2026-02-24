<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Auth;
use DB;
use Illuminate\Support\Facades\Redirect;
class AttributeController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:Attribute List|Attribute Create|Attribute Edit|Attribute Delete', ['only' => ['index','store']]);
         $this->middleware('permission:Attribute Create', ['only' => ['create','store']]);
         $this->middleware('permission:Attribute Edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Attribute Delete', ['only' => ['destroy']]);
         $this->userid=@Auth::user()->id;
         $this->username=@Auth::user()->name;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=(Auth::user()->roles[0]->id == 1) ?['1',$this->userid] : [$this->userid];

        $Attribute=Attribute::
        whereIn('created_by',$user)
        ->orderBy('id','DESC')
        ->get();
        return view('backend.Attribute.view',compact('Attribute'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Attribute.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
$duplicate_check=DB::table('attributes')->where('attribute_type',$data['attribute_type'])->get();
 
      if(!empty($data) && count($duplicate_check) <=0){
          $attribute=new Attribute;
          $attribute['attribute_type']=$data['attribute_type'];
          $attribute['value']=serialize($data['value']);
          $attribute['created_by']=$this->userid;
        //   $attribute['stock']=$data['stock'][$key];
        //   $attribute['valus']=$data['valus'][$key];
        // //   $attribute['product_id']=$id;
        //   $attribute['size']=$data['size'][$key];
          $attribute->save();

      }else{
        Session::put('error','Duplicate Attribute Type');
        return Redirect::back()->withErrors(['msg' => 'The Message']);
      }
  
  Session::put('success','Attribute Successfully Added');
  return redirect()->route('attribute.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attribute=Attribute::find($id);
        if($attribute){
            return view('backend.Attribute.edit',compact('attribute'));
        }
        else{
            return back()->with('error','Data not  found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attribute=Attribute::find($id);
        if($attribute){
  
        
          $data=$request->all();
          $data['value']=serialize($data['value']);
          $status=$attribute->fill($data)->save();
           if($status){
            Session::put('success','Successfully update Category');
            return redirect()->route('attribute.index');
          }else{
            Session::put('warning','something went worng!');
          }
  
        }else{
            Session::put('error','Attribute not fround');
        }
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attribute=Attribute::find($id);
        if($attribute){
            $status=$attribute->delete();
            if($status){
                Session::put('error','Attribute successfully deleted');
                return redirect()->route('attribute.index');
            }
            else{
                Session::put('error','Data not found');
            }


        }
       
    }
}
