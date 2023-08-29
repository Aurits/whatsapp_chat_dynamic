<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Chatbot Application</title>
</head>

<body>
  <div class="container">
    <div class="chat-container">
       <header class="app-header">
        <h1 class="app-title">WeFed</h1>
        <div class="app-actions">
          <button class="app-action-button">Settings</button>
          <button class="app-action-button">Profile</button>
        </div>
       </header>
      <div class="chat">
        <div class="">
          <p style="text-align: center;">Welcome to the WeFed! Let's get started.</p>
        </div>
      </div>
      <div id="radioOptions" class="radio-options">
          <!-- Radio options will be dynamically added here -->
        </div>
    </div>

    <div class="input-container">
      <div id="inputGroup" class="input-group">
        <input type="text" style="min-width: 40vw" class="input-box" placeholder="Type your response..." id="userInput">
      </div>
      <button class="send-button" style="margin-right: 30px" onclick="sendUserResponse()">Send</button>
    </div>
  </div>

  <script>
    const chatContainer = document.querySelector('.chat');
    const inputGroup = document.getElementById('inputGroup');
    const radioOptions = document.getElementById('radioOptions');
    const questions = [
      { question: "What's your favorite color?", options: [] },
      { question: "Do you like dogs or cats?", options: ['Dogs', 'Cats'] },
      { question: "What's your hobby?", options: [] },
      // Add more questions here
    ];
    let currentQuestionIndex = 0;

    function showCurrentQuestion() {
      inputGroup.style.display = 'block';
      const currentQuestion = questions[currentQuestionIndex];
      const questionElement = document.createElement("div");
      questionElement.className = "message user-a";
      questionElement.innerHTML = `
        <p>${currentQuestion.question}</p>
        <span class="timestamp"><?php echo date('h:i A'); ?></span>
      `;
      chatContainer.appendChild(questionElement);

      radioOptions.innerHTML = '';
      if (currentQuestion.options.length > 0) {
        for (let option of currentQuestion.options) {
          const radioOption = document.createElement('label');
          radioOption.innerHTML = `
            <input type="radio" name="radioOption" value="${option}" />
            ${option}
          `;
          radioOptions.appendChild(radioOption);
        }
      }
    }

    function sendUserResponse() {
      const userInput = document.getElementById("userInput").value;
      const selectedOption = document.querySelector('input[name="radioOption"]:checked');

      if (userInput || selectedOption) {
        const response = userInput || selectedOption.value;
        const responseElement = document.createElement("div");
        responseElement.className = "message user-b";
        responseElement.innerHTML = `
          <p>${response}</p>
          <span class="timestamp"><?php echo date('h:i A'); ?></span>
        `;
        chatContainer.appendChild(responseElement);

        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
          showCurrentQuestion();
          document.getElementById("userInput").value = "";
        } else {
          // All questions have been asked
          inputGroup.style.display = 'none';
        }
      }
    }

    // Initial question display
    showCurrentQuestion();
  </script>
</body>

</html>


