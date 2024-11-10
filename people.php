<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Team</title>
  <style>
    /* General Styling */
    body {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      background-color: #e8eff1;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
    }

    /* Typing Effect Styling */
    .typing {
      font-size: 3em;
      color: #333;
      margin-bottom: 30px;
      text-align: center;
      font-weight: 600;
      border-right: .15em solid #333;
      white-space: nowrap;
      overflow: hidden;
      width: 0;
      animation: typing 3.8s steps(40, end) infinite, blink-caret .75s step-end infinite;
    }

    /* Typing Effect Keyframes */
    @keyframes typing {
      0% { width: 0; }
      40% { width: 4em; }
      60% { width: 5em; }
      100% { width: 0; }
    }

    @keyframes blink-caret {
      from, to { border-color: transparent; }
      50% { border-color: #333; }
    }

    /* Team Section Styling */
    .team-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      max-width: 1000px;
    }

    .team-row {
      display: flex;
      justify-content: center;
      gap: 30px;
      width: 100%;
      margin-bottom: 30px;
    }

    /* Team Member Card Styling */
    .team-card {
      background-color: #ffffff;
      width: 220px;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .team-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }

    .profile-pic {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 3px solid #333;
    }

    .team-name {
      font-size: 1.4em;
      font-weight: 600;
      color: #333;
      margin: 10px 0 5px;
    }

    .team-role {
      font-size: 1em;
      color: #555;
      font-style: italic;
    }
  </style>
</head>
<body>

  <h1 class="typing">Our Team</h1>
  <div class="team-section">
    <?php
      // Array of team members
      $team = [
        [
          "name" => "John Pradeep Raj J",
          "role" => "Chief Executive Officer",
          "image" => "\images\John.png"
        ],
        [
          "name" => "Harshith B",
          "role" => "Chief Technology Officer",
          "image" => "\images\Harshith.jpg"
        ],
        [
          "name" => "Rithik G",
          "role" => "Project Manager",
          "image" => "\images\Rithik.jpg"
        ],
        [
          "name" => "Kaarthik M",
          "role" => "Lead Developer",
          "image" => "\images\Karthik.png"
        ]
      ];

      // Display John's card at the top
      echo '<div class="team-row">';
      echo '<div class="team-card">';
      echo '<img src="' . $team[0]["image"] . '" alt="' . $team[0]["name"] . '" class="profile-pic">';
      echo '<p class="team-name">' . $team[0]["name"] . '</p>';
      echo '<p class="team-role">' . $team[0]["role"] . '</p>';
      echo '</div>';
      echo '</div>';

      // Display other team members in the next row
      echo '<div class="team-row">';
      for ($i = 1; $i < count($team); $i++) {
        echo '<div class="team-card">';
        echo '<img src="' . $team[$i]["image"] . '" alt="' . $team[$i]["name"] . '" class="profile-pic">';
        echo '<p class="team-name">' . $team[$i]["name"] . '</p>';
        echo '<p class="team-role">' . $team[$i]["role"] . '</p>';
        echo '</div>';
      }
      echo '</div>';
    ?>
  </div>

</body>
</html>
