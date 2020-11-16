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
    function drawSnake() {
      snake.forEach(drawSnakePart)
    }

    function drawFood() {
      snakeboard_ctx.fillStyle = 'red';
      snakeboard_ctx.strokestyle = 'darkred';
      snakeboard_ctx.fillRect(food_x, food_y, 10, 10);
      snakeboard_ctx.strokeRect(food_x, food_y, 10, 10);
    }
    function drawSnakePart(snakePart) {
      snakeboard_ctx.fillStyle = snake_col;
      snakeboard_ctx.strokestyle = snake_border;
      snakeboard_ctx.fillRect(snakePart.x, snakePart.y, 10, 10);
      snakeboard_ctx.strokeRect(snakePart.x, snakePart.y, 10, 10);
    }

    function has_game_ended() {
      for (let i = 4; i < snake.length; i++) {
        if (snake[i].x === snake[0].x && snake[i].y === snake[0].y) return true
      }
      const hitLeftWall = snake[0].x < 0;
      const hitRightWall = snake[0].x > snakeboard.width - 10;
      const hitToptWall = snake[0].y < 0;
      const hitBottomWall = snake[0].y > snakeboard.height - 10;
      return hitLeftWall || hitRightWall || hitToptWall || hitBottomWall
    }


    </script>