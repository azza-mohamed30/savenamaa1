<?php

namespace App\Http\Controllers;
use App\Models\Financial_report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Financial_reportcController extends Controller
{

    public function index(Request $request)
    {
        $reports = Financial_report::when($request->search, function($query) use ($request){
            return $query->where('title', 'like' , '%' . $request->search .'%');

          })->latest()->paginate(5);

          return view('dashboard.financial_reports.index', compact('reports'));
    }


    public function create()
    {
        $id = auth::user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.financial_reports.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required',
            'user_id' => 'required',

           ]);

           $request_data = $request->except(['report']);


           if ($request->report) {
            $request->validate([
                'report' => 'mimes:pdf,doc,docx,xlsx',
              ]);

              $report = $request->file('report');
              $reportName = time().'_'.$report->getClientOriginalName();
              $report->move(public_path('reports/'),$reportName);

             $request_data['report'] = 'reports/'.$reportName;

        }//end of if



           $reports = Financial_report::create($request_data);


           session()->flash('success', __('تمت اضافة التقرير بنجاح'));

           return redirect()->route('financial_report.index');

    }//end of store

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reports = Financial_Report::find($id);

        return view('dashboard.financial_reports.show', compact('reports'));

        // if(!$reports){
        //  return response()->json(['message' => 'لم يتم العثور علي السياسة']);
        // }

        // $reportName = $reports->report;
        // $reportPath = public_path('/' .$reportName);
        //  return response()->download($reportName);




    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = Financial_report::whereId($id)->first();
        $users = User::whereId($report->user_id)->first();

       return view('dashboard.financial_reports.edit', compact('users','report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $reports = Financial_report::whereId($id)->first();

        $request->validate([

            'title' => 'required',



           ]);

           $request_data = $request->except(['report','user_id']);


           if ($request->report) {

        if ($reports->report != 0) {

            File::delete($reports->report);

        }//end of inner if

            $request->validate([
                'report' => 'mimes:pdf,doc,docx,xlsx',
              ]);

              $report = $request->file('report');
              $reportName = time().'_'.$report->getClientOriginalName();
              $report->move(public_path('reports/'),$reportName);

             $request_data['report'] = 'reports/'.$reportName;

        }//end of if


        $request_data['user_id'] = auth::user()->id;

           $reports->update($request_data);


           session()->flash('success', __('تم تعديل التقرير بنجاح'));

           return redirect()->route('financial_report.index');
    }


    public function download (string $id)
    {
        $report = Financial_report::find($id);

        if(!$report){
         return response()->json(['message' => 'لم يتم العثور علي التقرير']);
        }

        $fileName = $report->report;
        $filePath = public_path('/'.$fileName);
         return response()->download($filePath);
    }


    public function destroy(string $id)
    {
        $reports = Financial_report::whereId($id)->first();

        if ($reports->report != 0) {

            File::delete($reports->report);

        }//end of if


        $reports->delete();
        session()->flash('success', ('تم الحذف  بنجاح'));
        return redirect()->route('financial_report.index');
    }
}
