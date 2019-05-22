$("#botao-placar").click(mostraPlacar);

function inserePlacar() {
    var corpoTabela = $(".placar").find("tbody");
    var usuario = "";
    var numPalavras = $(".contador-palavras").text();

    var linha = novaLinha(usuario, numPalavras);
    linha.find(".botao-remover").click(removeLinha);

    corpoTabela.prepend(linha);
    $(".placar").fadeToggle();

    scrollPlacar();
}


function removeLinha(event) {
    event.preventDefault();
    var linha = $(this).parent().parent();
    linha.fadeOut();
    setTimeout(function () {
        linha.remove();
    }, 400);
};


function novaLinha(usuario, palavras) {
    var linha = $("<tr>");
    var usuario = $("<td>").text(usuario);
    var colunaPalavras = $("<td>").text(palavras);
    var colunaRemover = $("<td>");

    
    //<a> dentro de <td>
    colunaRemover.append(link);

    //todas <td> detro de <tr>
    linha.append(usuario);
    linha.append(colunaPalavras);
    linha.append(colunaRemover);

    return linha;
}


function scrollPlacar (){
    var posicaoPlacar = $(".placar").offset().top;
    $("body").animate({
        scrollTop: posicaoPlacar + "px"
    }, 1000);
}


function mostraPlacar() {
    $(".placar").stop().fadeToggle(300);
}
