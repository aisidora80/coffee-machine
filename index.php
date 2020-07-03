<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>кофе-машина</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-6 coffee-list"> <!-- левая сторона (выбор кофе) -->
          <div class="row flex-column justify-content-around">
            <div class="coffee-item" onclick="cookCoffee(50, 'американо',this)">
              <img src="img/americano.png" alt="американо">
              <span>американо - 50 руб.</span>
            </div>
            <div class="coffee-item" onclick="cookCoffee(92, 'капучино',this)">
              <img src="img/cappuccino.png" alt="капучино">
              <span>капучино - 92 руб.</span>
            </div>
            <div class="coffee-item" onclick="cookCoffee(66, 'эспрессо',this)">
              <img src="img/espresso.png" alt="эспрессо">
              <span>эспрессо - 66 руб.</span>
            </div>
            <div class="coffee-item" onclick="cookCoffee(128, 'латте',this)">
              <img src="img/latte.jpg" alt="латте">
              <span>латте - 128 руб.</span>
            </div>
          </div>
        </div>
        <div class="col-6 coffee-oper"> <!-- правая сторона (операционная) -->
        <div class="row">
          <div class="col-6"> <!-- дисплей и кружка -->
            <div class="display">
              <span class="display-text">выберете-кофе</span>
              <div class="progress mt-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
              </div>
            </div>
            <div class="cup">
              <img src="img/americano.png" alt="">
            </div>
          </div>
          <div class="col-6"> <!-- баланс,атм,сдача -->
            <div class="input-group mb-3">
              <input type="text" class="form-control balance" placeholder="баланс" readonly>
              <div class="input-group-append">
                <span class="input-group-text">&#8381;</span>
              </div>
            </div>
            <div class="atm">
              <div class="cash-catcher"></div>
              <img src="img/bill_acc.png" alt="">
            </div>
            <button class="btn btn-primary btn-block mt-3 change-btn">сдача</button>
            <div class="change-box mt-3"></div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="money">
      <img src="img/100rub.jpg" cost="100" alt="">
      <img src="img/500rub.jpg" cost="500" alt="">
      <img src="img/50rub.jpg" cost="50" alt="">
    </div>
    
    <!-- Optional JavaScript -->
    <script src="script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>