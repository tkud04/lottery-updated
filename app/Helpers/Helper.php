<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth; 
use App\News;
use App\Comments;
use App\Uploads;

class Helper implements HelperContract
{

          /**
           * Sends an email(blade view or text) to the recipient
           * @param String $to
           * @param String $subject
           * @param String $data
           * @param String $view
           * @param String $type (default = "view")
           **/
           function sendEmail($to,$subject,$data,$view,$type="view")
           {
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($to,$subject){
                           $message->from('postmaster.richmama@gmail.com',"Arrahmsheed Solutions");
                           $message->to($to);
                           $message->subject($subject);
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject){
                           $message->from('postmaster.richmama@gmail.com',"Arrahmsheed Solutions");
                           $message->to($to);
                           $message->subject($subject);
                     });
                   }
           }
           
           
           
           function getUploads(){
              $ret = [];
              $uploads = Uploads::all();
              #dd($uploads);
              
              
            foreach($uploads as $u){
            $handle = null; $fn = null; $temp = array("id" => $u->id, "email" => $u->email,"full_name" => $u->full_name);
            
            $arr = [ "o_level" => $u->o_level,
                                        "birth_cert" => $u->birth_cert,
                                        "lg_id" => $u->lg_id,
                                        "testimonial" => $u->testimonial,
                                        "passport" => $u->passport,
                                        "med_cert" => $u->med_cert];	
                                        
            foreach($arr as $key => $value){
             $final = "Not Found";
            if(file_exists(public_path("documents/").$value)) 
             {
                if ($handle = opendir(public_path("documents/").$value)) {
                  /* This is the correct way to loop over the directory. */
                while (false !== ($entry = readdir($handle))) {    $fn = $entry;          }
                }
               closedir($handle);
               $final = "documents/".$value."/".$fn;
             } 
            $temp[$key] = $final;
           } 
           array_push($ret, $temp);
          } 
           
          # dd($ret);
           return $ret;
           }           
        
        
           function getComments($p){
              $ret = [];
              $comments = Comments::where('post_id', $p)->get();
              #dd($comments);
              
              
            foreach($comments as $c){
            $temp = array();
            $temp["name"] = $c->name;
            $temp["email"] = $c->email;
            $temp["comment"] = $c->comment;
            $temp["date"] = Carbon::parse($c->created_at)->format("jS F Y, h:i A");
            array_push($ret, $temp);
           } 
           
          
           
          # dd($ret);
           return $ret;
           }           
                
   
}
?>