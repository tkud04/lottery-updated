<?php
namespace App\Helpers\Contracts;

Interface HelperContract
{
        public function sendEmail($to,$subject,$data,$view,$type);
        public function createClient($data);
        public function createClientData($data);
        public function getRegistrationNumber();
        public function getReferenceNumber();      
}
 ?>