function validateData(formSelector, constraints) {
     var form = document.querySelector(formSelector);
     form.addEventListener("submit", function (ev) {
          ev.preventDefault();
          handleFormSubmit(form, constraints);
     });

     var inputs = document.querySelectorAll("input, textarea, select")
     for (var i = 0; i < inputs.length; ++i) {
          inputs.item(i).addEventListener("change", function (ev) {
               var errors = validate(form, constraints) || {};
               showErrorsForInput(this, errors[this.name])
          });
     }
}

function handleFormSubmit(form, constraints) {
     var errors = validate(form, constraints);
     showErrors(form, errors || {});
     if (!errors) {
          form.submit();
     }
}

function showErrors(form, errors) {
     _.each(form.querySelectorAll("input[name], select[name]"), function (input) {
          showErrorsForInput(input, errors && errors[input.name]);
     });
}

function showErrorsForInput(input, errors) {
     var formGroup = closestParent(input.parentNode, "form-group");
     if (!formGroup) return;
     var messages = formGroup.querySelector(".messages");

     resetFormGroup(formGroup);
     if (errors) {
          input.classList.add("border-danger");
          _.each(errors, function (error) {
               addError(messages, error);
          });
     } else {
          input.classList.remove("border-danger");
     }
}

function closestParent(child, className) {
     if (!child || child == document) {
          return null;
     }
     if (child.classList.contains(className)) {
          return child;
     } else {
          return closestParent(child.parentNode, className);
     }
}

function resetFormGroup(formGroup) {
     formGroup.classList.remove("has-error");
     formGroup.classList.remove("has-success");
     _.each(formGroup.querySelectorAll(".help-block.error"), function (el) {
          el.parentNode.removeChild(el);
     });
}

function addError(messages, error) {
     var block = document.createElement("p");
     block.classList.add("help-block");
     block.classList.add("error");
     block.innerText = error;
     messages.appendChild(block);
}

function showSuccess() {
     alert("Success!");
}


// constraintsEx:
// var constraints = {
//      Name: {
//           presence: {
//                allowEmpty: false,
//                message: "^Tên danh mục Không được để trống!"
//           }
//      },
//      Slug: {
//           presence: {
//                allowEmpty: false,
//                message: "^Slug Không được để trống!"
//           }
//      },
// };
