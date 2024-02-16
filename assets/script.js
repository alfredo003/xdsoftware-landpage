document.getElementById('open-popup').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'block';
  });
  
  document.getElementById('close-popup').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
  });
  
  document.getElementById('submit-btn').addEventListener('click', function() {
      var name = document.getElementById('name').value;
      var email = document.getElementById('tel').value;
  
      var formData = new FormData();
      formData.append('name', name);
      formData.append('tel', email);
  
      fetch('process_form.php', {
          method: 'POST',
          body: formData
      })
      .then(function(response) {
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          return response.text();
      })
      .then(function(data) {
          alert('Formulário enviado com sucesso! Obrigado por se inscrever.');
          // Limpar os campos do formulário após o envio bem-sucedido
          document.getElementById('name').value = '';
          document.getElementById('email').value = '';
      })
      .catch(function(error) {
          console.error('There was a problem with your fetch operation:', error);
      });
  });
  