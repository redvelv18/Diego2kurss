<?php

// ok 1) izveidojam jaunu PHP projektu "Tasks" un versionējam
// ok 2) izveidojam while ciklu, kas vaicā pēc lietotāja ievades (ar 'readline') katrā iterācijā (iziet ar Ctrl+C)
// ok 3) while cikls tiek pārtraukts, ja lietotājs ievada "n"
// ok 4) izveidojam uzdevumu (tasks) sarakstu kā String elementus izmantojot indeksēta masīva datu struktūru (3 testa elementus)
// ok 5) izveidojiet "switch..case" konstrukciju, kas ļauj apstrādāt lietotāja ievadīto izvēli
// ok 6) pievienojiet 'case' jeb gadījumu '1', kuru ievadot lietotājam tiek izvadīts viss uzdevumu saraksts
// 7) uzlabojiet šo 'case: 1' bloku, lai tas izsauktu funkciju, kas atgriež uzdevumus
// 8) izvadiet lietotāja izvēlnes tekstu, kas to infomē par veicamajām darbībām CLI aplikācijā
// 9) izveidojiet izvēlni, kas ļauj lietotājam pievienot jaunu uzdevumu
// 10) izveidojiet izvēlni, kas ļauj lietotājam dzēt eksistējošu uzdevumu

$tasks = ["first task","second task","third task"];

function showAllTasks($inpTasks){
    foreach($inpTasks as $task){
        echo $task ."\n";
    }
}
while(true){
    $inp = readline("Ahlelele ahlelas ");
    //if($inp == 'no'){
    //    exit;
    //}
    switch ($inp) {
        case 0:
            exit;
        case 1:
            showAllTasks($tasks);
            break;
    }
}

