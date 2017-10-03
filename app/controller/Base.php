<?php
    namespace Controller;

    use Parvus\Redirect;

    class Base
    {
        protected $session = true;

        public function __construct()
        {
            $this->user = unserialize($_SESSION['user']);

            /** Validate session */
            if ($this->session && !$this->user)
            {
                Redirect::to();
            }
        }

        public final function view ($prView,$prArray = array())
        {
            $view = new \Parvus\View();

            print($view->render($prView,$prArray));
        }

    }