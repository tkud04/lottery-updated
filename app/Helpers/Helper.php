<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth; 
use App\Clients;
use App\ClientData;
use App\Testimonials;

class Helper implements HelperContract
{

          /**
           * Sends an email(blade view or text) to the recipient
           * @param String $to
           * @param String $subject
           * @param String $data
           * @param String $view
           * @param String $image
           * @param String $type (default = "view")
           **/
           function sendEmail($to,$subject,$data,$view,$type="view")
           {
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($to,$subject){
                           $message->from('info@worldlotteryusa.com',"WorldLotteryUSA");
                           $message->to($to);
                           $message->subject($subject);
                          if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject){
                           $message->from('info@worldlotteryusa.com',"WorldLotteryUSA");
                           $message->to($to);
                           $message->subject($subject);
                           if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }
           }
           
           
           function createClient($data)
           {
           	$ret = Clients::create(['fname' => $data['fname'], 
                                                      'lname' => $data['lname'],                                                      
                                                      'phone' => $data['phone'], 
                                                      'email' => $data['email'], 
                                                      'agent' => "", 
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
                                                      'irs' => "", 
                                                      'rf' => "", 
                                                      'bn' => "", 
                                                      'wn' => "", 
                                                      'sn' => "", 
                                                      'proof' => "", 
                                                    ]);
              return $rd;
          }
          
          function addTestimonial($data)
           {
           	$ret = Testimonials::create(['name' => $data['name'], 
                                                      'country' => $data['country'],                                                      
                                                      'content' => $data['content'], 
                                                      'url' => $data['url'], 
                                                       'title' => $data['title'], 
                                                        'img' => $data['img']
                                                      ]);
                                                      
                return $ret;
           } 
           
           function getTestimonials()
          {
          	$ret = [];
          	$t = Testimonials::all();
          	 if($t != null)
              {
              	foreach($t as $tales){
              	$temp = [];
              	$temp['title'] = $tales->title;
                  $temp['img'] = $tales->img;
                  $temp['name'] = $tales->name;
                  $temp['country'] = $tales->country;
                  $temp['url'] = $tales->url;
                  $temp['content'] = $tales->content;
                  array_push($ret, $temp);
                 } 
              }
              return $ret;
          }
          
          function getTestimonial($url)
          {
          	$temp = [];
          	$tales = Testimonials::where("url",$url)->first();
          	 if($tales != null)
              {
              	$temp['title'] = $tales->title;
                  $temp['img'] = $tales->img;
                  $temp['name'] = $tales->name;
                  $temp['country'] = $tales->country;
                  $temp['url'] = $tales->url;
                  $temp['content'] = $tales->content;              
              }
              return $temp;
          }
          
          
          function getIRSNumber()
          {
          	$length = 4;
          	$ret = openssl_random_pseudo_bytes($length, $cstrong);
              $ret = bin2hex($ret);
              $ret = $ret."-";
              return $ret;
          }
          
          function getReferenceNumber()
          {
          	$length = 4;
          	$ret = openssl_random_pseudo_bytes($length, $cstrong);
              $ret = bin2hex($ret);
              return $ret;
          }
          
          function getBatchNumber()
          {
          	$length = 5;
          	$ret = openssl_random_pseudo_bytes($length, $cstrong);
              $ret = bin2hex($ret);
              $ret = $ret."/".date("sms");
              return $ret;
          }
          
          function getWinningNumber()
          {
          	$length = 3;
          	$ret = openssl_random_pseudo_bytes($length, $cstrong);
              $ret = bin2hex($ret);
              return $ret;
          }
          
          function getSerialNumber()
          {
          	$length = 5;
          	$ret = openssl_random_pseudo_bytes($length, $cstrong);
              $ret = bin2hex($ret);
              return $ret;
          }
          
          
          function getClients()
          {
          	$ret = [];
          	$clients = Clients::all();
          	 if($clients != null)
              {
              	foreach($clients as $c){
              	$cd = ClientData::where("client_id", $c->id)->first();
              	$temp = [];
              	$temp['id'] = $c->id;
                  $temp['full_name'] = $c->fname." ".$c->lname;
                  $temp['email'] = $c->email;
                  $temp['phone'] = $c->phone;
                  $temp['agent'] = $c->agent;
                  $temp['gender'] = $c->gender;
                  $temp['salary'] = $cd->salary;
                  $temp['address'] = $cd->address;
                  $temp['city'] = $cd->city;
                  $temp['region'] = $cd->region;
                  $temp['postal'] = $cd->postal_code;
                  $temp['country'] = $cd->contact_country;
                  $temp['marital'] = $cd->marital_status;
                  $temp['kids'] = $cd->kids;
                  $temp['irs'] = $cd->irs;
                  $temp['rf'] = $cd->rf;
                  $temp['bn'] = $cd->bn;
                  $temp['wn'] = $cd->wn;
                  $temp['sn'] = $cd->sn;
                  array_push($ret, $temp);
                 } 
              }
              return $ret;
          }
          
          
          function deleteClient($id)
           {
           	$client = Clients::where("id", $id)->first();
           
               if($client != null)
               {
               	$client->delete();
                   $cd = ClientData::where("client_id", $id)->first();
                   if($cd != null) $cd->delete();
               } 
                                                      
           } 
   
}
?>