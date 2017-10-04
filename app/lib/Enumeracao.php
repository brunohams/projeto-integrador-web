<?php
	namespace Controller;

	class Enumeracao
	{

        /**
         * Lista de estados brasileiros
         * @return array
         */
	    public final function uf ()
        {
            $aUF =
            [
                'AC'=>'Acre',
                'AL'=>'Alagoas',
                'AP'=>'Amapá',
                'AM'=>'Amazonas',
                'BA'=>'Bahia',
                'CE'=>'Ceará',
                'DF'=>'Distrito Federal',
                'ES'=>'Espírito Santo',
                'GO'=>'Goiás',
                'MA'=>'Maranhão',
                'MT'=>'Mato Grosso',
                'MS'=>'Mato Grosso do Sul',
                'MG'=>'Minas Gerais',
                'PA'=>'Pará',
                'PB'=>'Paraíba',
                'PR'=>'Paraná',
                'PE'=>'Pernambuco',
                'PI'=>'Piauí',
                'RJ'=>'Rio de Janeiro',
                'RN'=>'Rio Grande do Norte',
                'RS'=>'Rio Grande do Sul',
                'RO'=>'Rondônia',
                'RR'=>'Roraima',
                'SC'=>'Santa Catarina',
                'SP'=>'São Paulo',
                'SE'=>'Sergipe',
                'TO'=>'Tocantins'
            ];

            return $aUF;

        }

        /**
         * Lista de estado civil
         * @return array
         */
        public final function estadoCivil ()
        {

            $aEstadoCivil =
            [
                'solteiro'      =>  'Solteiro',
                'casado'        =>  'Casado',
                'divorciado'    =>  'Divorciado'
            ];

            return $aEstadoCivil;

        }

        /**
         * Lista de formações escolares
         * @return array
         */
        public final function formacaoEscolar ()
        {

            $aFormacaoEscolar =
            [
                'Ensino fundamental',
                'Ensino médio',
                'Graduação',
                'Pós-Graduação',
                'Mestrado',
                'Doutorado',
            ];

            return $aFormacaoEscolar;

        }

        /**
         * Lista de fase escolares
         * @return array
         */
        public final function faseEscolar ()
        {

            $aFaseEscolar =
            [
                'incompleto'    => 'Incompleto',
                'cursando'      => 'Cursando',
                'completo'      => 'Completo'
            ];

            return $aFaseEscolar;

        }

	}