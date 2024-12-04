<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miss kona Sya</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: white;
      text-align: center;
      font-family: 'Roboto Condensed', sans-serif;
      overflow: hidden;
      position: relative; 
    }

   
    video#bg-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover; 
      z-index: -1; 
    }

    #lyrics-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    #lyrics {
      font-size: 4em; 
      font-weight: bold;
      color: #fff; 
      text-shadow: 0 0 15px rgba(0, 0, 0, 0.9), 0 0 25px rgba(255, 255, 255, 0.5); 
      letter-spacing: 3px;
      word-wrap: break-word;
      display: inline-block;
      opacity: 0;
      animation: fadeIn 1s ease-out forwards;
    }

    .lyric-word {
      display: inline-block;
      opacity: 0;
      animation: fadeIn 0.5s ease-out forwards;
      margin: 0 5px;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>


  <video id="bg-video" autoplay muted loop>
    <source src="background/sadbackground.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div id="lyrics-container">
    <div id="lyrics"></div>
  </div>

  <script>
   
    const lyrics = [
      "I want a new life",
      "And I want it with you",
      "If you feel the same",
      "Don't ever let it go",
      "You gotta believe in the spirit of love",
      "It'll heal all things",
      "It won't hurt anymore",
      "No I don't believe our love's terminal",
      "I'm down on my knees begging you please come home",
      "Can we go back to the days our love was strong?",
      "Can you tell me how a perfect love goes wrong?",
      "Can somebody tell me how to get things back",
      "The way they used to be?"
    ];

    const lyricsContainer = document.getElementById("lyrics");
    let currentLineIndex = 0;

    
    const wordDelay = 286;

    
    function displayWords() {
      if (currentLineIndex < lyrics.length) {
        const currentLine = lyrics[currentLineIndex].split(" "); 

       
        lyricsContainer.innerHTML = '';

        
        currentLine.forEach((word, index) => {
          const wordElement = document.createElement("span");
          wordElement.classList.add("lyric-word");
          wordElement.textContent = word;
          lyricsContainer.appendChild(wordElement);

          
          setTimeout(() => {
            wordElement.style.opacity = 1;
          }, index * wordDelay); 
        });

        
        setTimeout(() => {
          currentLineIndex++;
          displayWords();
        }, currentLine.length * wordDelay + 1000); 
      }
    }

    
    displayWords();
  </script>

</body>
</html>
