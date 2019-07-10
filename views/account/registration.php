<!--<form method="post" action="http://localhost/phpObjektinis/phpObjektinis/index.php/account/create">-->
<!--    <div class="container">-->
<!--        <h1>REGISTER</h1>-->
<!--        <p>Please fill in this form to create an account.</p>-->
<!--        <input type="text" placeholder="Enter username" name="name">-->
<!--        <input type="email" placeholder="Enter Email" name="email">-->
<!--        <input type="password" placeholder="Enter Password" name="password" required>-->
<!--        <input type="password" placeholder="Repeat Password" name="password2" required>-->
<!--        <div>-->
<!--            <button type="submit" class="signupbtn">REGISTER</button>-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->


<div class="container">
    <h1>REGISTER</h1>

<?php
$this->form ->input('', 'text', 'registerInput', 'name', 'Name','',1)->
input('', 'email', 'registerInput', 'email', 'Email', '', 1)->
input('', 'password', 'registerInput', 'password', 'Password', '', 1)->
input('', 'password', 'registerInput', 'password2', 'Repeat Password', '', 1)->

closeForm('Register');

echo $this->form ->build();
?>
</div>


