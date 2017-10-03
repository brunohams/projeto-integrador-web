$(function ()
{

    /**
     * Máscaras
     */
    $('.date').mask('00/00/0000');

    /** PT-BR para datepicker **/
    jQuery(function($){
        $.datepicker.regional['pt-BR'] = {
            closeText: 'Fechar',
            prevText: '&#x3c;Anterior',
            nextText: 'Pr&oacute;ximo&#x3e;',
            currentText: 'Hoje',
            monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
                'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
                'Jul','Ago','Set','Out','Nov','Dez'],
            dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
            dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 0,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''};
        $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    });

    /**
     * Inicializa datepicker
     */
    $('#ano').datepicker({
        locale: 'pt-BR'
    });

    var formulario = $('form');

    /** Ao dar submit no form */
    formulario.submit(function (evento)
    {

        /** Cancela o redirect */
        evento.preventDefault();

        /** Define variaveis */
        var resultado   = $('textarea');

        var titulo      = $('#titulo').val();
        var subtitulo   = $('#subtitulo').val();
        var ano         = $('#ano').val();
        var endereco    = $('#endereco').val();
        var autor      = '';

        var aNomeFormatado = [];
        var aPreposicao = ["das", "dos", "de", "da"];
        /** Limpa campo */
        resultado.val('');

        /** Varre os campos de autores */
        $.each($('[data-class=autor]').find('input'), function (index, item)
        {

            /** Explode o nome por espacos */
            var aNome = $(item).val().split(' ');

            /** Busca o último elemento do array de nome */
            var sobrenome = aNome.slice(-1).pop();

            /** Remove o último elemento do array de nome */
            aNome.splice(-1,1);

            $.each(aNome, function (index, item)
            {

                /** Remove a preposicao **/
                if (aPreposicao.indexOf(item) !== -1)
                {

                    aNome.splice(index,1);

                }


            });

            /** Mescla os nomes restantes do array */
            var nome = aNome.join();

            /** Adiciona ao array dos nomes da maneira formatada */
            aNomeFormatado.push(sobrenome.toUpperCase()+', '+nome);

        });

        /** Explode pelo número de autores */
        autor = aNomeFormatado.join('; ');

        resultado.val('Referência: '+autor+'. '+titulo+': '+subtitulo+'. Disponível em :<'+endereco+'>. Acesso em '+ano+'.');

    })


});


/**
 * Adiciona um novo campo de autor
 */
function adicionaAutor()
{

    var autor = $('#div-autor');

    /** Permite no máximo 3 autores */
    if ($('[data-class="autor"]').length < 3)
    {

        /** Copia a div de autor */
        autor.after('<div class="col-xs-12 col-md-12 col-lg-12">'+autor.html()+'</div>');

        /** Varre as divs e seta os valores */
        $('[data-class="autor"]').each(function (index, item)
        {

            var numeracao = (index + 1);

            $(item).find('input').prop('id', 'autor'+numeracao);
            $(item).find('input').prop('placeholder', 'Nome do autor '+numeracao);

            $(item).find('label').html('Autor '+numeracao);

        });

    }
    else
    {

        alert('Máximo de autores já adicionados!');

    }


}

