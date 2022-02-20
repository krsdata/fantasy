<?php
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Models\User; 
use Input;
use Validator;
use Auth;
use Paginate;
use Grids;
use HTML;
use Form;
use Hash;
use View;
use URL;
use Lang;
use Session; 
use Route;
use Crypt; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher; 
use App\Helpers\Helper;
use Modules\Admin\Models\Contact; 
use Modules\Admin\Models\Category;
use Modules\Admin\Models\DepositOffer;
use Response; 
use Modules\Admin\Http\Requests\DepositOfferRequest;
/**
 * Class AdminController
 */
class DepositOfferController extends Controller {
    /**
     * @var  Repository
     */

    /**
     * Displays all admin.
     *
     * @return \Illuminate\View\View
     */
    public function __construct(Contact $contact) { 
        $this->middleware('admin');
        View::share('viewPage', 'Campaign');
        View::share('sub_page_title', 'Deposit Offer');
        View::share('helper',new Helper);
        View::share('heading','Deposit Offer');
        View::share('route_url',route('depositOffer')); 
        $this->record_per_page = Config::get('app.record_per_page'); 
    }
   
    /*
     * Dashboard
     * */

    public function index(DepositOffer $depositOffer, Request $request) 
    { 
        $page_title = 'deposit Offer';
        $sub_page_title = 'View deposit Offer';
        $page_action = 'View deposit Offer'; 


        if ($request->ajax()) {
            $id = $request->get('id'); 
            $category = DepositOffer::find($id); 
            $category->status = $s;
            $category->save();
            echo $s;
            exit();
        }

        // Search by name ,email and group
        $search = Input::get('search');
        $status = Input::get('status');
        if ((isset($search) && !empty($search))) {

            $search = isset($search) ? Input::get('search') : '';
               
            $depositOffer = DepositOffer::where(function($query) use($search,$status) {
                        if (!empty($search)) {
                            $query->Where('deposit', 'LIKE', "%$search%");
                        }
                        
                    })->Paginate($this->record_per_page);
        } else {
            $depositOffer = DepositOffer::Paginate($this->record_per_page);
        }
         
        
        return view('packages::depositOffer.index', compact('depositOffer','page_title', 'page_action','sub_page_title'));
    }

    /*
     * create Group method
     * */

    public function create(DepositOffer $depositOffer) 
    {
        $page_title     = 'deposit Offer';
        $page_action    = 'Create depositOffer';
        $status         = [ 0=>'Select Reward Type',
                            1=>'Fixed',
                            2=>'Percentage'
                        ];
                      
        return view('packages::depositOffer.create', compact( 'depositOffer','status','page_title', 'page_action'));
    }

    

    /*
     * Save Group method
     * */

    public function store(Request $request, DepositOffer $depositOffer) 
    {   
        $time = date('h:i:s A');

        $start_date = $request->start_date;
        $end_date   = $request->end_date;
        
        $timestamp_sd  = strtotime($start_date);
        $timestamp_ed  = strtotime($end_date);

        $request->merge(['start_date'   =>  date('Y-m-d', $timestamp_sd)]); 
        $request->merge(['end_date'     =>  date('Y-m-d', $timestamp_ed)]);
        $request->merge(['start_time'   =>  $time]);
        $request->merge(['end_time'     =>  $time]);  
        $depositOffer->fill(Input::all()); 

        $depositOffer->save();   
         
        return Redirect::to(route('depositOffer'))
                            ->with('flash_alert_notice', 'New Offer  successfully created!');
    }

    /*
     * Edit Group method
     * @param 
     * object : $category
     * */

    public function edit($id) {
        $depositOffer = DepositOffer::find($id);
        $page_title     = 'depositOffer';
        $page_action    = 'Edit deposit Offer'; 

         $status         = [ 0=>'Select Reward Type',
                            1=>'Fixed',
                            2=>'Percentage'
                        ];
        return view('packages::depositOffer.edit', compact('depositOffer','status', 'page_title', 'page_action'));
    }

    public function update(Request $request, $id) {
        $depositOffer = DepositOffer::find($id);
        
        $time = date('h:i:s A');
        $start_date = $request->start_date;
        $end_date   = $request->end_date;
        
        $timestamp_sd  = strtotime($start_date);
        $timestamp_ed  = strtotime($end_date);

        $request->merge(['start_date'   =>  date('Y-m-d', $timestamp_sd)]); 
        $request->merge(['end_date'     =>  date('Y-m-d', $timestamp_ed)]);
        $request->merge(['start_time'   =>  $time]);
        $request->merge(['end_time'     =>  $time]);  
       
        $depositOffer->fill(Input::all()); 
        $depositOffer->save();  
       
        return Redirect::to(route('depositOffer'))
                        ->with('flash_alert_notice', 'Offer  successfully updated.');
    }
    /*
     *Delete User
     * @param ID
     * 
     */
    public function destroy($depositOffer) { 
        
        DepositOffer::where('id',$depositOffer)->delete();
        return Redirect::to(route('depositOffer'))
                        ->with('flash_alert_notice', 'Offer  successfully deleted.');
    }

    public function show($id) {
        $depositOffer = DepositOffer::find($id)->toArray();
        $page_title     = 'deposit Offer';
        $page_action    = 'Show deposit Offer'; 


 
        return view('packages::depositOffer.show', compact('depositOffer','page_title', 'page_action','id'));

    }

}
