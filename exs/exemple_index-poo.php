<?php

require 'Personnage.php';

$merlin = new Personnage();

$merlin->nom = "Merlin";

$merlin->regenerer();

$harry = new Personnage();
$harry->vie = 0;

var_dump($harry->mort());

$harry->nom = "Harry";

var_dump($merlin);

var_dump($harry);



// différence entre public et private :
//     public permet de voir la variable
//     private on ne peut pas voir la variable
//     protected c'est comme private mais en moins strict


require 'form.php';

$form = new Form(array(

    'username' => 'Roger'
));

var_dump($form);

die();

echo $form->input('username');
echo $form->input('password');
echo $form->submit();

$form = new Form();

echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->submit();