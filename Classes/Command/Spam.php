<?php
// Namespace
namespace Command;

class Spam extends \Library\IRC\Command\Base {
    /**
     * The command's help text.
     *
     * @var string
     */
	 public $spam = true; 
    protected $help = 'Spam the chat with adds';
    
    protected $usage = 'spam';
	
    public function command() {
do {
    $this->say($_SESSION['SpamMessage']);
	$this->say($_SESSION['SpamMessage']);
	sleep(1);
} while (strtolower($_SESSION['SpamCommand']) == "true" or strtolower($_SESSION['SpamCommand']) == "enable" or strtolower($_SESSION['SpamCommand']) == "enabled");

        
    }
    }

?>