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




 
  
