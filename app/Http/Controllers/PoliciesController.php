<?php

namespace App\Http\Controllers;
use App\Models\Policies;
use App\Models\User;
use Illuminate\Http\Request;
use File;

class PoliciesController extends Controller
{

    public function index(Request $request)
    {
        $policies = Policies::when($request->search, function($query) use ($request){
            return $query->where('policies_title', 'like' , '%' . $request->search .'%')
            ->orWhere('frame_title', 'like', '%' . $request->search . '%');

          })->latest()->paginate(5);

          return view('dashboard.policies.index', compact('policies'));
    }


    public function create()
    {
        $id = auth()->user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.policies.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'policies_title' => '',
            'frame_title' => '',
            'user_id' => 'required',
           ]);

           $request_data = $request->except(['policies','frame']);


           if ($request->policies) {
            $request->validate([
                'policies' => 'mimes:pdf,doc,docx',
              ]);

              $policies = $request->file('policies');
              $policiesName = time().'_'.$policies->getClientOriginalName();
              $policies->move(public_path('files'),$policiesName);

             $request_data['policies'] = 'files'.$policiesName;

        }//end of if


        if ($request->frame) {
            $request->validate([
                'frame' => 'mimes:pdf,doc,docx',
              ]);

              $frame = $request->file('frame');
              $frameName = time().'_'.$frame->getClientOriginalName();
              $frame->move(public_path('files'),$frameName);

             $request_data['frame'] = 'files/'.$frameName;

        }//end of if
           $policies = Policies::create($request_data);


           session()->flash('success', __('تمت اضافة السياسة واللائحة بنجاح'));

           return redirect()->route('policie.index');

    }//end of store

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $policies = Policies::find($id);

        if(!$policies){
         return response()->json(['message' => 'لم يتم العثور علي السياسة']);
        }

        $fileName = $policies->policies;
        $filePath = public_path('files/' .$fileName);
         return response()->download($filePath, $fileName);




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


    public function destroy(string $id)
    {
        $policies = Policies::whereId($id)->first();

        if (File::exists($policies->frame)) {

            File::delete($policies->frame);

        }//end of if

        if (File::exists($policies->policies)) {

            File::delete($policies->policies);

        }//end of if

        $policies->delete();
        session()->flash('success', ('تم الحذف  بنجاح'));
        return redirect()->route('policie.index');
    }
}
