<?php

class Firstcache extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('city');
		$this->load->driver('cache', array('adapter' => 'file', 'backup' => 'file'));
	}

	public function setcache(){
		
        echo 'Saving to the cache!<br />';
        $this->benchmark->mark('code_start');
        $foo = $this->city->get_city();
        var_dump(count($foo));
        $this->benchmark->mark('code_end');
        // Save into the cache for 5 minutes
        $this->cache->save('first', $foo, 300);
        echo $this->benchmark->elapsed_time('code_start', 'code_end');
		
	}

	public function is_suported(){
		var_dump($this->cache->file->is_supported());
	}

	public function getcache(){
		$this->output->cache(10);
		//$this->output->delete_cache();
		
		$this->benchmark->mark('code_start');
		$data['first'] = $this->cache->get('first');
		$this->load->view('showcache',$data);
		$this->benchmark->mark('code_end');
		echo $this->benchmark->elapsed_time('code_start', 'code_end');		
	}

	public function deletecache(){
		$this->cache->delete('first');
	}

	public function increment(){
		$this->cache->increment('first',1);
	}

	public function decrement(){
		$this->cache->decrement('first',1);
	}

	public function clean(){
		$this->cache->clean();
	}

	public function info(){
		var_dump($this->cache->cache_info());
	}

}