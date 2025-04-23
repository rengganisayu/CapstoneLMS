<style>
  html, body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    width: 100vw;
  }  
  .footer {
    background-color: #0F172A;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .footer p {
    font-size: 14px;
    color: white;
    margin: 0;
  }
</style>

<footer class="footer">
  <p>© {{ date('Y') }} Informatika. All rights reserved.</p>
</footer>
