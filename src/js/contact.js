document.getElementById('contactForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Impede o envio padrão do formulário

  const formData = new FormData(this);

  fetch('send_email.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    alert('Mensagem enviada com sucesso!');
    console.log(data);
  })
  .catch(error => {
    alert('Falha ao enviar a mensagem.');
    console.error('Erro:', error);
  });
});