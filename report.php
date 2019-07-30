<head>
<title>Submission Results</title>
</head>
<body>
<h2> Test </h2>

<?php
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $alien_description = $_POST['aliendescription'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  
  $to = 'keith@calligan.name';
  $subject = 'Report';
  $msg = "test $when_it_happened \n".
mail($to, $subject, $msg, 'From:' . $email);
  
  echo 'Thanks for submitting the form.<br />';
  echo 'When'. $when_it_happened;
  ?>
  </body>
  </html>
  
