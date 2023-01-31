
  const form = document.querySelector("#form");
  const nameInput = document.querySelector("#input_name");
  const firstnameInput = document.querySelector("#input_firstname");
  const emailInput = document.querySelector("#input_email");
  const commentInput = document.querySelector("#input_comment");
  
  form.addEventListener("submit", function(event) {
    let isValid = true;
    
    if (nameInput.value === "") {
      nameInput.style.border = "1px solid red";
      nameInput.required=true;
      isValid = false;
    } else {
      nameInput.style.border = "1px solid #ccc";
    }
    
    if (firstnameInput.value === "") {
      firstnameInput.style.border = "1px solid red";
      firstnameInput.required=true;
      isValid = false;
    } else {
      firstnameInput.style.border = "1px solid #ccc";
    }
    
    if (emailInput.value === "") {
      emailInput.style.border = "1px solid red";
      emailInput.required=true;
      isValid = false;
    } else {
      emailInput.style.border = "1px solid #ccc";
    }
    
    if (commentInput.value === "") {
      commentInput.style.border = "1px solid red";
      commentInput.required=true;
      isValid = false;
    } else {
      commentInput.style.border = "1px solid #ccc";
    }
    
    if (!isValid) {
      event.preventDefault();
    }
  });

