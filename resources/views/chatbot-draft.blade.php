<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chatbot AI Belajar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .chat-container {
      max-width: 600px;
      margin: 60px auto;
      padding: 20px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    #chat-window {
      height: 300px;
      overflow-y: auto;
      background: #f1f1f1;
      padding: 15px;
      border-radius: 8px;
    }
    .bot-msg {
      color: #555;
    }
    .user-msg {
      text-align: right;
    }
  </style>
</head>
<body>
@include('navbar')
  <div class="chat-container">
    <h4 class="mb-3 text-center">AI Chatbot Belajar</h4>
    <div id="chat-window">
      <div class="bot-msg">🤖 Hai! Silakan tanya apa pun tentang materi.</div>
    </div>
    <form id="chat-form" class="d-flex mt-3">
      <input type="text" id="chat-input" class="form-control me-2" placeholder="Tulis pertanyaan...">
      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
  </div>

  <script>
    document.getElementById('chat-form').addEventListener('submit', function (e) {
      e.preventDefault();
      const input = document.getElementById('chat-input');
      const chatWindow = document.getElementById('chat-window');

      const userText = input.value.trim();
      if (userText === '') return;

      const userMessage = document.createElement('div');
      userMessage.className = 'user-msg mb-2';
      userMessage.innerHTML = `<span class="badge bg-dark">${userText}</span>`;
      chatWindow.appendChild(userMessage);

      const botMessage = document.createElement('div');
      botMessage.className = 'bot-msg';
      botMessage.textContent = '🤖 AI: Pertanyaan kamu menarik! Jawabannya akan segera hadir.';
      setTimeout(() => {
        chatWindow.appendChild(botMessage);
        chatWindow.scrollTop = chatWindow.scrollHeight;
      }, 500);

      input.value = '';
    });
  </script>
</body>
</html>
