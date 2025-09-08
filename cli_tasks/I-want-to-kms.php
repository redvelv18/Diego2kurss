<?php

// ok 1) izveidojam jaunu PHP projektu "Tasks" un versionējam
// ok 2) izveidojam while ciklu, kas vaicā pēc lietotāja ievades (ar 'readline') katrā iterācijā (iziet ar Ctrl+C)
// ok 3) while cikls tiek pārtraukts, ja lietotājs ievada "n"
// ok 4) izveidojam uzdevumu (tasks) sarakstu kā String elementus izmantojot indeksēta masīva datu struktūru (3 testa elementus)
// ok 5) izveidojiet "switch..case" konstrukciju, kas ļauj apstrādāt lietotāja ievadīto izvēli
// ok 6) pievienojiet 'case' jeb gadījumu '1', kuru ievadot lietotājam tiek izvadīts viss uzdevumu saraksts
// ok 7) uzlabojiet šo 'case: 1' bloku, lai tas izsauktu funkciju, kas atgriež uzdevumus
// ok 8) izvadiet lietotāja izvēlnes tekstu, kas to infomē par veicamajām darbībām CLI aplikācijā
// ok 9) izveidojiet izvēlni, kas ļauj lietotājam pievienot jaunu uzdevumu
// ok 10) izveidojiet izvēlni, kas ļauj lietotājam dzēt eksistējošu uzdevumu

function showAllTasks($inpTasks){
    foreach($inpTasks as $task){
        echo $task ."\n";
    }
}
function addTask(&$inpTasks){
    $newTask = readline("Enter new task \n");
    $inpTasks[] = $newTask;
}
function deleteTask(&$inpTasks){
    echo "(example: 0. task one, 1. task two)";
    $newTask = readline("Enter the task number (0-10) \n");
    unset($inpTasks[$newTask]);
}


$tasks = ["first task","second task","third task"];

while(true){
    $inp = readline("Choose 1(one) to show tasks, 2(two) to add a new task, 
    3(three) to delete a task, 0(zero) to exit. ");
    switch ($inp) {
        case 0:
            echo "!! you have exited";
            exit;
        case 1:
            echo "!! here are your tasks: \n";
            echo "----------- \n";
            showAllTasks($tasks);
            echo "----------- \n";
            echo "!-- To continue: ";
            break;
        case 2:
            echo "!! Enter new task \n";
            addTask($tasks);
            echo "!! Task added \n";
            break;
        case 3:
            echo "Which task do you want to delete? \n";
            deleteTask($tasks);
            echo "!! Task deleted \n";
    }
}

// ok 1) Turpat main.php failā izveidojam klasi Task ar atribūtiem $id un $content
// 2) pievienojam instances metodi "display", lai katra Task klases instance varētu 
// sevi attēlot ar $task->display()

class Task {
    public $id;
    public $content;

    public function __construct($id,$content){
        $this->id = $id;
        $this->content = $content;
    }

    public function display(){
        echo "The task ID is $this->id";
        echo "content: \n $this->content";
    }
}