@extends('base/body')

@section('corpo')

    <div class="container">

        <form>

            {{-- Informações Básicas - Inicio --}}
            <fieldset>

                <legend>Informações básicas</legend>

                <div class="col-xs-12 col-md-8 col-lg-8">

                    <div class="form-group">

                        <label for="nome-completo">Nome Completo:</label>
                        <input class="form-control" id="nome-completo" required>

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="cpf">CPF:</label>
                        <input class="form-control cpf" id="cpf" placeholder="Certificado digital pessoal física" required>

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="email">E-mail:</label>
                        <input class="form-control" id="email" placeholder="Endereço eletrônico" required>

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="telefone">Telefone/Celular:</label>
                        <input class="form-control telefone" id="telefone" placeholder="Fone para contato" required>

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="data-nascimento">Data de nascimento:</label>
                        <input class="form-control date" id="data-nascimento" required>

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="rg">RG:</label>
                        <input class="form-control" id="rg" placeholder="Registro Civil">

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="estado-civil">Estado civil:</label>

                        <select class="form-control" id="estado-civil">

                            <option value="">-- Selecione --</option>
                            @foreach($aEnumeracao['estadoCivil'] as $index => $value)
                                <option value="{{ $index }}">{{ $value }}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="naturalidade">Naturalidade:</label>
                        <input class="form-control" id="naturalidade" placeholder="Local de nascimento">

                    </div>

                </div>

            </fieldset>
            {{-- Informações básicas - Fim --}}

            {{-- Endereço - Inicio --}}
            <fieldset>

                <legend>Endereço</legend>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="cep">CEP:</label>
                        <input class="form-control cep" id="cep" placeholder="Código de endereço postal">

                    </div>

                </div>

                <div class="col-xs-12 col-md-8 col-lg-8">

                    <div class="form-group">

                        <label for="endereco">Endereço:</label>
                        <input class="form-control" id="endereco">

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="numero">Número:</label>
                        <input class="form-control" id="numero">

                    </div>

                </div>


                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="bairro">Bairro:</label>
                        <input class="form-control" id="bairro">

                    </div>

                </div>


                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="complemento">Complemento:</label>
                        <input class="form-control" id="complemento">

                    </div>

                </div>

                <div class="col-xs-12 col-md-6 col-lg-6">

                    <div class="form-group">

                        <label for="cidade">Cidade:</label>
                        <input class="form-control" id="cidade">

                    </div>

                </div>

                <div class="col-xs-12 col-md-6 col-lg-6">

                    <div class="form-group">

                        <label for="uf">UF:</label>

                        <select class="form-control" id="uf">

                            <option value="">-- Selecione --</option>

                            @foreach($aEnumeracao['uf'] as $index => $label)
                                <option value="{{ $index }}">{{ $label }}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

            </fieldset>
            {{-- Endereço - Fim --}}

            {{-- Cursos - Inicio --}}
            <fieldset>

                <legend> Conhecimento e cursos</legend>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="formacao-escolar">Formação escolar:</label>

                        <select class="form-control" id="formacao-escolar">

                            <option value="">-- Selecione --</option>

                            @foreach($aEnumeracao['formacaoEscolar'] as $index => $label)
                                <option value="{{ $index }}">{{ $label }}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="fase-escolar">Fase escolar:</label>

                        <select class="form-control" id="fase-escolar" disabled>

                            <option value="">-- Selecione --</option>

                            @foreach($aEnumeracao['faseEscolar'] as $index => $label)
                                <option value="{{ $index }}">{{ $label }}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="nome-curso">Nome do curso:</label>
                        <input class="form-control" id="nome-curso" placeholder="Nome da instituição de ensino">

                    </div>

                </div>

            </fieldset>
            {{-- Cursos - Fim --}}

            <div class="col-xs-12 col-md-12 col-lg-12 text-center">

                <button type="submit" class="btn btn-success">Enviar</button>

            </div>

        </form>

    </div>

    @section('javascript')

        <script>

            var faseEscolar     = $('#fase-escolar');

            /** Ativação campo de fase */
            $('#formacao-escolar').change(function()
            {

                if ($(this).val())
                {
                    faseEscolar.attr('disabled', false);
                }
                else
                {
                    faseEscolar.attr('disabled', true);
                    faseEscolar.val('');
                }

            });

            /**
             * Retorna informações de endereço
             */
            $('#cep').change(function()
            {

                if ($(this).val().replace(/[^0-9]/, '').length === 8)
                {

                    ajax('https://viacep.com.br/ws/'+$(this).val()+'/json/', null, function (retorno) {

                        $('#endereco').val(retorno.logradouro);
                        $('#complemento').val(retorno.complemento);
                        $('#bairro').val(retorno.bairro);
                        $('#cidade').val(retorno.localidade);
                        $('#uf').val(retorno.uf);
                    });

                }


            });

        </script>

    @endsection

@endsection