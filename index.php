<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Chatbot Application</title>
  <style>
  </style>

  <script>
   // Show the Settings page and hide other pages
    function showSettings() {
      document.querySelector('.chat-container').style.display = 'none';
      document.querySelector('.settings-container').style.display = 'block';
      document.querySelector('.profile-container').style.display = 'none';
      document.querySelector('.input-container').style.display = 'none';
    }

    // Show the Profile page and hide other pages
    function showProfile() {
      document.querySelector('.chat-container').style.display = 'none';
      document.querySelector('.settings-container').style.display = 'none';
      document.querySelector('.profile-container').style.display = 'block';
      document.querySelector('.input-container').style.display = 'none';
    }
  </script>
</head>

<body>
  <div class="container">
        
        <div class="chat-container">
          <header class="app-header">
            <a href="index.html" style="text-decoration: none; color: white"><h1 class="app-title">WeFed</h1></a>
            <div class="app-actions">
           <button class="app-action-button" onclick="showSettings()">Settings</button>
              <button class="app-action-button" onclick="showProfile()">Profile</button>
            </div>
          </header>
          <div class="chat">
            <div class="">
              <p style="text-align: center;">Welcome to WeFed! Let's get started.</p>
            </div>
          </div>
          <div id="radioOptions" class="radio-options">
            <!-- Radio options will be dynamically added here -->
          </div>
        </div>

        <div class="input-container">
          <div id="inputGroup" class="input-group">
            <input type="text" style="min-width: 40vw" class="input-box" placeholder="Type your response..." id="userInput" onkeydown="if (event.key === 'Enter') { event.preventDefault(); sendUserResponse(); }" />
          </div>
          <button class="send-button" style="margin-right: 30px" id="sendButton" onclick="sendUserResponse()">
            Send
          </button>
        </div>

        <div id="submitButtonContainer" class="input-container" style="display: none;">
          <button class="send-button" style="margin-right: 30px" id="submitButton" onclick="submitForm()">
            Submit
          </button>
        </div>

        <!-- Settings page -->
        <div class="settings-container" style="display: none;">
          <header class="app-header">
            <a href="index.html" style="text-decoration: none; color: white"><h1 class="app-title">WeFed</h1></a>
            <div class="app-actions">
           <button class="app-action-button" onclick="showSettings()">Settings</button>
              <button class="app-action-button" onclick="showProfile()">Profile</button>
            </div>
          </header>
          <!-- Settings content -->
          <h2 class="page-title">Settings</h2>
          <p class="page-description">Welcome to the Settings page, where you can customize your app experience.</p>
          <div class="section">
            <h3 class="section-title">General Settings</h3>
            <p class="section-description">Adjust the general settings that suit your preferences:</p>
            <ul class="settings-list">
              <li class="setting">Theme: Choose between light and dark themes.</li>
              <li class="setting">Language: Set your preferred language for the app.</li>
            </ul>
          </div>
          <div class="section">
            <h3 class="section-title">Notification Settings</h3>
            <p class="section-description">Manage your notification preferences:</p>
            <ul class="settings-list">
              <li class="setting">Push Notifications: Enable or disable push notifications.</li>
              <li class="setting">Email Notifications: Opt in or out of email notifications.</li>
            </ul>
          </div>
          <!-- Add more content as needed -->
        </div>

        <!-- Profile page -->
        <div class="profile-container" style="display: none;">
          <header class="app-header">
            <a href="index.html" style="text-decoration: none; color: white"><h1 class="app-title">WeFed</h1></a>
            <div class="app-actions">
           <button class="app-action-button" onclick="showSettings()">Settings</button>
              <button class="app-action-button" onclick="showProfile()">Profile</button>
            </div>
          </header>
          <!-- Profile content -->
          <h2 class="page-title">Your Profile</h2>
          <p class="page-description">Welcome to your profile page, where you can view and manage your information.</p>
          <div class="profile-details">
            <img src="background.png" width="70px" height="70px" style="border-radius: 48%" alt="Your Profile Picture" class="profile-picture">
            <div class="profile-info">
              <h3 class="profile-name">John Doe</h3>
              <p class="profile-field">Email: john.doe@example.com</p>
              <p class="profile-field">Location: New York City, USA</p>
              <p class="profile-bio">Bio: Exploring the world one code at a time.</p>
            </div>
          </div>
          <h3 class="section-title">Edit Profile</h3>
          <p class="section-description">Update your profile details:</p>
          <form class="edit-profile-form">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-input" value="John Doe">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-input" value="john.doe@example.com">
            <label for="location" class="form-label">Location:</label>
            <input type="text" id="location" name="location" class="form-input" value="New York City, USA">
            <label for="bio" class="form-label">Bio:</label>
            <textarea id="bio" name="bio" class="form-textarea">Exploring the world one code at a time.</textarea>
            <button class="update-button">Update Profile</button>
          </form>
          <!-- Add more content as needed -->
        </div>

  </div>

  <script>
    const chatContainer = document.querySelector('.chat');
    const inputGroup = document.getElementById('inputGroup');
    const userInput = document.getElementById('userInput');
    const radioOptions = document.getElementById('radioOptions');
    const sendButton = document.getElementById('sendButton');
    const submitButton = document.getElementById('submitButton');
    const submitButtonContainer = document.getElementById('submitButtonContainer');
    const questions = [{
        question: "What's your favorite color?",
        options: []
      },
      {
        question: "Do you like dogs or cats?",
        options: ['Dogs', 'Cats']
      },
      {
        question: "What's your hobby?",
        options: []
      },
      // Add more questions here
    ];
    let currentQuestionIndex = 0;
    let allQuestionsAsked = false;

    function showCurrentQuestion() {
      inputGroup.style.display = 'block';
      const currentQuestion = questions[currentQuestionIndex];
      const questionElement = document.createElement("div");
      questionElement.className = "message user-a";
      questionElement.innerHTML = `
        <p>${currentQuestion.question}</p>
        <span class="timestamp">${new Date().toLocaleTimeString()}</span>
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

      if (currentQuestionIndex == questions.length - 1) {
        allQuestionsAsked = true;
        // sendButton.style.display = 'none';

        // submitButtonContainer.style.display = 'block';
      } else {
        sendButton.style.display = 'block';
        submitButtonContainer.style.display = 'none';
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
          <span class="timestamp">${new Date().toLocaleTimeString()}</span>
        `;
        chatContainer.appendChild(responseElement);

        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
          showCurrentQuestion();
          document.getElementById("userInput").value = "";
        } else {
          // All questions have been asked
          inputGroup.style.display = 'none';
          sendButton.style.display = 'none';
          submitButtonContainer.style.display = 'block';
        }
      }
    }

    function submitForm() {
      console.log("Form submitted");
    }

    // Initial question display
    showCurrentQuestion();
  </script>
</body>

</html>