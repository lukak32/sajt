<?php

$result = mail ("luka.kostadinovic32@gmail.com", "Questionnaire from web page", "Message"); 

if ($result) {
echo "<p>Message has been sent!</p>";
}
else {
echo "<p>Message has NOT been delivered!</p>";
}
?>