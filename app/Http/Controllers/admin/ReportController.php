<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GetDemo;
use App\PhoneBook;
use App\ScheduleInformation;
use App\NewsletterInformation;
use App\ContactInformation;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;
use Spatie\Permission\Models\Role;

class ReportController extends Controller
{
    
    public function phone_book() {
        return view('admin.report.phone_book');
    }

    public function delete_phone_book($id) {
        $model = PhoneBook::findOrFail($id);
        $model->delete();

        return redirect()->route('admin.report.phone_book');
    }

    public function phone_book_datatable(Request $request) {
		if ($request->ajax()) {
			$document = PhoneBook::where('phone', '!=', config('system.default_role.admin'))->orderBy('id', 'ASC')->get();
            
			return Datatables::of($document)
                ->editColumn('date', function ($model) {
                    $date = date('m-d-Y', strtotime($model->created_at));
                    return $date;
                })
                ->editColumn('status', function ($model) {
                    if($model->status == 1) {
                        $status = '<span class="badge badge-success">Yes</span>';
                    } else {
                        $status = '<span class="badge badge-danger">No</span>';
                    }
                    return $status;
                })
                ->editColumn('action', function ($model) {
                    $action = '<a href="'. route('admin.report.phone_book.delete', $model->id) .'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>';
                    return $action;
                })
				->addIndexColumn()
				->rawColumns(['action', 'status', 'date'])->make(true);
		}
	}
	
    public function get_demo() {
        return view('admin.report.get_demo');
    }

    public function delete_get_demo($id) {
        $model = GetDemo::findOrFail($id);
        $model->delete();

        return redirect()->route('admin.report.get_demo');
    }

    public function get_demo_datatable(Request $request) {
		if ($request->ajax()) {
			$document = GetDemo::where('email', '!=', config('system.default_role.admin'))->orderBy('id', 'ASC')->get();
            
			return Datatables::of($document)
                ->editColumn('date', function ($model) {
                    $date = date('m-d-Y', strtotime($model->created_at));
                    return $date;
                })
                ->editColumn('action', function ($model) {
                    $action = '<a href="'. route('admin.report.get_demo.delete', $model->id) .'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>';
                    return $action;
                })
				->addIndexColumn()
				->rawColumns(['action', 'date'])->make(true);
		}
	}
    
    public function static_page_data() {
        return view('admin.report.static_page_data');
    }

    public function static_page_datatable(Request $request) {
		if ($request->ajax()) {
			$document = ScheduleInformation::where('email', '!=', config('system.default_role.admin'))->orderBy('id', 'ASC')->get();
            
			return Datatables::of($document)
                ->editColumn('date', function ($model) {
                    $date = date('m-d-Y', strtotime($model->created_at));
                    return $date;
                })
                // ->editColumn('action', function ($model) {
                //     $action = '<a href="'. route('admin.report.get_demo.delete', $model->id) .'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>';
                //     return $action;
                // })
				->addIndexColumn()
				->rawColumns([ 'date'])->make(true);
		}
	}

    public function newsletter() {
        return view('admin.report.newsletter');
    }

    public function delete_newsletter($id) {
        $model = NewsletterInformation::findOrFail($id);
        $model->delete();

        return redirect()->route('admin.report.newsletter');
    }

    public function newsletter_datatable(Request $request) {
		if ($request->ajax()) {
			$document = NewsletterInformation::where('email', '!=', config('system.default_role.admin'))->orderBy('id', 'ASC')->get();
            
			return Datatables::of($document)
                ->editColumn('date', function ($model) {
                    $date = date('m-d-Y', strtotime($model->created_at));
                    return $date;
                })
                ->editColumn('action', function ($model) {
                    $action = '<a href="'. route('admin.report.newsletter.delete', $model->id) .'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>';
                    return $action;
                })
				->addIndexColumn()
				->rawColumns(['action', 'date'])->make(true);
		}
	}

    public function contact_us_information() {
        return view('admin.report.contact');
    }

    public function delete_contact_information($id) {
        $model = ContactInformation::findOrFail($id);
        $model->delete();

        return redirect()->route('admin.report.contact');
    }
    
    public function view_contact_information($id) {
        $model = ContactInformation::findOrFail($id);

        return view('admin.report.view', compact('model'));
    }

    public function contact_datatable(Request $request) {
		if ($request->ajax()) {
			$document = ContactInformation ::where('email', '!=', config('system.default_role.admin'))->orderBy('id', 'ASC')->get();
            
			return Datatables::of($document)
                ->editColumn('date', function ($model) {
                    $date = date('m-d-Y', strtotime($model->created_at));
                    return $date;
                })
                ->editColumn('from_website', function ($model) {
                    $date = $model->origin == 1 ? '<span class="badge badge-success">Yes</span>' : '<span class="badge badge-danger">No</span>';
                    return $date;
                })
                ->editColumn('action', function ($model) {
                    $action = '<button type="button" class="btn btn-sm btn-outline-success" id="content_managment" data-url="'. route('admin.report.contact.view', $model->id) .'"><i class="fa fa-eye"></i> View</button> <a href="'. route('admin.report.contact.delete', $model->id) .'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>';
                    return $action;
                })
				->addIndexColumn()
				->rawColumns(['action', 'date', 'from_website'])->make(true);
		}
	}
}
