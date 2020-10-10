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
        }
    ]
}

console.log(quizz.questions.length);
console.log(quizz.questions[1].answers.length)

function drawQuizz(quizz){
    //création titre & hr
    let sondageTitle = document.createElement("h3");
    sondageTitle.innerHTML = quizz.quizzTitle;
    let container = document.getElementById('container');
    container.appendChild(sondageTitle);
    container.appendChild(document.createElement("hr"));

    //création tableau
    let sondageTable = document.createElement("table");
    sondageTable.className = "table-accueil";
    let tbody = document.createElement("tbody")
    sondageTable.appendChild(tbody);

    //création titre question
    let i = 0;
    while(i < quizz.questions.length){
        let tr = document.createElement("tr");
        tbody.appendChild(tr);
        let td = document.createElement("td");
        tr.appendChild(td);
        let qTitle = document.createElement("h4");
        qTitle.className = "titleQuestion";
        qTitle.innerHTML = quizz.questions[i].questionTitle;
        td.appendChild(qTitle);

        // création question & boutons
        for (let j = 0; j < quizz.questions[i].answers.length; j++) {
            //div grise 100%
            let qtr = document.createElement("tr");
            tbody.appendChild(qtr);
            let qtd = document.createElement("td");
            qtr.appendChild(qtd);
            let div100 = document.createElement("div");
            div100.className = "hundred";
            qtd.appendChild(div100);

            //div bleue x%
            let divPercent = document.createElement("div");
            divPercent.className = "percent";
            divPercent.style.width = 100/quizz.questions[i].answers.length + "%";
            div100.appendChild(divPercent);

            //contenu div bleue
            let pBlue = document.createElement("p");
            pBlue.innerHTML = quizz.questions[i].answers[j].choice;
            divPercent.appendChild(pBlue);

            //affichage %age a droite
            let pPercent = document.createElement("p");
            pPercent.innerHTML= 100/quizz.questions[i].answers.length + " %";
            div100.appendChild(pPercent);

            //création boutton
            let tdButton = document.createElement("td");
            qtr.appendChild(tdButton);
            let button = document.createElement("button");
            button.innerHTML = "Vote";
            button.id = quizz.questions[i].answers[j].index;
            button.className = "answer";
            tdButton.appendChild(button);
        }
        i++;
    }




    container.appendChild(sondageTable);
}

drawQuizz(quizz);

$('.answer').on('click', function(){
    console.log(this.id);
});