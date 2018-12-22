<?php
namespace xinde\exception;
class Exception extends \Exception
 {
      public function errorMessage()
      {        
            //error message
            $errorMsg = '<h2>ERROR: '.$this->getMessage().'</h1><hr />发生文件：'.$this->getFile().'<br />发生行数：'.$this->getLine();
            return $errorMsg; 
       }   
 }