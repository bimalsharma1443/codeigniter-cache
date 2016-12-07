# Implementation of Cache in codeigniter.

## Load cache drive in codeigniter 
		$this->load->driver('cache', array('adapter' => 'file', 'backup' => 'file'));
### For memcached in codeigniter. You need to first install memcached in your machine.
* Step 1. 
		$ sudo apt-get install memcached 
* Step 2. 
		$ sudo apt-get install php5-memcached 
* Step 3. 
		$ sudo /etc/init.d/apache2 restart
		
## For query caching.
* **Goto application/config/database.php and mension cache_on status and path**
					
		cache_on' => TRUE,
		'cachedir' => '/var/www/html/pusher/application/cache/',
		
* **Mension cache on and off in model select query**
		
		$this->db->cache_on();
    			$result=$this->db->get('city');
    			return $result->result();
    		$this->db->cache_off();
## For view page caching
* **for view page mension below code at the top of the action function with refresh interval time**

		$this->output->cache(10);
		
* **Disable caching from the page, mension below code at the top of action function**
		
		$this->output->delete_cache();
		
 
