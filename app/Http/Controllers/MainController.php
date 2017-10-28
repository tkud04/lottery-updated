<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use App\Clients;
use App\ClientData;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;            
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
    {
    	return view('index');
    }
    
    public function getApply(Request $request)
    {
    	$req = $request->all();
        $stage = isset($req["grepo"]) ? $req["grepo"] : "1";
        $com = "1"; $grapo = "";
        
        if($stage == "2"){
            $com = "2";
            if(Session::has('grapo')) $grapo = Session::get('grapo');
        } 
        
    	return view('apply', compact(['com','grapo']));
    }
    
    
        /**
	 * Handles admission application
	 *
	 * @return Response
	 */
	public function postApply(Request $request)
	{
           $req = $request->all();
           $stage = $req["grepo"];
          #dd($req);
               
          if($stage == "1")
         {    
                $validator = Validator::make($req, [
                             'fname' => 'required',
                             'lname' => 'required',
                             'phone' => 'required|numeric', 
                              'email' => 'required|email', 
                              'agent' => 'required|email',                               
                               'gender' => 'required', 
                                'birth-year' => 'required|numeric', 
                                'birth-month' => 'required|numeric', 
                                'birth-day' => 'required|numeric', 
                                 'city-birth' => 'required', 
                                  'birth-country' => 'required', 
                                  'native-country' => 'required', 
                                  'address' => 'required', 
                                   'city' => 'required', 
                                    'region' => 'required', 
                                     'postal-code' => 'required|numeric', 
                                    'contact-country' => 'required', 
                                     'marital-status' => 'required', 
                                      'kids' => 'required', 
                   ]);
         
                 if($validator->fails())
                  {
                       $messages = $validator->messages();
                      //dd($messages);
             
                      return redirect()->back()->withInput()->with('errors',$messages);
                 }
                
                 else
                 {
                 	$client = $this->helpers->createClient($req);
                     $req['client_id'] = $client->id;
                     $rd = $this->helpers->createClientData($req);
                     
                             Session::flash("apply-stage-1-status", "success");
                             Session::flash("grapo", $client->id);
                             $u = "apply/?grepo=2";
                            return redirect()->intended($u);                  
                     
                 }
                 
                 
         } #End stage 1
         
         else if($stage == "2")
         {
         	$validator = Validator::make($req, [
                             'grapo' => 'required',
                             'salary' => 'required',
                             'means-id' => 'required|image',     
                   ]);    

                 if($validator->fails())
                  {
                       $messages = $validator->messages();
                      //dd($messages);
             
                      return redirect()->back()->withInput()->with('errors',$messages);
                 }
                
                 else
                 {                 	
                     $client_id = $req["grapo"];
                     $c = Clients::where('id',$client_id)->first();
                     $rd = ClientData::where('client_id',$client_id)->first();
                     $rd->update(['salary' => $req["grapo"]]);
                     $rf = $this->helpers->getReferenceNumber();
                     $n = $c->fname." ".$c->lname;
                     
                     if($request->hasFile('means-id') && $request->file('means-id')->isValid())
                        {
 	                      $file = $request->file('means-id');
                           $ext = $file->getClientOriginalExtension();     
                           $dst = date("y_m_d")."_".$c->id.".".$ext;            
	
                          $destination = public_path("img/").$dst;
                          $file->move($destination);
                        } 

                             $this->helpers->sendEmail($c->agent,'Your Client Just Applied For Lottery',['name' => $n, 'phone' => $c->phone, 'email' => $c->email, 'means_id' => $destination],'emails.client_alert','view');
                             $this->helpers->sendEmail($c->email,'Your Application Was Successful! ',['name' => $n, 'agent' => $c->agent, 'number' => $rf],'emails.apply_alert','view');
                             
                             Session::flash("apply-stage-2-status", "success");
                            return redirect()->intended('apply');                  
                     
                 }                   
                   
         } #End stage 2
           
	}
    
    
    
    /**
	 * Handles contact messages
	 *
	 * @return Response
	 */
	
	public function postContact(Request $request)
	{
           $req = $request->all();
          # dd($req);
               
                $validator = Validator::make($req, [
                             'name' => 'required',
                             'email' => 'required|email',
                             'subject' => 'required',
                             'message' => 'required'
                   ]);
         
                 if($validator->fails())
                  {
                       $messages = $validator->messages();
                      //dd($messages);
             
                      return redirect()->back()->withInput()->with('errors',$messages);
                 }
                
                 else
                 {
                 	$this->helpers->sendEmail("kudayisitobi@gmail.com",$req['subject'],['name' => $req['name'], 'email' => $req['email'], 'subject' => $req['subject'], 'message' => $req['message']],'emails.contact','view');
                     Session::flash("contact-status", "success");
                     return redirect()->intended('/');                           
                 }
                 
                          
	}

}
