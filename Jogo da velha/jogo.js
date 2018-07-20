var rodada = 1;

var matriz_jogo = Array(3);

$(document).ready( function() {
    $('#btn-iniciar-jogo').click(function(){

        //Valida os apelidos dos jogadores
        if($('#apelido-jogador1').val() == ''){
            alert('Apelido do jogador 1 não foi preenchido!');
            return false;
        }

        if($('#apelido-jogador2').val() == ''){
            alert('Apelido do jogador 2 não foi preenchido!');
            return false;
        }
        
        //Exibindo os apelidos no palco do jogo
        $('#nome-jogador1').html($('#apelido-jogador1').val());
        $('#nome-jogador2').html($('#apelido-jogador2').val());

        //Alterando a vizualização das divs
        $('#pagina-inicial').hide();
        $('#palco-jogo').show();
    });

    $('.jogada').click(function(){
        var id_campo_clicado = this.id;
    
        jogada(id_campo_clicado);
    });

    function jogada(id){
        var icone = '';
        var ponto = 0;

        if((rodada % 2) == 1){
            icone = 'url("imagens/marcacao_1.png")';
            ponto = -1;
        } else {
            icone = 'url("imagens/marcacao_2.png")';
            ponto = 1;
        }

        rodada++;

        $('#'+id).css('background-image', icone);
    }
});

