<?php

namespace idePad\Component\Action\application;

use PFC\WebApp\Component\ActionController;
use PFC\WebApp\AppLogin;
use PFC\WebApp\AppSess;

class login extends ActionController
{
    
   public function indexAction() 
   {      

        //do login if login form is submited
        $login = filter_input(INPUT_POST, 'login');
        $passw = filter_input(INPUT_POST, 'pwd');
        $pin = filter_input(INPUT_POST, 'pin');

        if($login && $passw && AppLogin::verify($login, $passw, $pin)) {
            AppLogin::setUserLoggedIn($login, $passw);    
            AppSess::set('pfc-login', true);
         
            $this->getResponse()
                ->setSucc(true);
     
        } elseif(AppLogin::isFreeForLoging()) {       
            $this->getResponse()
                ->setSucc(false)  
                //->setMsg('Succesfully saved')
                ->addData(['reason' => 'creditials']);
             
        } else {
            $this->getResponse()
                ->setSucc(false)  
                //->setMsg('Succesfully saved')
                ->addData([
                    'reason' => 'banned',
                    'bannedToTime' => \date('G:i:s', AppLogin::getBannedToTime()),
                        ]);
        }                                               
    }

}        


