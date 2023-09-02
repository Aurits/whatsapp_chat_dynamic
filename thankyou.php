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

    function startNewSurvey() {
      window.location.href='./';
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

    <div class="thankyou-container">
      <header class="app-header" style="position: fixed; top: 20px; right: 20px; left: 20px; min-width: initial; border-top-right-radius:10px; border-top-left-radius: 10px; margin-bottom: 10px">
        <a href="index.php" style="text-decoration: none; color: white">
          <h1 class="app-title">SurveyMe</h1>
        </a>
        <div class="app-actions">
          <button class="app-action-button" onclick="showSettings()">Settings</button>
          <button class="app-action-button" onclick="showProfile()">Profile</button>
        </div>
      </header>
      <div class="chat-content" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 80vh;">
    <div class="chatheader">
        <div style="text-align: center;">
            <h3>Thank You for Your Feedback!</h3>
            <p style="color: #075e54; margin: 10px;">We appreciate your valuable input.</p>
            <p style="color: #075e54; margin: 10px;">Your feedback helps us improve.</p>
            <p style="margin-top: 20px;">Would you like to participate in another survey?</p>
            <button style="padding: 10px 20px; background-color: #075e54; color: white; border: none; cursor: pointer; margin-top: 10px; border-radius: 10px;" onclick="startNewSurvey()">Start New Survey</button>
        </div>
    </div>
</div>

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




</body>

</html>