<?php

class Test_Model
{
	private $data = array
	('new' => array('title' => 'New Website', 'content' => 'Welcome to the site!'),
	 'mvc' => array('title' => 'PHP MVC Framework', 'content' => 'works good'),
	 'default' => array('title' => 'Default Title', 'content' => 'default content'));
	
	public function get_data($title)
	{
		if(! array_key_exists($title, $this->data))
		{ $title = "default"; }
		$retData = $this->data[$title];
		return $retData;
	}
}

?>