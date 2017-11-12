<?php
class Cron{
	private $time;
	private $file;
	private $cron_file;
	private $cron_time;

	public static function App($file, $time){
		return new self($file, $time);
	}

	private function __construct($file, $time){
		$this->file = $file;
		$this->time = $time;
		$this->cron_file = "cron_data/cron_file";
		$this->cron_time = filemtime($this->cron_file);

		if(is_file($file)){
			$this->load_file();
		}else{
			$file();
		}
	}

	private function load_file(){
		if (time() - $this->cron_time >= ($this->time * 60)) {
	    	file_put_contents($this->cron_file,"");
		    include $this->file;
		}
		return true;
	}


}
?>