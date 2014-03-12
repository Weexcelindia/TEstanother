<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	//echo "<pre>"; print_r($this->password);
	{
			

		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function InsertVal() {
		/*Insert val*/
		$dbhost = 'localhost';
		$dbname = 'testmongodb';

		// Connect to test database
		$m = new Mongo("mongodb://$dbhost");
		$db = $m->$dbname;
		$log = $db->createCollection(
	    "update_table");
		/*Testing update*/
		
		/*Update VAl*/
		 $log->insert(array("firstname" => "Bob", "lastname" => "Jones", "uid" => "5650", "networks" => array("nid" => '1', "n_name" => "home", "n_ip" => "1.2.3.4", "n_status" => "1"), array("nid" => "3", "n_name" => "work", "n_ip" => "8.8.8.8", "n_status" => "0"), "hostnames" => array("hostname" => "ip.unotelly.com", "block" => "1"), array("hostname" => "nba.com", "block" => "0"), array("hostname" => "facebook.com", "block" => "1")));
		
		$newdata = array('$set' => array("firstname" => "rajarshiroy"));
		$update = $log->update(array("firstname" => "Bob"), $newdata);

		var_dump($log->findOne(array("firstname" => "Bob")));

		if($update == 1) {
			echo "<font color='red'>Data Updated Sucessfully</font>";
		}
		
	

	}

}