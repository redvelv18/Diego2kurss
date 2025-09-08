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

// ok 1) Turpat main.php failā izveidojam klasi Task ar atribūtiem $id un $content
// ok 2) pievienojam instances metodi "display", lai katra Task klases instance varētu 
// sevi attēlot ar $task->display()
class Task {
    public $id;
    public $content;

    public function __construct($id,$content){
        $this->id = $id;
        $this->content = $content;
    }

    public function edit($content){
        // $taskNum = readline("Which task do you want to edit?\n");
        // $this->id = $taskNum;
        // $content = readline("Enter new content: \n");
        $this->content = $content;
    }

    public function display(){
        echo "\nThe task ID is $this->id\n";
        echo "content: \n $this->content";
    }
}

$tasks = [
    new Task(0, "first task"),
    new Task(1, "second task"),
    new Task(2, "third task"),
];

function showAllTasks($inpTasks){
    foreach($inpTasks as $task){
        $task->display();
    }
}
function addTask(&$inpTasks){
    $newContent = readline("Enter new task \n");
    $newId = count($inpTasks);
    $inpTasks[] = new Task($newId, $newContent);
}
function deleteTask(&$inpTasks){
    echo "(example: 0. first task, 1. second task)\n";
    $taskNum = readline("Enter the task number (0-10) \n");
    unset($inpTasks[$taskNum]);
    $inpTasks = array_values($inpTasks);
}
function editTask(&$tasks) {
    echo "(example: 0. first task, 1. second task)\n";
    $taskNum = readline("Enter the task number you want to edit: ");
    if (isset($tasks[$taskNum])) {
        echo "Current content: " . $tasks[$taskNum]->content . "\n";
        $newContent = readline("Enter new content: ");
        $tasks[$taskNum]->edit($newContent);
        echo "!! Task updated\n";
}}


while(true){
    $inp = readline("Choose 1(one) to show tasks, 2(two) to add a new task, 3(three) to delete a task, 0(zero) to exit. \n");
    switch ($inp) {
        case 0:
            echo "!! you have exited";
            exit;
        case 1:
            echo "!! here are your tasks: \n";
            echo "----------- \n";
            showAllTasks($tasks);
            echo "\n ----------- \n";
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
            break;
        case 4:
            editTask($tasks);
            break;
    }
}

// ok 4) izveidojiet rediģēšanas funkcionalitāti, 
// kad lietotājs var izvēlēties pēc indeksa, 