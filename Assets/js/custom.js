$(document).ready(function(){

    $(".submenu > a").click(function(e) {
        e.preventDefault();
        var $li = $(this).parent("li");
        var $ul = $(this).next("ul");

        if($li.hasClass("open")) {
            $ul.slideUp(350);
            $li.removeClass("open");
        } else {
            $(".nav > li > ul").slideUp(350);
            $(".nav > li").removeClass("open");
            $ul.slideDown(350);
            $li.addClass("open");
        }
    });

    //login
    $("#logar").click(function() {
        var login = $("#usuario").val();
        var senha = $("#senha").val();
        if(
            login == '' || senha == ''
        ) {
            alert("Preencha todos os campos");
            return false;
        }
        $data = {
            login: login,
            senha: senha,
            cont: "Auth",
            action: "login"
        }
        $.ajax({
            type: 'post',
            data: $data,
            url: "http://localhost/projeto_transacoes/app/Routes/routes.php",
            success: function(retorno){
                if(retorno == 1){
                    window.location = "http://localhost/projeto_transacoes/app/View/Transacoes/index_transacoes.php";
                }else {
                    alert("Usuário ou senha incorretos.");
                    $("#usuario").val("");
                    $("#senha").val("");
                }
            }
        })
    });

    //registrar
    $("#registrar").click(function() {
        var login = $("#usuario").val();
        var senha = $("#senha").val();
        var confirmar_senha = $("#confirmar_senha").val();
        var nome = $("#nome").val();
        var conta = $("#conta").val();
        if(
            login == '' || senha == '' || nome == ''
        ) {
            alert("Preencha todos os campos");
            return false;
        }
        if(senha != confirmar_senha) {
            alert("As senha estão diferentes");
            return false;
        }
        $data = {
            login: $("#usuario").val(),
            senha: $("#senha").val(),
            nome: $("#nome").val(),
            conta: $("#conta").val(),
            cont: "Auth",
            action: "registrar"
        }
        $.ajax({
            type: 'post',
            data: $data,
            url: "http://localhost/projeto_transacoes/app/Routes/routes.php",
            success: function(retorno){
                if(retorno) {
                    alert("Cadastro realizado com sucesso");
                    window.location = "http://localhost/projeto_transacoes/app/View/login.php";
                }else {
                    alert("Erro ao cadastrar novo usuário");
                }
            }
        })
    });
});
