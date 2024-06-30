<?php
include 'Form.php';
include 'TextInput.php';
error_reporting(E_ERROR | E_PARSE);

$form = new Form();

$form->addInput(new TextInput("firstname", "First Name", "Bruce"));
$form->addInput(new TextInput("lastname", "Last Name", "Wayne"));
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($form->validate()) {
        // display user info
        $firstName = $form->getValue("firstname");
        $lastName = $form->getValue("lastname");
        echo $firstName." ".$lastName;
    } else {
        $form->display();
    }
} else {
    $form->display();
}
