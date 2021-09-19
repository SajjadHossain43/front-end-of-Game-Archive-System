<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Games</title>
    <h1>Add Games</h1>
  </head>
  <body>
    <form action="./add_games_backend.php" method="post">
      id : <input type="text" name="id" value="">
      name : <input type="text" name="name" value="">
      genre_id : <input type="text" name="genre_id" value="">
      series : <input type="text" name="series" value="">
      <input type="submit" name="game" value="game">
    </form>
    <a href="./show_game.php">show the table game</a>
  </body>
</html>
