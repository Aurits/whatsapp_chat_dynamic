<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>FeedBack Chatbot Application</title>
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
      <header class="app-header" style="position: fixed; top: 20px; right: 20px; left: 20px; min-width: initial; border-top-right-radius:10px; border-top-left-radius: 10px; margin-bottom: 10px">
        <a href="index.php" style="text-decoration: none; color: white">
          <h1 class="app-title">SurveyMe</h1>
        </a>
        <div class="app-actions">
          <button class="app-action-button" onclick="showSettings()">Settings</button>
          <button class="app-action-button" onclick="showProfile()">Profile</button>
        </div>
      </header>
      <div class="chat-content">
        <div class="chatheader">
          <div class="" style="margin-top: 40px; text-align: center;">
             <h3>Welcome to SurveyMe!</h3>
              <p style="color: #075e54">Help us improve by answering a few quick questions.</p>
              <p style="color: #075e54">Your feedback is confidential and valuable to us.</p>
              <p>Let's get started!</p>
          </div>
        </div>
        <div class="chat">


          <!-- This is where the magic happens -->
          


        </div>
        <div id="radioOptions" class="radio-options">
          <!-- Radio options will be dynamically added here -->
        </div>
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
      <header class="app-header" style="position: fixed; top: 20px; right: 20px; left: 20px; min-width: initial; border-top-right-radius:10px; border-top-left-radius: 10px; margin-bottom: 10px">
        <a href="index.php" style="text-decoration: none; color: white">
          <h1 class="app-title">WeFed</h1>
        </a>
        <div class="app-actions">
          <button class="app-action-button" onclick="showSettings()">Settings</button>
          <button class="app-action-button" onclick="showProfile()">Profile</button>
        </div>
      </header>
      <br>
      <br>
      <!-- Settings content -->
      <h2 class="page-title">Settings</h2>
      <p class="page-description">Welcome to the Settings page,<br>where you can customize your app experience.</p>
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
      <header class="app-header" style="position: fixed; top: 20px; right: 20px; left: 20px; min-width: initial; border-top-right-radius:10px; border-top-left-radius: 10px; margin-bottom: 10px">
        <a href="index.php" style="text-decoration: none; color: white">
          <h1 class="app-title">WeFed</h1>
        </a>
        <div class="app-actions">
          <button class="app-action-button" onclick="showSettings()">Settings</button>
          <button class="app-action-button" onclick="showProfile()">Profile</button>
        </div>
      </header>
      <br>
      <br>
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
  let questions = [];
  let currentSection = 1; // Track the current section
  let currentQuestionIndex = 0;
  let responses = {}; // Store user responses

  async function fetchQuestions() {
    const response = await fetch('fetch_questions.php');
    questions = await response.json();
    showCurrentQuestion();
  }

  function showCurrentQuestion() {
    inputGroup.style.display = 'block';
    const currentQuestion = questions[currentQuestionIndex];
    const questionElement = document.createElement("div");
    questionElement.className = "message user-a";
    questionElement.innerHTML = `
      <p>${currentQuestion.QuestionText}</p>
      <span class="timestamp">${new Date().toLocaleTimeString()}</span>
    `;
    chatContainer.appendChild(questionElement);

    radioOptions.innerHTML = '';
    if (currentQuestion.options.length > 0) {
      for (let option of currentQuestion.options) {
        const radioOption = document.createElement('label');
        radioOption.innerHTML = `
          <input type="radio" name="radioOption" value="${option.OptionText}" />
          ${option.OptionText}
        `;
        radioOptions.appendChild(radioOption);
      }

      inputGroup.style.display = 'none';
      // sendButton.style.display = 'none';
    }

    if (currentQuestionIndex == questions.length - 1) {
      // sendButton.style.display = 'none';
      // submitButtonContainer.style.display = 'block';
    } else {
      sendButton.style.display = 'block';
      submitButtonContainer.style.display = 'none';
    }
  }

  const userResponses = [];

function sendUserResponse() {
  const userInput = document.getElementById("userInput").value;
  const selectedOption = document.querySelector('input[name="radioOption"]:checked');

  if (userInput || selectedOption) {
    const response = userInput || selectedOption.value;
    const questionId = questions[currentQuestionIndex].QuestionID; // Get the QuestionID

    // Find the OptionID based on the selected option text
    let optionId = null;
    if (selectedOption) {
      const selectedOptionText = selectedOption.value;
      const options = questions[currentQuestionIndex].options;
      for (let i = 0; i < options.length; i++) {
        if (options[i].OptionText === selectedOptionText) {
          optionId = options[i].OptionID;
          break;
        }
      }
    }

    // Store the response, QuestionID, and OptionID in the userResponses array
    userResponses[currentQuestionIndex] = {
      ResponseText: response,
      QuestionID: questionId,
      OptionID: optionId
    };

    const responseElement = document.createElement("div");
    responseElement.className = "message user-b";
    responseElement.innerHTML = `
      <p>${response}</p>
      <span class="timestamp">${new Date().toLocaleTimeString()}</span>
    `;
    chatContainer.appendChild(responseElement);

    currentQuestionIndex++;

    if (currentQuestionIndex < questions.length) {
      if (currentQuestionIndex % 3 === 0) {
        // Clear the chat container after every two questions
        clearChatContainer();
      }
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



 const radioOptionsContainer = document.getElementById('radioOptions');
  radioOptionsContainer.addEventListener('change', function (event) {
      const selectedOption = event.target;
      if (selectedOption.type === 'radio' && selectedOption.checked) {
          // User has selected an option, send the response
          sendUserResponse();
      }
  });


  // Function to clear the chat container
function clearChatContainer() {
  chatContainer.innerHTML = ''; // This will remove all child elements from the chat container
}




  function flattenArray(inputArray) {
    const flatArray = [];
    for (const value of inputArray) {
      if (Array.isArray(value)) {
        flatArray.push(...flattenArray(value));
      } else {
        flatArray.push(value);
      }
    }
    return flatArray;
  }

  function submitForm() {
    // Flatten the userResponses array
    const flatUserResponses = flattenArray(userResponses);

    // Log the flattened array to the browser console
    console.log(flatUserResponses);

    // Send the flattened array to the server for storage
    fetch('save_responses.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(flatUserResponses)
    })
      .then(response => response.json())
      .then(data => {
        if (data.error) {
          console.error('Error:', data.error);
        } else {
          console.log(data); // Handle success
          window.location.href='./thankyou.php';
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }

  // Initial question display
  fetchQuestions();
</script>


</body>

</html>