<!DOCTYPE html>
<html>
  <head>
  	<title>Snake Game</title>
  </head>

  <body>

    <div id="score">0</div>
    <canvas id="snakeboard" width="400" height="400"></canvas>
  </body>
  </html>
  <script>
    const board_border = 'black';
    const board_background = "lightgreen";
    const snake_col = 'darkgreen';
    const snake_border = 'darkyellow';
    
    let snake = [
      {x: 200, y: 200},
      {x: 190, y: 200},
      {x: 180, y: 200},
      {x: 170, y: 200},
      {x: 160, y: 200}
    ]

    let score = 0;
    let changing_direction = false;
    let food_x;
    let food_y;
    let dx = 10;
    let dy = 0;
    
    const snakeboard = document.getElementById("snakeboard");
    const snakeboard_ctx = snakeboard.getContext("2d");
    main();
    gen_food();
    document.addEventListener("keydown", change_direction);
    function main() {

if (has_game_ended()) return;

changing_direction = false;
setTimeout(function onTick() {
clear_board();
drawFood();
move_snake();
drawSnake();
main();
}, 100)

}
function clear_board() {
      snakeboard_ctx.fillStyle = board_background;
      snakeboard_ctx.strokestyle = board_border;
      snakeboard_ctx.fillRect(0, 0, snakeboard.width, snakeboard.height);
      snakeboard_ctx.strokeRect(0, 0, snakeboard.width, snakeboard.height);
    }


    </script>