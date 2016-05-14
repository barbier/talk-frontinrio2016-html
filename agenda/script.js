(function() {
  var btn = $("#btn-enviar");

  btn.on("click", function () {
    var jNome = $("#txt-nome").val();
    var jEmail = $("#email").val();
    var jEndereco = $("#txt-endereco").val();
    var jTelefone = $("#tel-telefone").val();
    var jTwitter = $("#url-twitter").val();

    $.ajax({
      url: 'data.php',
      data: {
        nome: jNome,
        email: jEmail,
        endereco: jEndereco,
        telefone: jTelefone,
        twitter: jTwitter
      },
      type: 'POST',
      success: function (data) {
        $("#flash").html(data);
      }
    });
  });
}());
