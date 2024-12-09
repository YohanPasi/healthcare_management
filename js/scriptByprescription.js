window.onload = function(){

    alert("Welcome to Find my Order Medicine Page !");
};




document.addEventListener('DOMContentLoaded', function() {
    var selectImageBtn = document.querySelector('.select-image');
    selectImageBtn.addEventListener('click', function() {
      var fileUpload = document.querySelector('.file-upload');
      fileUpload.click();
    });
  
    var fileInput = document.querySelector('.file-input');
    fileInput.addEventListener('change', function() {
      var fileName = document.querySelector('.file-name');
      fileName.textContent = this.files[0].name;
    });
  });
  