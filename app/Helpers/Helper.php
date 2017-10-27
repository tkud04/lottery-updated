<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth; 
use App\Clients;
use App\ClientData;

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
           
           
           function createClient($data)
           {
           	$ret = Clients::create(['fname' => $data['fname'], 
                                                      'lname' => $data['lname'],                                                      
                                                      'phone' => $data['phone'], 
                                                      'email' => $data['email'], 
                                                      'agent' => $data['agent'], 
                                                      'gender' => $data['gender']
                                                      ]);
                                                      
                return $ret;
           } 
           
           function createClientData($data)
          {
          	$rd = ClientData::create(['client_id' => $data['client_id'], 
                                                      'salary' => "", 
                                                      'means_id' => "", 
                                                      'birth_year' => $data['birth-year'], 
                                                      'birth_month' => $data['birth-month'], 
                                                      'birth_day' => $data['birth-day'], 
                                                      'city_birth' => $data['city-birth'], 
                                                      'birth_country' => $data['birth-country'], 
                                                      'native_country' => $data['native-country'], 
                                                      'address' => $data['address'], 
                                                      'city' => $data['city'], 
                                                      'region' => $data['region'], 
                                                      'postal_code' => $data['postal-code'], 
                                                      'contact_country' => $data['contact-country'], 
                                                      'marital_status' => $data['marital-status'], 
                                                      'kids' => $data['kids'], 
                                                    ]);
              return $rd;
          }
          
          function getReferenceNumber()
          {
          	$length = 12;
          	$ret = openssl_random_pseudo_bytes($length, $cstrong);
              $ret = bin2hex($ret);
              return $ret;
          }
   
}
?>