window.addEventListener("DOMContentLoaded", () => {
  // palindrome
  const palindromeBtn = document.getElementById("palindrome-btn");
  const isPalindrome = document.getElementById("is-palindrome");

  palindromeBtn.addEventListener("click", () => {
    var input = document.getElementById("palindrome-input");
    fetch(`localhost/api?string=${input}`)
      .then((response) => response.json())
      .then((data) => (isPalindrome.innerHTML = data.isPalindrome));
  });
});
