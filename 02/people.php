<?php

	$friends = array(

	array(
	'firstname' => 'Kol9',
	'surname' => 'Pupkin',
	'city' => "Novosibirsk",
	'email' => 'pupkinvas9@mail.ru',
	'vk' => 'vk.com/ick',
	),
   
    array(
    'firstname' => 'y9',
    'surname' => 'Pupkina',
    'city' => "Novosibirsk",
    'email' => 'pupkinavas9@mail.ru',
    'vk' => 'vk.com/vsi',
    ),

    array(
    'firstname' => 'q7',
    'surname' => 'Ivanov',
    'city' => "Moscow",
    'email' => 'iavnov7@mail.ru',
    'vk' => 'vk.com/vd7',
    ),
	
);

echo $friends[2]['email'];

echo '<br>';
echo '<br>';

echo $friends[1]['city'];

echo '<br>';
echo '<br>';

echo '<a href="http://' . $friends[1]['vk'] . '">Vk</a>';

echo '<br>';
echo '<br>';
foreach ($friends as $key => $friend) {
   
    $vremennoe_znachenie = $friend['city'];
    $friends[$key]['city'] = $friend['firstname'];
    
    $vremennoe_znachenie_novoe = $friend['surname'];
    $friends[$key]['surname'] = $vremennoe_znachenie;

    $friends[$key]['firstname'] = $vremennoe_znachenie_novoe;
}
echo'<pre>';
print_r($friends);
echo'</pre>';
echo '<br>';
echo '<br>';
foreach ($friends as $key => $friend) {
    echo'<pre>';
    var_dump($friends);
    echo'</pre>';
    echo $friend['firstname'];
}

