window.addEventListener("DOMContentLoaded", () => {
  // palindrome
  const palindromeBtn = document.getElementById("palindrome-btn");
  const isPalindrome = document.getElementById("is-palindrome");

  palindromeBtn.addEventListener("click", () => {
    var input = document.getElementById("palindrome-input");
    fetch(`localhost/api/palindrome?string=${input}`)
      .then((response) => response.json())
      .then((data) => (isPalindrome.innerHTML = data.isPalindrome));
  });

  // christmas
  const christBtn = document.getElementById("christ-btn");
  const days = document.getElementById("days");

  christBtn.addEventListener("click", () => {
    fetch(`localhost/api/christmas`)
      .then((response) => response.json())
      .then((data) => (days.innerHTML = data.days));
  });
});
