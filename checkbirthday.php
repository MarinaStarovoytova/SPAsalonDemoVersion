<?php 

function checkbirthday($birthday){
    $bMonth = date_format(date_create($birthday), 'm');
    $bDay = date_format(date_create($birthday), 'd');
    $nMonth = date('m');
    $nDay = date('d');
    if ( ( $bMonth == $nMonth) && ( $bDay == $nDay)){
        return 'Поздравлем с Днем Рождения! <br> Для Вас скидка на все услуги 5%';
    }

    $birthdayToTime = mktime(0,0,0,$bMonth, $bDay, date('Y'));
    $birthdayToTimeNextYears = mktime(0,0,0,$bMonth, $bDay, date('Y')+1);
    $different = $birthdayToTime >= time() ? $birthdayToTime - time(): $birthdayToTimeNextYears - time();
    $day = ceil(($different)/ 86400); 
    return 'День рождение через '.$day .' дней';
}
?>