<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use App\News;
use App\Comments;
use App\Uploads;
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
    
    public function getApply()
    {
    	return view('apply');
    }
    
    
        /**
	 * Handles admission application
	 *
	 * @return Response
	 */
	public function postApply(Request $request)
	{
           $req = $request->all();
          dd($req);
                    
                $validator = Validator::make($req, [
                             'name' => 'required',
                             'phone' => 'required|numeric', 
                              'email' => 'required|email', 
                               'o-level' => 'required|image', 
                                'birth-cert' => 'required|image', 
                                 'lg-id' => 'required|image', 
                                  'passport' => 'required|image', 
                                   'tmonial' => 'image', 
                                    'med-cert' => 'required|image', 
                   ]);
         
                 if($validator->fails())
                  {
                       $messages = $validator->messages();
                      //dd($messages);
             
                      return redirect()->back()->withInput()->with('errors',$messages);
                 }
                
                 else
                 {
                 	$n = $req['name']; $email = $req['email']; $phone = $req['phone']; 
                     $nr = explode(" ",$n); 
                     $name = $nr[0]; if(count($nr) > 2) $name = $nr[0]."_".$nr[1];
                     
                 	if($request->hasFile('o-level') && $request->file('o-level')->isValid() && $request->hasFile('birth-cert') && $request->file('birth-cert')->isValid() && $request->hasFile('lg-id') && $request->file('lg-id')->isValid() && $request->hasFile('passport') && $request->file('passport')->isValid() && $request->hasFile('med-cert') && $request->file('med-cert')->isValid())
                        {
 	                      $o_level = $request->file('o-level');
                           $birth_cert = $request->file('birth-cert');
                           $lg_id = $request->file('lg-id');
                           $tmonial = null;
                           if($request->hasFile('tmonial') && $request->file('tmonial')->isValid()) $tmonial = $request->file('tmonial');
                           $passport = $request->file('passport');
                           $med_cert = $request->file('med-cert');
                           $arr = ["o_level" => $o_level,
                                        "birth_cert" => $birth_cert,
                                        "lg_id" => $lg_id,
                                        "tmonial" => $tmonial,
                                        "passport" => $passport,
                                        "med_cert" => $med_cert
                                       ];
                                       
                                        $arr2 = [
                                        "email" => $email,
                                         "full_name" => $name,
                                          "o_level" => "",
                                        "birth_cert" => "" ,
                                        "lg_id" => "" ,
                                        "testimonial" => "",
                                        "passport" => "" ,
                                        "med_cert" => "" 
                                       ];
                            
                            foreach($arr as $key => $value)
                            {
                            	if($key == 'tmonial' && $value == null){} 
                                else{
                            	$ext = $value->getClientOriginalExtension();   
                                $dst = date("y_m_d")."_".$name."_".$key;   
                                 $destination = public_path("documents/").$dst;
                                 $value->move($destination);
                                 
                                 if($key == 'tmonial') $arr2["testimonial"] = $dst;
                                 else $arr2[$key] = $dst;
                                } 
                            }
                            
                            Uploads::create($arr2);
                            
                             $this->helpers->sendEmail($email,'Complete Your Application on Arrahmsheed.com',['name' => $n],'emails.apply','view');
                             $this->helpers->sendEmail("kudayisitobi@gmail.com",'New Request For Admission on Arrahmsheed.com',['name' => $n, 'phone' => $phone, 'email' => $email],'emails.apply_alert','view');
                             $this->helpers->sendEmail("info@arrahmsheed.com",'New Request For Admission on Arrahmsheed.com',['name' => $n, 'phone' => $phone, 'email' => $email],'emails.apply_alert','view');
                             
                             Session::flash("apply-status", "success");
                            return redirect()->intended('/');            
                        }                         
                     
                 }
           
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
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getBlog($title="")
    {
    	$pics = ["gallery1.jpg","gallery4.jpg","gallery7.jpg",
                      "gallery21.jpg","gallery10.jpg","gallery11.jpg",
                       "gallery12.jpg","gallery13.jpg","gallery14.jpg","gallery15.jpg",
                       "gallery16.jpg","gallery17.jpg","gallery18.jpg","gallery19.jpg",
                      "gallery20.jpg"
                       ];
                       
         shuffle($pics);
         
    	if($title ==""){
    	    $news = News::all();
            $posts = array();
            
            foreach($news as $n)
            {
            	$temp = array();
                $temp['id'] = $n->id;
                $temp['short_text'] = $n->short_text;
                $temp['url'] = $n->url;
                $temp['title'] = $n->title;
                shuffle($pics);
                $temp['pic'] = asset("img/".$pics[0]);
                $temp['date'] = Carbon::parse($n->created_at)->format("jS F Y, h:i A");
                $temp['comments'] = $this->helpers->getComments($n->id);
                array_push($posts, $temp);
            } 
            $posta = $posts;
            shuffle($posta);
            $sp = $posta[0];
    	    return view('blog', compact(['news','pics','posts','sp']));
        } 
        else{
        	$b = News::where('url', $title)->first();
            $d = ""; $comments = array();
            if($b != null){
            	$d = Carbon::parse($b->created_at)->format("jS F Y, h:i A");
                 $comments = $this->helpers->getComments($b->id);
             } 
            $p = asset("img/".$pics[0]);
            
        	return view('article', compact(['b', 'd', 'p', 'comments']));
        }   	
    }
    
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getUploads()
    {
    	$uploads = [];
        $uploads = $this->helpers->getUploads();
        return view('uploads', compact(['uploads']));
    }
    
    public function deleteUploads()
    {
    	$uploads = Uploads::all();
        foreach($uploads as $u)
         {
         	$u->delete();
         } 
        return redirect()->intended('/');
    }
    
    
    /**
	 * Shows form to add  News.
	 *
	 * @return Response
	 */
    public function getAddNews()
    {
     	return view('add_news');
    }         


/**
	 * Adds a news item.
	 *
	 * @return Response
	 */
    public function postAddNews(Request $request)
    {       
               $req = $request->all(); 
               
               $validator = Validator::make($req, [
                             'title' => 'required|min:5',
                             'content' => 'required'
               ]);    
           
            if($validator->fails())
           {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
           }
           
           else
           {
           	$req['url'] = strtolower($req['url']);
           	$news = News::create($req);
                //dd($ret);
               Session::flash("add-news-status","success");
               return redirect()->intended('add-news');
           }
    }     
    
    
        /**
	 * Handles blog comments
	 *
	 * @return Response
	 */
	
	public function postComment(Request $request)
	{
           $req = $request->all();
          # dd($req);
               
                $validator = Validator::make($req, [
                             'name' => 'required',
                               'post_id' => 'required',
                             'email' => 'required|email',
                             'comment' => 'required'
                   ]);
         
                 if($validator->fails())
                  {
                       $messages = $validator->messages();
                      //dd($messages);
             
                      return redirect()->back()->withInput()->with('errors',$messages);
                 }
                
                 else
                 {
                 	Comments::create($req);
                   $post = News::where('id', $req['post_id'])->first();
                   $title = "New comment on Post: ".$post->title;
                     $this->helpers->sendEmail($req['email'],$title,['name' => $req['name'], 'email' => $req['email'], 'post' => $post, 'comment' => $req['comment']],'emails.comment','view');
                      $this->helpers->sendEmail("info@arrahmsheed.com",$title,['name' => $req['name'], 'email' => $req['email'], 'post' => $post, 'comment' => $req['comment']],'emails.comment','view');
                     Session::flash("add-comment-status", "success");
                     return redirect()->back();                           
                 }
                 
                          
	}

}
