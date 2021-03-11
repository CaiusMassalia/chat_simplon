<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/chat_adam.css">
    <title>Se connecter</title>
</head>
<body>
<nav>
    <div class="logo">
        <h4>Hermès</h4>
    </div>
    <ul class="nav-links">
        <li><a href="#">Inscription</a></li>
        <li><a href="#">Connexion</a></li>
    </ul>
</nav>
        </form>
</div>
    <header>
    <div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
    </header>
    <script type="text/javascript" src="./chat_adam.js"></script>
</body>
</html>