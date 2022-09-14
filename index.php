<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

$surname = 'Иванов';
$name = 'Иван';
$patronomyc = 'Иванович';
function getFullnameFromParts($surname,$name,$patronomyc){
    return($surname.' '.$name.' '.$patronomyc);
}
print_r (getFullnameFromParts($surname,$name,$patronomyc));
echo "\n";
?>


<?php
$snp = 'Иванов Иван Иванович';
function getPartsFromFullname($snp){
    return (explode(' ', $snp));
};
$array=(getPartsFromFullname($snp));
$result = [
    'surname' => $array[0],
    'name' => $array[1],
    'patronomyc' => $array[2]
];
print_r($result);
?>


