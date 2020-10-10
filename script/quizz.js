const quizz = {
    quizzTitle: "Quizz Koh-Lanta",
    questions: [
        {
            questionTitle: "Quelle équipe est allée au conseil ?",
            answers: [
                {choice: "Les Jaunes", isRight: false, index: 0},
                {choice: "Les Rouges", isRight: true, index: 1},
            ]
        },
        {
            questionTitle: "Qui a été éliminé ce vendredi ?",
            answers: [
                {choice: "Sebastien", isRight: true, index: 0},
                {choice: "Marie-France", isRight: false, index: 1},
                {choice: "Fabrice", isRight: false, index: 2},
                {choice: "Bertrand-Kamal", isRight: false, index: 3}
            ]
        },
        {
            questionTitle: "Combien de pots a cassé Dorian ?",
            answers: [
                {choice: "3 pots", isRight: false, index: 0},
                {choice: "4 pots", isRight: false, index: 1},
                {choice: "5 pots", isRight: true, index: 2},
                {choice: "6 pots", isRight: false, index: 3},
            ]
        }
    ]
};

console.log(quizz.questions.length);
console.log(quizz.questions[1].answers.length);

//création titre & hr
let sondageTitle = document.createElement("h3");
sondageTitle.innerHTML = quizz.quizzTitle;
let container = document.getElementById('container');
container.appendChild(sondageTitle);
container.appendChild(document.createElement("hr"));

function drawQuizz(quizz){

    //création tableau
    let sondageTable = document.createElement("table");
    sondageTable.className = "table-accueil";
    let tbody = document.createElement("tbody")
    sondageTable.appendChild(tbody);

    let index = 0;
    while(index < quizz.questions.length){
        //création titre question
        let tr = document.createElement("tr");
        tr.className = index;
        tbody.appendChild(tr);
        let td = document.createElement("td");
        tr.appendChild(td);
        let qTitle = document.createElement("h4");
        qTitle.className = "titleQuestion";
        qTitle.innerHTML = quizz.questions[index].questionTitle;
        td.appendChild(qTitle);

        // création question & boutons
        for (let j = 0; j < quizz.questions[index].answers.length; j++) {
            
            //div grise 100%
            let qtr = document.createElement("tr");
            qtr.className = index;
            tbody.appendChild(qtr);
            let qtd = document.createElement("td");
            qtr.appendChild(qtd);
            let div100 = document.createElement("div");
            div100.className = "hundred";
            qtd.appendChild(div100);

            //div bleue x%
            let divPercent = document.createElement("div");
            divPercent.className = "percent";
            divPercent.style.width = 100/quizz.questions[index].answers.length + "%";
            div100.appendChild(divPercent);

            //contenu div bleue
            let pBlue = document.createElement("p");
            pBlue.innerHTML = quizz.questions[index].answers[j].choice;
            divPercent.appendChild(pBlue);

            //affichage %age a droite
            let pPercent = document.createElement("p");
            pPercent.innerHTML= 100/quizz.questions[index].answers.length + " %";
            div100.appendChild(pPercent);

            //création boutton
            let tdButton = document.createElement("td");
            qtr.appendChild(tdButton);
            let button = document.createElement("button");
            button.innerHTML = "Vote";
            button.id = quizz.questions[index].answers[j].index;
            button.className = "answer";
            tdButton.appendChild(button);
        }
        index++;
    }

    container.appendChild(sondageTable);
}

let i = 0;
let score = 0;
console.log("question : "+ (i+1));
drawQuizz(quizz);

let linesToHide = document.getElementsByTagName("tr");
hideQuestion(linesToHide);

$('.answer').on('click', function(){
    //affichage de la question suivante
    console.log(this.id + ' ' + typeof this.id);
    let questionIndex = parseInt(this.id);
    console.log(questionIndex + ' ' + typeof questionIndex);
    let linesToHide = document.getElementsByTagName("tr");
    console.log(quizz.questions[i].answers[questionIndex].isRight);
    //comptabilisation des points
    if(quizz.questions[i].answers[questionIndex].isRight == true){
        score++;
        console.log(score);
    }
    i++;
    hideQuestion(linesToHide);
    if (i >= quizz.questions.length){
        alert("Bien joué, tu as " + score + " bonnes réponses !");
    }
});

function hideQuestion(array){
    for (k = 0; k < array.length; k++){
        if(array[k].className != i){
            array[k].style.display = "none";
        }else{
            linesToHide[k].style.display = "table-row";
        }
    }
}
