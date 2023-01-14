<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post resultaat</title>
</head>
<body>
  <h1>Je post data</h1>
  <p>Normaal sla je die op in een databank of verstuur je ze in een e-mail, maar als demo ben ik gewoon een echo.</p>
  <pre>
<?php
echo
'name: ' . htmlspecialchars($_POST["name"]) . "\n" .
'email: ' . htmlspecialchars($_POST["email"]) . "\n" .
'subject: ' . htmlspecialchars($_POST["subject"]) . "\n" .
'message: ' . htmlspecialchars($_POST["message"]) . "\n"  ;
?>
  </pre>
</body>
</html>
