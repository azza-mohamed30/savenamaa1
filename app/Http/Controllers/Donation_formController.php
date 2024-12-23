<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation_form;
use File;

class Donation_formController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $donations = Donation_form::when($request->search, function($query) use ($request){
            return $query->where('name', 'like' , '%' . $request->search .'%');

          })->latest()->paginate(5);

          return view('dashboard.donations.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'donation_type' => 'required',
           ]);



           $request_data = $request->except(['image']);


           if ($request->image) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $image = $request->file('image');
              $imageName = time().'_'.$image->getClientOriginalName();
              $image->move(public_path('images/donations_images'),$imageName);

             $request_data['image'] = 'images/donations_images/'.$imageName;


        }//end of if



           $donations = Donation_form::create($request_data);


           session()->flash('success', __('  تمت عملية التبرع بنجاح'));

           return redirect()->route('donation_form')->with(['success' => 'تم ادخال البيانات بنجاح']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donations = Donation_form::whereId($id)->first();
        return view('dashboard.donations.show',compact('donations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donations = Donation_form::whereId($id)->first();
        if ($donations->image != 'default.png') {

            File::delete($donations->image);

        }//end of if

        $donations->delete();
        session()->flash('success', ('تم حذف التبرع بنجاح'));
        return redirect()->route('donation.index')->with(['success' => 'تم حذف التبرع بنجاح']);
    }
}
