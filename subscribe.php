<<<<<<< HEAD
<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "cristina.claudia.maria@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "https://xina6.github.io/";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['Email']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
=======
<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "cristina.claudia.maria@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "https://xina6.github.io/";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['Email']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
>>>>>>> e832052c606aa821be81d6e6881b32e4f2ead380
?>