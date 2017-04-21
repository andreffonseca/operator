<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Operator\System;

/**
 * Description Alert
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
class Alert {
    
    const NORMAL_PROCESS = 0;
    
    const HIGH_PRIORITY_ALERT = 1;
    
    const DO_NOT_AGGREGATE = 2;
    
    const IGNORE_ALERT = 100;
    
    /**
     * Hold the action Alert
     * 
     * @var type 
     */
    private $action;
    
    /**
     * Host of the Alert
     * @var type 
     */
    private $host;
    
    /**
     * IP Address for Alert
     * 
     * @var type 
     */
    private $ip;
    
    /**
     * Alert ID
     * 
     * @var type 
     */
    private $alert_id;
    
    
    public $alert;
    
    
    function __construct($alert) {
        
        $this->alert = $alert;
        
        $this->init();
    }
    
    private function init() {
        
        // Check alert id;
        if (isset($alert["alert_id"])){
            $this->alert_id = $alert["alert_id"];
        } else {
            throw new AlertException(AlertException::NO_ALERT_ID_DEFINED);
        }
        
        // Check Host
        if (isset($alert["host"])){
            $this->host = $alert["host"];
        } else {
            throw new AlertException(AlertException::NO_HOST_DEFINED);
        }
        
        // Check Host
        if (isset($alert["ip"])){
            $this->ip = $alert["ip"];
        } else {
            throw new AlertException(AlertException::NO_IP_DEFINED);
        }
        
        $this->action = $this->getAlertAction();
    }
    
    /***********************************************************************/
    
    private function getAlertAction() {
        
        $db = new \Operator\Database\Database();
        $connection = $db->init();
        
        
    }
    
    /***********************************************************************/
    
    function getAction() {
        return $this->action;
    }

    function getHost() {
        return $this->host;
    }

    function getIp() {
        return $this->ip;
    }

    function getAlert_id() {
        return $this->alert_id;
    }

}
