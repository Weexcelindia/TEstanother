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

		/*DELETE QUERY*/
		
		$log->remove($data = array("firstname" => "rajarshiroy"));
		
	

	}

}