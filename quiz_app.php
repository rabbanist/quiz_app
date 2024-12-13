<?php 

$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

$answer = [];

foreach ($questions as $index => $question) {
   echo ($index + 1) . ". " . $question['question']. "\n";
   $answer[] = trim(readline("Your answer: "));
}


function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question) {
        if(strtolower($question['correct']) === strtolower($answers[$index])) {
            $score++;
        }
    }
    return $score;
}

$score = evaluateQuiz($questions, $answer);

echo "You scored " . $score . " out of " . count($questions) . "\n";

//Provide feedback based on the score

if($score === count($questions)){
    echo "Excellent job! \n";
}elseif($score > 1){
    echo "Good Effort! \n";
}else{
    echo "Better luck next time!";
}
