<?php
class Controller {
	private $request = null;
	private $template = '';
	private $view = null;

	/**
	 * Konstruktor, erstellet den Controller.
	 *
	 * @param Array $request
	 *        	Array aus $_GET & $_POST.
	 */
	public function __construct($request) {
		$this->view = new View ();
		$this->request = $request;
		$this->template = ! empty ( $request ['page'] ) ? $request ['page'] : 'password';
	}

	/**
	 * Methode zum anzeigen des Contents.
	 *
	 * @return String Content der Applikation.
	 */
	public function display() {
		$view = new View ();
		switch ($this->template) {
			case 'settings' :
				$view->setTemplate ( 'settings' );
				break;
			case 'words' :
				$words = Model::getWords ();
				$view->setTemplate ( 'words' );
				$view->assign ( 'words', $words );
				break;
			case 'password' :
			default :
				$password = Model::getPasswort ();
				$length = Model::getPasswortLength ();
				$view->setTemplate ( 'password' );
				$view->assign ( 'password', $password );
				$view->assign ( 'length', $length );
		}
		$this->view->setTemplate ( '_main' );
		$this->view->assign ( 'main_title', 'Passwortgenerator' );
		$this->view->assign ( 'main_footer', '&copy; 2019 Lars Bleckwenn' );
		$this->view->assign ( 'main_content', $view->loadTemplate () );
		return $this->view->loadTemplate ();
	}
}
?>