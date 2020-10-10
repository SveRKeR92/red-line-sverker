const quizz = {
    quizzTitle: "Koh Lanta",
    questions: [
        {
            questionTitle: "Quelle équipe est allée au conseil ?",
            answers: [
                {choice: "Les Jaunes", isRight: false},
                {choice: "Les Rouges", isRight: true},
            ]
        },
        {
            questionTitle: "Qui a été éliminé ce vendredi ?",
            answers: [
                {choice: "Sebastien", isRight: true},
                {choice: "Marie-France", isRight: false},
                {choice: "Fabrice", isRight: false},
                {choice: "Bertrand-Kamal", isRight: false}
            ]
        }
    ]
}

console.log(quizz);