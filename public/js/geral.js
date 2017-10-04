$(function ()
{

    /**
     * Campos para mascarar
     */
    var data    = $('.date');
    var cep     = $('.cep');
    var fone    = $('.telefone');
    var cpf     = $('.cpf');

    /**
     * Máscaras
     */
    data.mask('00/00/0000');
    cep.mask('00000-000');
    fone.mask('00000-0000');
    cpf.mask('000.000.000-00');

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
    data.datepicker({
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
 * Funcao ajax
 */
function ajax(prUrl, prData, prFunction)
{

    $.ajax
    ({
        url     : prUrl,
        data    : prData,
        success : function (retorno)
        {
            return prFunction(retorno);
        }
    });

}
