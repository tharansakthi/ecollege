<?php
    $this->load->view('inc/header');
?>
<body>
<div id="main">
<div id="envelope">
<?php if (isset($authUrl)){ ?>
<header id="sign_in">
<h2>CodeIgniter Login With Google Oauth PHP</h2>
</header>
<hr>
<div id="content">
<a href="<?php echo $authUrl; ?>">log in</a>
</div>
<?php }else{ ?>
<header id="info">
<a target="_blank" class="user_name" href="<?php echo $userData->link; ?>" /><img class="user_img" src="<?php echo $userData->picture; ?>" width="15%" />
<?php echo '<p class="welcome"><i>Welcome ! </i>' . $userData->name . "</p>"; ?></a>
<!-- 
****** this code will log you out from both google and ecollege ********
<a class='logout' href='https://www.google.com/accounts/Logout?continue=<?php echo base_url(); ?>/user_authentication/logout'>Logout</a> -->
<!-- this will log you out only from ecollege -->
<a class='logout' href="<?php echo base_url(); ?>user_authentication/logout">Logout</a>
</header>
<?php
echo "<p class='profile'>Profile :-</p>";
echo "<p><b> First Name : </b>" . $userData->given_name . "</p>";
echo "<p><b> Last Name : </b>" . $userData->family_name . "</p>";
echo "<p><b> Gender : </b>" . $userData->gender . "</p>";
echo "<p><b>Email : </b>" . $userData->email . "</p>";
?>
<?php }?>
</div>
</div>
</body>
</html>
