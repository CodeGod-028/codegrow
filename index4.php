<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ - Variable Declaration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #121212;
    color: white;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
    display: flex;
    width: 80%;
    max-width: 800px;
    background: #1e1e1e;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
}

.sidebar {
    width: 50px;
    display: flex;
    align-items: center;
}

.nav-btn {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
}

.content {
    flex: 1;
    padding: 10px;
}

.highlight {
    color: #f39c12;
}

.code-box {
    background: #333;
    padding: 10px;
    border-radius: 5px;
    font-family: monospace;
    color: #0f0;
}

.options {
    margin-top: 15px;
}

.option {
    display: block;
    padding: 10px;
    margin: 5px 0;
    background: #222;
    border-radius: 5px;
    cursor: pointer;
}

.option input {
    margin-right: 10px;
}

.option.selected {
    background: #007acc;
}

.buttons {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
}

.submit-btn, .next-btn {
    background: #007acc;
    border: none;
    color: white;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

.submit-btn:hover, .next-btn:hover {
    background: #005f99;
}

</style>
<body>
    <div class="container">
        <div class="sidebar">
            <button class="nav-btn">☰</button>
        </div>
        <div class="content">
            <h2>MCQ - <span class="highlight">Variable Declaration</span></h2>
            <p>What does the following code represent?</p>
            <div class="code-box">
                <pre><code>int age = 25;</code></pre>
            </div>
            <div class="options">
                <label class="option">
                    <input type="radio" name="mcq" value="print">
                    Printing the age variable
                </label>
                <label class="option selected">
                    <input type="radio" name="mcq" value="store" checked>
                    Storing the value 25 in the age variable
                </label>
                <label class="option">
                    <input type="radio" name="mcq" value="constant">
                    Declaring the age as a constant
                </label>
                <label class="option">
                    <input type="radio" name="mcq" value="boolean">
                    Initializing a boolean variable
                </label>
            </div>
            <div class="buttons">
                <button class="submit-btn">Submit</button>
                <button class="next-btn">Next</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script>
      document.querySelectorAll(".option").forEach(option => {
    option.addEventListener("click", function () {
        document.querySelectorAll(".option").forEach(opt => opt.classList.remove("selected"));
        this.classList.add("selected");
        this.querySelector("input").checked = true;
    });
});

    </script>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body class="" style="background: #f2edf3;">
    <div class="container ">
        <center><h1 class="mt-10">Coding ...</h1></center>
<div class="mb-3 mt=10">
  <label for="exampleFormControlTextarea1" class="form-label">Enter Your Code here</label>
  <textarea class="form-control" id="textarea" rows="10"></textarea>
</div>
<div class="mb-3 mt=10">
  <label for="exampleFormControlTextarea1" class="form-label"> Your Code </label>
  <textarea class="form-control" id="code" rows="10" readonly></textarea>
</div>
<div class="mb-3 mt=10">
  <button class="btn btn-primary form-control" id="savebtn">Save Code</button>
</div>
    </div>
</body>
<script>
$(document).ready(function () {
    // Ensure the click event is correctly attached
    $('#savebtn').on('click', function () {
        var code = $('#textarea').val();
       $('#code').val(code);
    });
});

document.addEventListener("visibilitychange", function() {
  if (document.hidden) {
    alert("Tab is inactive");
    $('#textarea').val('');
    
  } else {

  }
});
</script>
</html>   -->