<?php

if(isset($_POST['sub'])){

    include('conn.php');
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $pass = $_POST['upass'];
    $age = $_POST['uage'];
    $num = $_POST['unum'];

    $sql = "INSERT INTO `form`( `USER_NAME`, `EMAIL`, `PASSWORD`, `AGE`, `PHONE`) VALUES ('$name','$email','$pass','$age','$num')";

    mysqli_query($conn,$sql);
}

?>




<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <form  class="form" method = "post">
        <h2>Hey, you gotta register!</h2>
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Enter username" name="uname"/>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Enter email" name="uemail"/>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter password"  name="upass"/>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="age" >Age</label>
          <input type="age" id="password2" placeholder="Enter Your Age" name="uage"/>
          <small>Error message</small>
        </div>

         <div class="form-control">
          <label for="number">Phone</label>
          <input type="Phnoe" id="password2" placeholder="Enter Your Phone Number" name="unum"/>
          <small>Error message</small>
        </div>
        <button type="submit" name="sub">Register</button>
      </form>
    </div>

  </body>
</html>


<style>

* {
  --hibiscus-love: #fc465c;
  --fine-ii: #f9b198;
  --afl: #fac8af;
  --mexican-sky: #cfdddd;
  --brasillia-peach: #facb85;
  --free: #33032d;
  --captured: #2b2120;

  --primary-color: var(--brasillia-peach);
  --secondary-color: var(--hibiscus-love);
  --tertiary-color: var(--fine-ii);
  --quadrary-color: var(--afl);
  --bg-color: var(--mexican-sky);
  --text-color: var(--free);
  --header-color: var(--captured);
  --error-color: var(--hibiscus-love);
  --success-color: #73d12e;

  box-sizing: border-box;
}

h1,
h2,
h3,
h4,
h5 {
  font-family: 'Yeseva One', Georgia, cursive;
  color: var(--header-color);
}

body {
  font-family: 'Lora', 'Times New Roman', serif;
  background-color: var(--bg-color);
  color: var(--free);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-flow: column nowrap;
  min-height: 100vh;
}

.container {
  width: 400px;
  border-radius: 0.6em;
  padding: 20px;
  background-color: var(--primary-color);
  box-shadow: 20px 20px 60px #97a1a1, -20px -20px 60px #ffffff;
  margin: 20px auto;
}

.form {
  padding: 30px 40px;
}

.form h2 {
  text-align: center;
  margin: 0 0 20px;
}

.form-control {
  margin-bottom: 10px;
  padding-bottom: 20px;
  position: relative;
}

.form-control label {
  color: var(--text-color);
  display: block;
  margin-bottom: 5px;
}
.form-control input {
  border-radius: 6px;
  background: var(--primary-color);
  box-shadow: inset 3px 3px 7px #e9bd7c, inset -3px -3px 7px #ffd98e;
  min-height: 2.618em;
  border: var(--quadrary-color) solid 2px;
  display: block;
  width: 100%;
  font-size: 14px;
  padding: 10px;
}

.form-control input:focus {
  outline: 0;
  border-color: var(--tertiary-color);
}

.form-control.success input {
  border-color: var(--success-color);
}

.form-control.error input {
  border-color: var(--error-color);
}

.form-control small {
  color: var(--error-color);
  position: absolute;
  bottom: 0;
  left: 0;
  visibility: hidden;
}

.form-control.error small {
  visibility: visible;
}

.form button {
  cursor: pointer;
  background: var(--secondary-color);
  box-shadow: 4px 4px 8px #c19c66, -4px -4px 8px #fffaa4;
  border: 1px solid #ec263c66;
  color: #fff;
  font-size: 16px;
  padding: 0.618em 1.2em;
  border-radius: 0.4em;
  font-family: 'Yeseva One', Georgia, cursive;
  display: block;
  margin-top: 1.2em;
  width: 100%;
}

.form button:active,
.form button:focus {
  outline: 0;
  background-color: #fc364c;
}


</style>


<script>

const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

//Show input error message
function showError(input, message) {
  //gets the parent div
  const formControl = input.parentElement;
  //applies error class and reapplies form-control class
  formControl.className = 'form-control error';
  //finds the small tag within this div
  const small = formControl.querySelector('small');
  //inserts the message parameter into the small tag
  small.innerText = message;
}

//Show success outline
function showSuccess(input) {
  //gets the parent div
  const formControl = input.parentElement;
  //applies success class and reapplies form-control class
  formControl.className = 'form-control success';
}

//Check to see if email is valid
function checkEmail(input) {
  const regExEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  //if (regular expression representing a valid email, then true else false)
  if (regExEmail.test(input.value.trim())) {
    showSuccess(input);
  } else {
    showError(input, 'Not a real email bub');
  }
}

//check required fields
function checkRequired(inputArr) {
  //iterate through each slot in inputArr
  inputArr.forEach(function(input) {
    //if not null, show success
    if (input.value.trim() === '') {
      console.log(input.id);
      showError(input, `${getFieldName(input)} is required bub`);
    } else {
      showSuccess(input);
    }
  });
}

//check whether an input is between a min and max length
function checkLength(input, min, max) {
  if (input.value.length < min) {
    showError(
      input,
      `${getFieldName(input)}'s gotta be over ${min} characters bub`
    );
  } else if (input.value.length > max) {
    showError(
      input,
      `${getFieldName(input)}'s gotta be under ${max} characters bub`
    );
  }
}



//Get the fieldname
//finds first letter and uppercases it, then slices off the old first letter and concatenates
function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

//Event listeners
form.addEventListener('submit', function(e) {
  // use preventDefault to keep the page from refreshing everytime you hit submit
  e.preventDefault();

  checkRequired([username, email, password, password2]);
  checkLength(username, 3, 15);
  checkLength(password, 6, 25);
  checkEmail(email);
  checkPasswords(password, password2);
});


</script>