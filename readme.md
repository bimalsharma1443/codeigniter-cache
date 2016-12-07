# Implementation of Cache in codeigniter.

## Load cache drive in codeigniter 
		$this->load->driver('cache', array('adapter' => 'file', 'backup' => 'file'));
### **if you are using memcached in codeigniter. You need to first install memcached in your machine**
* Step 1. 
	$ sudo apt-get install memcached 
* Step 2. 
	$ sudo apt-get install php5-memcached 
* Step 3. 
	$ sudo /etc/init.d/apache2 restart 



 
  
