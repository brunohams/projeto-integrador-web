<?php

    namespace Controller;

    class Cadastro extends Base
    {
        protected $session = false;

        public final function actionGetIndex()
        {

            $this->view('cadastro/index');

        }

    }