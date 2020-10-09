<?php
// session_start();
// if (!isset($_SESSION["login"])) header("Location: /?attention='You must be logged in to play games'");
require_once("assets/includes/nav.php");
?>
<script src="assets/js/quiz.json"></script>
<script>
    document.title = "Quiz - Myya";
</script>
<div class="quiz">
    <h5 style="margin: 0; text-align: right">Question <span class="current"></span> of 10</h5>
    <h4 class="question" id="question"></h4>
    <div class="options radio">
        <label>
            <input type="radio" name="option" id="option1" value="">
            <span id="label1"></span>
        </label>
        <label>
            <input type="radio" name="option" id="option2" value="">
            <span id="label2"></span>
        </label>
        <label>
            <input type="radio" name="option" id="option3" value="">
            <span id="label3"></span>
        </label>
        <label>
            <input type="radio" name="option" id="option4" value="">
            <span id="label4"></span>
        </label>
    </div>
    <button class="btn btn-lg btn-primary" id="next" style="border-radius: 0; margin: 30px auto">NEXT &rsaquo;</button>
</div>
<div class="modal fade" role="dialog" id="scoreModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">          <h4 class="modal-title">Quiz Finished</h4>
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            </div>
            <div class="modal-body center" style="margin-top: 0">
                <p style="margin-top: 10px; margin-bottom: 15px; font-size: 24px">You got <span id="score"></span> question(s) correct out of 10</p>
                <div class="solution" id="solution" style="width: inherit; height: auto; text-align: left; padding: 0 20px"></div>
            </div>
            <div class="modal-footer center" style="margin-top: 0">
                <button class="btn btn-primary" data-dismiss="modal">RETAKE</button>
                <a href="games.php" class="btn btn-danger">QUIT</a>
            </div>
        </div>
    </div>
</div>
<?php
require_once("assets/includes/footer.php");
?>
<script>
    let random = (min, max) => {
        return Math.floor(Math.random() * (max - min + 1) + min)
    }

    let questions = [];

    while (questions.length < 10){
        let current = random(0, quiz.length - 1);

        if (!questions.includes(current)) questions.push(current);
    }

    var question = 0;

    let displayQuestion = (question) => {
        document.querySelector('.current').innerText = question + 1;
        document.getElementById('question').innerText = quiz[questions[question]].question;
        let options = [];
        options.push(quiz[questions[question]].answer);

        sessionStorage.setItem("answer", quiz[questions[question]].answer)

        while (options.length < 4){
            let current = random(0, quiz[questions[question]].options.length - 1);

            if (!options.includes(quiz[questions[question]].options[current])) options.push(quiz[questions[question]].options[current])
        }

        let shuffleOptions = [];

        while (shuffleOptions.length < 4){
            let current = random(0, options.length - 1);

            if (!shuffleOptions.includes(options[current])) shuffleOptions.push(options[current])
        }

        for (var option = 1; option < 5; option++){
            document.getElementById('label' + option).innerText = shuffleOptions[option - 1];
            document.querySelector('input#option' + option).value = shuffleOptions[option - 1];
        }
    }

    displayQuestion(question);

    var score = 0;

    let next = document.getElementById('next');
    next.addEventListener("click", (e) => {
        let option = document.querySelector('input[name=option]:checked');
        if (option !== null) {
            if (sessionStorage.getItem("answer") === option.value) score++;

            option.checked = false;
        }

        if (question === 8){
            e.target.innerText = "FINISH";
            e.target.classList.add('btn-danger');
            e.target.classList.remove('btn-primary')
        }

        if (question < 9) question++;
        else {
            var text = document.getElementById('solution').innerText;
            for (var i = 0; i < questions.length; i++){
                text += `<b>Question ${i + 1}: ${quiz[questions[i]].question}</b><br>`;
                text += `<i>Answer: ${quiz[questions[i]].answer}</i><br>`;
            }
            document.getElementById('solution').innerHTML= text;

            document.getElementById('score').innerText = score;
            $('.modal#scoreModal').modal('show');
        }
        displayQuestion(question);
    }, false)

    $(".modal#scoreModal").on('hidden.bs.modal', () => {
        window.location.reload()
    })
</script>
