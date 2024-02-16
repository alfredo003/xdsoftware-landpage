document.getElementById('open-popup').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'block';
  });
  
  document.getElementById('close-popup').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
  });
  
  $(document).ready(function() {
      $('.submit-btn').click(function(e) {
          e.preventDefault();
          
          var name = $('#name').val();
          var tel = $('#tel').val();
          var company = $('#company').val();
          
          $.ajax({
              type: 'POST',
              url: 'send_email.php', // Caminho para o script PHP que enviará o e-mail
              data: {
                  name: name,
                  tel: tel,
                  company: company
              },
              success: function(response) {
                  alert('E-mail enviado com sucesso!');
                  // Limpar o formulário após o envio
                  $('#name').val('');
                  $('#tel').val('');
                  $('#company').val('');
              },
              error: function(xhr, status, error) {
                  alert('Erro ao enviar o e-mail: ' + xhr.responseText);
              }
          });
      });
  });
 
  