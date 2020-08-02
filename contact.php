<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="sad.css">
    <meta charset="utf-8">
    <title>Send a message</title>
  </head>
  <body>
    <main>
      <p>Send a message</p>
      <form class="message" action="http://localhost/message.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">SEND MESSAGE</button>
      </form>
    </main>
  </body>
</html>
