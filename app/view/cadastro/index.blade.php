@extends('base/body')

@section('corpo')

    <div class="container">

        <form>

            {{-- Informações Básicas - Inicio --}}
            <fieldset>

                <legend>Informações básicas</legend>

                <div class="col-xs-12 col-md-6 col-lg-6">

                    <div class="form-group">

                        <label for="codigo">Código:</label>
                        <input class="form-control" id="codigo" required>

                    </div>

                </div>

                <div class="col-xs-12 col-md-6 col-lg-6">

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

                        <label for="sexo">Sexo:</label>

                        <select class="form-control" id="estado-civil">

                            <option value="">-- Selecione --</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>

                        </select>
                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="nacionalidade">Nacionalidade:</label>
                        <input class="form-control" id="nacionalidade" placeholder="Local de nascimento">

                    </div>

                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="deficiencia">Deficiência:</label>
                        <input class="form-control" id="deficiencia" placeholder="Deficiência">

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

            <fieldset>

                <legend>Pretensão</legend>

                <div class="col-xs-12 col-md-6 col-lg-6">

                    <div class="form-group">

                        <label for="area-pretensao">Área desejada:</label>

                        <select class="form-control" id="area-pretensao">

                            <option value="">-- Selecione --</option>

                            @foreach($aEnumeracao['areaPretensao'] as $index => $label)
                                <option value="{{ $index }}">{{ $label }}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-xs-12 col-md-6 col-lg-6">

                    <div class="form-group">

                        <label for="cargo-pretensao">Cargo desejado:</label>

                        <select class="form-control" id="cargo-pretensao" disabled>

                            <option value="">-- Selecione --</option>

                        </select>

                    </div>

                </div>

            </fieldset>

            {{-- Cursos - Inicio --}}
            <fieldset>

                <legend> Instituição escolar </legend>

                <div class="col-xs-12 col-md-6 col-lg-6">

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

                <div class="col-xs-12 col-md-6 col-lg-6">

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

                <div class="col-xs-12 col-md-6 col-lg-6">

                    <div class="form-group">

                        <label for="pretensao-salarial">Pretensão salarial:</label>
                        <input class="form-control" id="pretensao-salarial">

                    </div>

                </div>

                <div class="col-xs-12 col-md-6 col-lg-6">

                    <div class="form-group">

                        <label for="pretensao-beneficio">Pretensão benefícios:</label>
                        <input class="form-control" id="pretensao-beneficio">

                    </div>

                </div>

            </fieldset>

            <fieldset>

                <legend> Conhecimento e cursos </legend>

                <div id="div-nome-curso" class="col-xs-12 col-md-8 col-lg-8">

                    <div class="form-group">

                        <label for="nome-curso">Nome do curso:</label>
                        <input class="form-control" id="nome-curso" name="nome-curso" placeholder="Nome da instituição de ensino">

                    </div>

                </div>

                <div id="div-situacao-curso" class="col-xs-12 col-md-4 col-lg-4">

                    <div class="form-group">

                        <label for="situacao-curso">Situação:</label>

                        <select class="form-control" id="situacao-curso" name="situacao-curso">

                            <option value="">-- Selecione --</option>
                            @foreach($aEnumeracao['faseEscolar'] as $index => $label)
                                <option value="{{ $index }}">{{ $label }}</option>
                            @endforeach

                        </select>
                    </div>

                </div>

                <div id="div-descricao-curso" class="col-xs-12 col-md-12 col-lg-12">

                    <div class="form-group">

                        <label for="nome-curso">Descrição:</label>
                        <textarea class="form-control" id="descricao-curso" name="descricao-curso" style="min-width: 100%;max-width: 100%; min-height: 50px" placeholder="Descrição do curso"></textarea>

                    </div><br>

                </div>

                <div id="curso-append"></div>

                <div class="col-xs-12 col-md-12 col-lg-12 text-center">

                    <button id="adiciona-curso" type="button" class="btn btn-success" onclick="adicionaCurso()">Adicionar curso</button>

                </div>

            </fieldset>

            <fieldset>

                <legend>Experiências profissionais</legend>

                <div id="div-nome-empresa" class="col-xs-12 col-md-12 col-lg-12">

                    <div class="form-group">

                        <label for="nome-empresa">Nome da empresa:</label>
                        <input class="form-control" id="nome-empresa" name="nome-empresa" placeholder="Nome da empresa">

                    </div>

                </div>

                <div id="div-tempo-empresa" class="col-xs-12 col-md-6 col-lg-6">

                    <div class="form-group">

                        <label for="tempo-empresa">Tempo empregado:</label>
                        <input class="form-control" id="tempo-empresa" name="tempo-empresa" placeholder="Tempo empregado">

                    </div>

                </div>

                <div id="div-cargo-empresa" class="col-xs-12 col-md-6 col-lg-6">

                    <div class="form-group">

                        <label for="cargo-empresa">Cargo:</label>
                        <input class="form-control" id="cargo-empresa" name="cargo-empresa" placeholder="Cargo exercido">

                    </div>

                </div>

                <div id="div-observacao-empresa" class="col-xs-12 col-md-12 col-lg-12">

                    <div class="form-group">

                        <label for="observacao-empresa">Observacao:</label>
                        <textarea class="form-control" id="observacao-curso" name="observacao-curso" style="min-width: 100%;max-width: 100%; min-height: 50px" placeholder="Observação"></textarea>

                    </div><br>

                </div>

                <div id="empresa-append"></div>

                <div class="col-xs-12 col-md-12 col-lg-12 text-center">

                    <button id="adiciona-empresa" type="button" class="btn btn-success" onclick="adicionaEmpresa()">Adicionar emprego anterior</button>

                </div>

            </fieldset>
            <br><br>
            {{-- Cursos - Fim --}}

            <div class="col-xs-12 col-md-12 col-lg-12 text-center">

                <button type="submit" class="btn btn-success">Enviar</button>

            </div>

        </form>

    </div>

    @section('javascript')

        <script>

            var quantidadeCurso     = 0;
            var quantidadeEmpresa   = 0;
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

            $('#area-pretensao').change(function()
            {

                var cargoPretensao = $('#cargo-pretensao');

                if ($(this).val() === '')
                {
                    cargoPretensao.prop('disabled', true);
                    cargoPretensao.html('<option>-- Selecione --</option>');
                }
                else
                {

                    cargoPretensao.html('<option>-- Selecione --</option>');

                    ajax('cadastro/retorna-cargo', 'areaId='+$('#area-pretensao').val(), function(retorno)
                    {

                        cargoPretensao.prop('disabled', false);

                        $(retorno).each(function(index, item)
                        {

                            $('#cargo-pretensao').append('<option value="'+item.id+'" >'+item.nome+'</option>');

                        });

                    });

                }


            });

            function adicionaCurso()
            {

                if (quantidadeCurso >= 2)
                {
                    alert('Máximo de cursos adicionados');
                    return false;
                }

                $('#div-nome-curso, #div-situacao-curso, #div-descricao-curso').each(function(index, item)
                {
                    var clone = $(item).clone().addClass($(item).attr('class'));
                    var input = clone.find('input, select, textarea');

                    input.attr('name', input.attr('name')+quantidadeCurso);
                    input.attr('id', input.attr('id')+quantidadeCurso);

                    $('#curso-append').append(clone);

                });

                quantidadeCurso++;

            }

            function adicionaEmpresa()
            {

                if (quantidadeEmpresa >= 2)
                {
                    alert('Máximo de empresas anteriores');
                    return false;
                }

                $('#div-nome-empresa, #div-tempo-empresa, #div-cargo-empresa, #div-observacao-empresa').each(function(index, item)
                {
                    var clone = $(item).clone().addClass($(item).attr('class'));
                    var input = clone.find('input, select, textarea');

                    input.attr('name', input.attr('name')+quantidadeEmpresa);
                    input.attr('id', input.attr('id')+quantidadeEmpresa);

                    $('#empresa-append').append(clone);

                });

                quantidadeEmpresa++;

            }


        </script>

    @endsection

@endsection