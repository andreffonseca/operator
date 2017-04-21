<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Operator\System;

/**
 * Description AlertException
 * 
 * Long Description
 *
 * @package
 * @category
 * @version 1.0.a
 * 
 * @author Andre Fonseca <andre.fg.fonseca@gmail.com>
 * @since 1.0.a
 * 
 */
class AlertException {
    
    const NO_ALERT_ID_DEFINED = 0;
    
    const NO_HOST_DEFINED = 1;
    
    const NO_IP_DEFINED = 2;
    
    const UNKNOWN_ERROR = 9999;


    function __construct($exceptionCode = self::UNKNOWN_ERROR) {
        
        switch ($exceptionCode) {
            case self::NO_ALERT_ID_DEFINED:
                throw new \Exception($message='No Alert ID Found ()!!',$code=0); 
                exit();
                break;
            
            case self::NO_HOST_DEFINED:
                throw new \Exception($message='No HOST Found on ALERT ()!!',$code=0);    
                exit();
                break;
            
            case self::NO_HOST_DEFINED:
                throw new \Exception($message='No IP Found on ALERT ()!!',$code=0);    
                exit();
                break;

            default:
                break;
        }
        
    }
}
