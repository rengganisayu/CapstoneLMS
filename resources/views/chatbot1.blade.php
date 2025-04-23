<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Chatbot UI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      background-color: #f8f9ff;
    }

    .sidebar {
      width: 260px;
      background-color: #0f0f1b;
      color: white;
      padding: 20px 10px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .menu-button {
      text-align: left;
      margin-bottom: 20px;
    }

    .menu-button button {
      background-color: transparent;
      border: 2px solid white;
      border-radius: 4px;
      color: white;
      padding: 5px 10px;
      cursor: pointer;
    }

    .menu-list {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .menu-list button {
      background-color: #191a29;
      border: none;
      padding: 12px;
      text-align: left;
      color: white;
      border-radius: 6px;
      cursor: pointer;
    }

    .menu-list button:hover {
      background-color: #2b2d42;
    }

    .bottom-profile {
      background-color: #ffdfd0;
      padding: 10px;
      border-radius: 10px;
      color: black;
      text-align: center;
    }

    .bottom-profile span {
      font-weight: bold;
    }

    .chat-container {
      flex: 1;
      display: flex;
      flex-direction: column;
      padding: 20px;
      position: relative;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .icons {
      display: flex;
      gap: 15px;
    }

    .icons span {
      font-size: 18px;
      cursor: pointer;
    }

    .search-bar input {
      padding: 8px 12px;
      border-radius: 20px;
      border: 1px solid #ccc;
      width: 200px;
    }

    .chat-box {
      flex: 1;
      margin: 20px 0;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .chat-message {
      background-color: white;
      padding: 12px;
      border-radius: 10px;
      max-width: 60%;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .chat-message.user {
      align-self: flex-end;
      background-color: #f5f5f5;
    }

    .chat-message.bot {
      align-self: flex-start;
      border-left: 4px solid #5b8dfb;
    }

    .chat-input-area {
      display: flex;
      align-items: center;
      padding: 10px;
      border-top: 1px solid #ddd;
      gap: 10px;
    }

    .chat-input-area input {
      flex: 1;
      padding: 10px 15px;
      border-radius: 10px;
      border: 1px solid #ccc;
    }

    .chat-input-area button {
      background-color: #5b8dfb;
      color: white;
      border: none;
      padding: 10px 16px;
      border-radius: 10px;
      cursor: pointer;
    }

    .chat-input-area .emoji, .attachment {
      cursor: pointer;
      font-size: 20px;
    }

  </style>
</head>
<body>

  <div class="sidebar">
    <div>
      <div class="menu-button">
        <button onclick="window.history.back()">
          <i class="bi bi-arrow-left"></i>
        </button>
      </div>
      <div class="menu-list">
        <button>● New Chat</button>
        <button>● Recent Chats</button>
      </div>
    </div>
    <div class="bottom-profile">
      <small>Welcome back,</small><br />
      <span>Nama kamu</span>
    </div>
  </div>

  <div class="chat-container">
    <div class="top-bar">
      <div class="icons">
        <span>⚠</span>
        <span>🗑</span>
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search" />
      </div>
    </div>

    <div class="chat-box">
      <div class="chat-message user">
        Rephrase ‘This is an ai chatbot generated for better communication and simpler work flows’
      </div>
      <div class="chat-message bot">
        This AI chatbot has been developed to optimize communication and simplify work processes, ultimately leading to smoother operations.
      </div>
      <div class="chat-message user">
        Thank you!
      </div>
    </div>

    <div class="chat-input-area">
      <span class="attachment">📎</span>
      <span class="emoji">😊</span>
      <input type="text" placeholder="Type a new message here" />
      <button>➤</button>
    </div>
  </div>

</body>
</html>