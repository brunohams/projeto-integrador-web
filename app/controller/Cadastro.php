<?php

    namespace Controller;

    class Cadastro extends Base
    {
        protected $session = false;

        public final function actionGetIndex()
        {

            $enumeracao = new Enumeracao();

            $aEnumeracao['uf']              = $enumeracao->uf();
            $aEnumeracao['estadoCivil']     = $enumeracao->estadoCivil();
            $aEnumeracao['formacaoEscolar'] = $enumeracao->formacaoEscolar();
            $aEnumeracao['faseEscolar']     = $enumeracao->faseEscolar();

            $this->view('cadastro/index',
                ['aEnumeracao' => $aEnumeracao]
            );

        }

    }