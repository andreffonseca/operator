<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Operator\System;

use Operator\System\Alert;
/**
 * Description Process
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


class Process {
    
    /**
     *
     * @var type 
     */
    private $alertsObjList;
    
    private $alertConfigTable;

    private $alertsList;
    /**
     * 
     */
    public function __construct() {
        
    }
    
    /**
     * 
     */
    public function processList() {
        
        try {
            
            $currentRecord = array(
                'host' => '',
                'ip' => '',
                'alert_id' => '');
            
            $control = 1;
            
            for ($idx = 0; $idx < count($this->alertsList); $idx ++ ) {
                
                $alert = new Alert($this->alertsList[$idx]);
                // If the alert is not the first on the list, lets
                // check if this is alert is not the same as
                // the one before
                if ($idx > 0) {
                    
                }
                
                // Check if we have a special Alert                   
                
                
            }
            
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
    }
    
    /**
     * This function will check against the database
     * If this ALERT_ID is already with one
     * operator and if it will assign or not
     */
    private function check(){
        
    }
    
    /**
     * 
     */
    private function crossCheck() {
        
    }
    
    
    /******************************************************/

    function setAlertsList($alertsList) {
        $this->alertsList = $alertsList;
    }
    
    function setAlertConfigTable($alertConfigTable) {
        $this->alertConfigTable = $alertConfigTable;
    }


}
