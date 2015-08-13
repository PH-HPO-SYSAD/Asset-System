<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Get all the asset with its relationship (category, brand, tags, asset_users, computers)
        $assets = Asset::with('category', 'brand', 'tags', 'asset_users', 'computers')->get();

        return view('assets.all')
            ->with(compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $asset = Asset::create([
            'tag_number'    => value($this->generate_tag_number($request->input('category'), $request->input('brand'))),
            'description'   => $request->input('description'),
            'category_id'   => $request->input('category'),
            'model'         => $request->input('model'),
            'brand_id'      => $request->input('brand'),
            'serial_number' => $request->input('serial_number'),
            'control_number'=> $request->input('control_number'),
            'color'         => $request->input('color'),
            'location'      => $request->input('location'),
            'status'        => $request->input('status'),
            'remarks'       => $request->input('remarks'),
            'warranty_end'  => $request->input('warranty_end')      
        ]);
        //if asset is successfully saved to the database
        if($asset){
            return redirect()->to('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
    * Auto-generate asset tag number
    *
    * @param int $category_id
    * @param int $brand_id
    * @return String
    */
    protected function generate_tag_number($category_id, $brand_id){
        $category = HPOInventory\Category::find($category_id);
        $brand = HPOInventory\Brand::find($brand_id);
        return strtoupper($category->code.'-'.$brand->name);
    }

}
