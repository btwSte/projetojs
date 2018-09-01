<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Javascript</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        // pegar clique
        $("#teste").click(function(e){
          //tira # da url
          e.preventDefault();

          //mostrar
          $('#carregando').show();

          // inicio Ajax
          $.ajax({
            type: 'GET',
            url: 'req.php',


            success: function (data){
              alert(data);
            },
            error: function(data){
              alert("erro na requisição");
            },
            complete: function(){
              //apos ter sucesso ou erro essa função esconde o carregando
              $("#carregando").hide();
            }
          });
          //fim Ajax
        });
      });
    </script>
  </head>
  <body>
    <h1>Requisição com ajax</h1>

    <a href="#" id="teste"> Clique aqui</a> para visualizar mensagem via Ajax.
    <p id="carregando" class="non">Carregando Ajax</p>
  </body>
</html>
