<?php

    namespace Controller;

    use Model\Area;
    use Model\Cargo;
    use Parvus\Header;
    use Parvus\Input;

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
            $aEnumeracao['situacaoCurso']   = $enumeracao->situacaoCurso();

            foreach (Area::get()->toArray() as $aIndex => $aValor)
            {
                $aEnumeracao['areaPretensao'][$aValor['id']] = $aValor['nome'];
            }


            $this->view('cadastro/index',
                ['aEnumeracao' => $aEnumeracao]
            );

        }

        public final function actionGetRetornaCargo ()
        {

            $aCargo = Cargo::where('areaId', '=' , Input::get('areaId'))->get()->toArray();

            Header::JSON($aCargo);

        }

    }