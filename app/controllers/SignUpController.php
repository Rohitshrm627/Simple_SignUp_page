<?php
use Phalcon\Mvc\Controller;
class SignUpController extends Controller
{
	public function indexAction()
	{

	}

public function registerAction()
	{
		$user = new Users();
		// Store and check for errors
		$success = $user->save(
			$this->request->getPost(),
			array('First_name','Second_name', 'email', 'Gender',
				'Education','Skills')
		);
		if ($success) {
			echo "Thanks for registering!";
		} else {
			echo "Sorry, the following problems were generated: ";
			foreach ($user->getMessages() as $message) {
				echo $message->getMessage(), "<br/>";
			}
		}
		$this->view->disable();
	}
}
