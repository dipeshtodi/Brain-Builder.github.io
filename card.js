// Get the elements we need to work with
const quiz = document.querySelector('#quiz');
const submitBtn = document.querySelector('#submitBtn');
const reward = document.querySelector('#reward');
const points = document.querySelector('#points');

// Define the correct answer for each question
const answers = {
  q1: 'paris', q2: 'India',q3: 'Tokyo'
};

// Define a function to handle the form submission
function handleSubmit(event) {
  event.preventDefault(); // prevent the form from submitting and refreshing the page
  const answer = document.querySelector('#answer1').value.toLowerCase(); // get the user's answer and convert it to lowercase
  if (answer === answers.q1) { // if the answer is correct
    quiz.style.display = 'none'; // hide the quiz
    reward.style.display = 'block'; // show the reward section
    points.textContent = '3'; // update the points display
  }
  if (answer === answers.q2) { // if the answer is correct
    quiz.style.display = 'none'; // hide the quiz
    reward.style.display = 'block'; // show the reward section
    points.textContent = '3'; // update the points display
  }
  if (answer === answers.q3) { // if the answer is correct
    quiz.style.display = 'none'; // hide the quiz
    reward.style.display = 'block'; // show the reward section
    points.textContent = '3'; // update the points display
  }
}

// Add an event listener to the submit button to handle form submissions
submitBtn.addEventListener('click', handleSubmit);