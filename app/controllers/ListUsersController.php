<?php
use Phalcon\Mvc\Controller;
class ListUsersController extends Controller
{
	
	public function ListUsersAction(){

		$displayAll=new Users();

			$success=$displayAll->save(

   				$this->request->retrieve();
			array('First_name','Second_name', 'email', 'Gender',
				'Education','Skills'));


if ($success) {
			echo "Thanks for registering!";
			$success->display_as_html_table();
		} else {
			echo "Sorry, the following problems were generated: ";
		
		}
	}
}
