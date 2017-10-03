@extends('base/body')

@section('corpo')

    <div class="container">

        <form>

            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="form-group">

                    <label for="nome-completo">Nome Completo:</label>
                    <input class="form-control" id="nome-completo" placeholder="Nome completo" required>

                </div>

            </div>

            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="form-group">

                    <label for="subtitulo">Subtítulo:</label>
                    <input class="form-control" id="subtitulo" placeholder="Subtítulo da obra" required>

                </div>

            </div>

            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="form-group">

                    <label for="ano">Ano:</label>
                    <input class="form-control date" id="ano" placeholder="Ano da obra" required>

                </div>

            </div>

            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="form-group">

                    <label for="endereco">Endereço eletrônico:</label>
                    <input class="form-control" id="endereco" placeholder="Website" required>

                </div>

            </div>

            <div id="div-autor" class="col-xs-12 col-md-12 col-lg-12">

                <div data-class="autor" class="form-group">

                    <label for="autor1">Autor:</label>
                    <input class="form-control" id="autor1" name="autor[]" placeholder="Nome do autor" required>

                </div>

            </div>

            <div class="col-xs-12 col-md-12 col-lg-12 text-center">

                <div class="form-group">

                    <label> </label>
                    <button id="adiciona" type="button" class="btn btn-success" onclick="adicionaAutor()">Adicionar autor</button>

                </div>

            </div>

            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="form-group">

                    <label for="autor1">Resultado:</label>
                    <textarea class="form-control" rows="5" readonly></textarea>

                </div>

            </div>

            <div class="col-xs-12 col-md-12 col-lg-12 text-center">

                <button type="submit" class="btn btn-success">Gerar referência</button>

            </div>

        </form>

    </div>

@endsection