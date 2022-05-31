// Questions
question1.question = "Complete this well known phrase: 'Use the _________'";
question1.correct = "Force!";
question1.wrong1 = "Forks!";
question1.wrong2 = "Pointy end!";
question1.wrong3 = "Ewok as a shield!";

var question2 = {
    question: "Where are they taking the Hobbits?",
    correct: "Isengard",
    wrong1: "Out for dinner",
    wrong2: "Oz",
    wrong3: "To infinity and beyond!"
};

var question3 = new Object();
question3.question = "3.14 is which constat to 2 decimal places?";
question3.correct = "PI";
question3.wrong1 = "MC";
question3.wrong2 = "E";
question3.wrong3 = "Run DMC";

var question4 = new Object();
question4.question = "Which of these actors has NOT played Spider-Man?";
question4.correct = "Joey Tribbiani";
question4.wrong1 = "Andrew Garfield";
question4.wrong2 = "Tom Holland";
question4.wrong3 = "Toby Maguire";

var question5 = new Object();
question5.question = "What was the fourth Harry Potter book?";
question5.correct = "Goblet of Fire";
question5.wrong1 =  "Order of the Phoenix";
question5.wrong2 = "Prisoner of Azkaban";
question5.wrong3 = "Chamber of Secrets";

//Functionality
var playing = false;
var current = 0;
var answers = [];
var score = 0;


var qs = {};
qs.push(question1);
qs.push(question2);
qs.push(question3);
qs.push(question4);
qs.push(question5);

function outputQuestion()
{
    if(playing)
    {
        if(current >= qs.length)
        {
            calcScore();
            endQuiz();
        }
        else
        {
            var cQuestion = qs[current];   
            var qHeading = document.getElementById("question");
            var btn1 = document.getElementById("b1");
            var btn2 = document.getElementById("b2");
            var btn3 = document.getElementById("b3");
            var btn4 = document.getElementById("b4");
            
            qHeading.innerHTML = cQuestion.question;
            ssss
            btn1.innerHTML = cQuestion.wrong1;
            btn2.innerHTML = cQuestion.correct;s
            btn3.innerHTML = cQuestion.wrong2;
            btn4.innerHTML = cQuestion.wrong3;
            current++;
        }
    }
    else{
        playing = true;
    }  
}   

function answer(given){
    console.log(given);
    answers.push(given);
    outputQuestion();
}

function calcScore(){
    for(var i = 0; i < answers.length; i++)
    {
        if(answers[i] == 1)
        {   
            score++;
        }
    }
}

function endQuiz()
{
    
    var qHeading = document.getElementById("question");
    qHeading.innerHTML = "You scored " + score + " out of " + answers.length;
    console.log(score);
    var btn1 = document.getElementById("b1");
    var btn2 = document.getElementById("b2");
    var btn3 = document.getElementById("b3");
    var btn4 = document.getElementById("b4");
    btn4.innerHTML = "";
    btn1.innerHTML = "";
    btn2.innerHTML = "";
    btn3.innerHTML = "";

    score = 0;
    current = 0;
    answers = [];
    playing = false;
}
