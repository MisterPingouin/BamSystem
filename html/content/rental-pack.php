<?php

echo ("

<section>
  <div class='backBar'></div>
  <div id=rentalmars class='pack pack1'>
      <h2>$rentalPackTitle1</h2>
      <p>$rentalPackDescription1</p>
      <button type='button' onclick='openForm()'>Rent it</button>
      <div class='login-popup'>
        <div class='form-popup' id='popupForm'>
          <div class='form-container'>
          <button type='button' class='btn cancel' onclick='closeForm()'>X</button>
            <h2>Please login</h2>
            <label for='email'>
              <strong>E-mail</strong>
            </label>
            <input type='text' id='email' placeholder='Email' name='email' required />
            <label for='psw'>
              <strong>Password</strong>
            </label>
            <input type='password' id='psw' placeholder='Password' name='psw' required />
            <button type='submit' class='btn'>Login</button>
          </div>
        </div>
      </div>
      <div class='packprice'>
          <p>$rentalPackPrice1</p>
          <img class='btclogo' src='assets/logo/bitcoin.png' alt='bitcoin'>
      </div>
  </div>
  <div id=rentalmoon class='pack pack2'>
      <h2>$rentalPackTitle2</h2>
      <p>$rentalPackDescription2</p>
      <button type='button' onclick='openForm()'>Rent it</button>
      <div class='login-popup'>
        <div class='form-popup' id='popupForm'>
          <div class='form-container'>
          <button type='button' class='btn cancel' onclick='closeForm()'>X</button>
            <h2>Please login</h2>
            <label for='email'>
              <strong>E-mail</strong>
            </label>
            <input type='text' id='email' placeholder='Email' name='email' required />
            <label for='psw'>
              <strong>Password</strong>
            </label>
            <input type='password' id='psw' placeholder='Password' name='psw' required />
            <button type='submit' class='btn'>Login</button>
          </div>
        </div>
      </div>
      <div class='packprice'>
          <p>$rentalPackPrice2</p>
          <img class='btclogo' src='assets/logo/bitcoin.png' alt='bitcoin'>
      </div>
  </div>
  <div id=rentalmercury class='pack pack3'>
      <h2>$rentalPackTitle3</h2>
      <p>$rentalPackDescription3</p>
      <button type='button' onclick='openForm()'>Rent it</button>
      <div class='login-popup'>
        <div class='form-popup' id='popupForm'>
          <div class='form-container'>
          <button type='button' class='btn cancel' onclick='closeForm()'>X</button>
            <h2>Please login</h2>
            <label for='email'>
              <strong>E-mail</strong>
            </label>
            <input type='text' class='email' placeholder='Email' name='email' required />
            <label for='psw'>
              <strong>Password</strong>
            </label>
            <input type='password' id='psw' placeholder='Password' name='psw' required />
            <button type='submit' id='btn'>Login</button>
          </div>
        </div>
      </div>
      <div class='packprice'>
          <p>$rentalPackPrice3</p>
          <img class='btclogo' src='assets/logo/bitcoin.png' alt='bitcoin'>
      </div>
  </div>
</section>
  <div class='decoLine'>
    <span class='round'></span>
    <span class='line'></span>
    <span class='round'></span>
  </div>
");

?>