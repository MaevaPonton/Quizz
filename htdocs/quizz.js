

function changeColor(event) {

    const formulaire = document.querySelector ('#quiz-header')

    const formData = new FormData(formulaire);

    const formProps = Object.fromEntries(formData);

    const reponseTrue = document.querySelector('#a');
    const reponseFalse = document.querySelector('#b');
    const button = document.querySelector ('#submit')


    if (formProps.answer == '1') {
        button.style.backgroundColor = 'green ';
    }
    if (formProps.answer == '0') {
        button.style.backgroundColor = 'red ';
    }

    header('location:quizz.php');
}

const interval = window.setInterval(changeColor, 2000);