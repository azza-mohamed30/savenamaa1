<?php

namespace App\Http\Controllers;
use App\Models\Meeting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class MeetingsController extends Controller
{
    public function index(Request $request)
    {

    }


    public function main(Request $request)
    {
        $meetings = Meeting::when($request->search, function($query) use ($request){
            return $query->where('title', 'like' , '%' . $request->search .'%');
            // ->orWhere('frame_title', 'like', '%' . $request->search . '%');

          })->latest()->paginate(5);

          return view('dashboard.meetings.index', compact('meetings'));
    }

    public function create()
    {
        $id = auth::user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.meetings.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function storee(Request $request)
     {
         $request->validate([

             'title' => 'required',
             'user_id' => 'required',
            ]);
            $request_data = $request->except(['file']);

            if ($request->file) {
             $request->validate([
                 'file' => 'mimes:pdf,doc,docx',
               ]);

               $meeting = $request->file('file');
               $meetingName = time().'_'.$meeting->getClientOriginalName();
               $meeting->move(public_path('meetings/'),$meetingName);

              $request_data['file'] = 'meetings/'.$meetingName;

         }//end of if



            $meetings = Meeting::create($request_data);


            session()->flash('success', __('تمت اضافة محاضر الاجتماع بنجاح'));

            return redirect()->route('dashboard.meetings.index');

     }//end of store


    public function store(Request $request)
    {
       //

    }//end of store


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    public function editt(string $id)
    {
        $meetings = Meeting::whereId($id)->first();
        $users = User::whereId($meetings->user_id)->first();

       return view('dashboard.meetings.edit', compact('users','meetings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
               //
    }

    public function updatee(Request $request, string $id)
    {
        $meetings = Meeting::whereId($id)->first();

        $request->validate([

            'title' => 'required',

           ]);

           $request_data = $request->except(['file','user_id']);


           if ($request->file) {

        if ($meetings->file != 0) {

            File::delete($meetings->file);

        }//end of inner if

            $request->validate([
                'file' => 'mimes:pdf,doc,docx,xlsx',
              ]);

              $meeting = $request->file('file');
              $meetingName = time().'_'.$meeting->getClientOriginalName();
              $meeting->move(public_path('meetings/'),$meetingName);

             $request_data['file'] = 'meetings/'.$meetingName;

        }//end of if


        $request_data['user_id'] = auth::user()->id;

           $meetings->update($request_data);


           session()->flash('success', __('تم تعديل محاضر الاجتماع بنجاح'));

           return redirect()->route('dashboard.meetings.index');
    }


    public function download (string $id)
    {
        $meetings = Meeting::find($id);

        if(!$meetings){
         return response()->json(['message' => 'لم يتم العثور علي الاجتماع']);
        }

        $fileName = $meetings->file;
        $filePath = public_path('/'.$fileName);
         return response()->download($filePath);
    }


    public function destroy(string $id)
    {
        //

    }

    public function destrooy(string $id)
    {
        $meetings = Meeting::whereId($id)->first();

        if (File::exists($meetings->file) ) {

            File::delete($meetings->file);
        }//end of if
        $meetings->delete();
        session()->flash('success', ('تم الحذف  بنجاح'));
        return redirect()->route('dashboard.meetings.index');
    }
}
