<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - Coding Questions</title>
  <style>
    /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #121212;
    color: white;
    text-align: center;
}

.container {
    max-width: 1000px;
    margin: auto;
    background: #1e1e1e;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.05);
}

/* Headings */
h2 {
    margin-bottom: 20px;
    color: #f39c12;
}

/* Form Styles */
form {
    display: grid;
    gap: 15px;
    text-align: left;
}

input, textarea {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    background-color: #2c2c2c;
    color: white;
    border: 1px solid #444;
    border-radius: 5px;
}

input:focus, textarea:focus {
    outline: none;
    border-color: #f39c12;
    box-shadow: 0 0 5px #f39c12;
}

/* Buttons */
button {
    background: #f39c12;
    color: white;
    padding: 10px 15px;
    border: none;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover {
    background: #d68910;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
    background: #222;
}

table th, table td {
    padding: 12px;
    border: 1px solid #333;
    text-align: left;
}

table th {
    background-color: #333;
    color: #f39c12;
}

table td {
    color: white;
}

/* Action Buttons */
.actions button {
    margin-right: 8px;
    background: #28a745;
}

.actions .delete {
    background: #dc3545;
}

.actions button:hover {
    opacity: 0.85;
}

  </style>
</head>
<body>
  <div class="container">
    <h2>Admin Panel - Coding Questions</h2>

    <form id="questionForm">
      <input type="text" id="title" placeholder="Title" required />
      <textarea id="description" placeholder="Description" rows="3" required></textarea>
      <textarea id="inputFormat" placeholder="Input Format" rows="2"></textarea>
      <textarea id="outputFormat" placeholder="Output Format" rows="2"></textarea>
      <textarea id="constraints" placeholder="Constraints" rows="2"></textarea>
      <textarea id="sampleInput" placeholder="Sample Input" rows="2"></textarea>
      <textarea id="sampleOutput" placeholder="Sample Output" rows="2"></textarea>
      <input type="hidden" id="editIndex" />
      <button type="submit">Save Question</button>
    </form>

    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="questionList">
        <!-- Questions will appear here -->
      </tbody>
    </table>
  </div>

  <script>
    let questions = [];

    const form = document.getElementById('questionForm');
    const questionList = document.getElementById('questionList');

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      const title = document.getElementById('title').value;
      const description = document.getElementById('description').value;
      const inputFormat = document.getElementById('inputFormat').value;
      const outputFormat = document.getElementById('outputFormat').value;
      const constraints = document.getElementById('constraints').value;
      const sampleInput = document.getElementById('sampleInput').value;
      const sampleOutput = document.getElementById('sampleOutput').value;
      const editIndex = document.getElementById('editIndex').value;

      const question = { title, description, inputFormat, outputFormat, constraints, sampleInput, sampleOutput };

      if (editIndex === '') {
        questions.push(question);
      } else {
        questions[editIndex] = question;
        document.getElementById('editIndex').value = '';
      }

      form.reset();
      renderQuestions();
    });

    function renderQuestions() {
      questionList.innerHTML = '';
      questions.forEach((q, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${q.title}</td>
          <td>${q.description.substring(0, 100)}...</td>
          <td class="actions">
            <button onclick="editQuestion(${index})">Edit</button>
            <button class="delete" onclick="deleteQuestion(${index})">Delete</button>
          </td>
        `;
        questionList.appendChild(row);
      });
    }

    function editQuestion(index) {
      const q = questions[index];
      document.getElementById('title').value = q.title;
      document.getElementById('description').value = q.description;
      document.getElementById('inputFormat').value = q.inputFormat;
      document.getElementById('outputFormat').value = q.outputFormat;
      document.getElementById('constraints').value = q.constraints;
      document.getElementById('sampleInput').value = q.sampleInput;
      document.getElementById('sampleOutput').value = q.sampleOutput;
      document.getElementById('editIndex').value = index;
    }

    function deleteQuestion(index) {
      if (confirm('Are you sure you want to delete this question?')) {
        questions.splice(index, 1);
        renderQuestions();
      }
    }
  </script>
</body>
</html>
