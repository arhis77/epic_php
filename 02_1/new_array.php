<?php
$friends = array(

    array(
        'firstname' => 'Kol9',
        'surname' => 'Pupkin',
        'town' => 'Novosibirsk',
        'email' => 'pupkinkol9@mail.ru',
        'vk' => 'vk.com/Kol9',
    ),

    array(
        'firstname' => 'vas9',
        'surname' => 'Pupkin',
        'town' => 'Novosibirsk',
        'email' => 'pupkinvas9@mail.ru',
        'vk' => 'vk.com/vas9',
    ),

    array(
        'firstname' => 'yul9',
        'surname' => 'Pupkina',
        'town' => 'Novosibirsk',
        'email' => 'pupkinayul9@mail.ru',
        'vk' => 'vk.com/yul9',
    ),
);
echo '<pre>';
print_r($friends);
echo '</pre>';

echo $friends[2]['email'];

foreach ($friends as $key => $friend){
    $vremennoe_znachenie = $friend['town'];
    $friends[$key]['town'] = $friend['firstname'];

    $vremennoe_znachenie_novoe = $friend['surname'];
    $friends[$key]['surname'] = $vremennoe_znachenie;

    $friends[$key]['firstname'] = $vremennoe_znachenie_novoe;
}

echo '<pre>';
print_r($friends);
echo '</pre>';