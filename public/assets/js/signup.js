document.querySelectorAll('.form input, .form textarea').forEach(function(input) {
  input.addEventListener('keyup', function(e) {
      var label = input.previousElementSibling;
      if (e.type === 'keyup') {
          if (input.value === '') {
              label.classList.remove('active', 'highlight');
          } else {
              label.classList.add('active', 'highlight');
          }
      }
  });
  
  input.addEventListener('blur', function(e) {
      var label = input.previousElementSibling;
      if (input.value === '') {
          label.classList.remove('active', 'highlight');
      } else {
          label.classList.remove('highlight');
      }
  });
  
  input.addEventListener('focus', function(e) {
      var label = input.previousElementSibling;
      if (input.value !== '') {
          label.classList.add('highlight');
      }
  });
});

document.querySelectorAll('.tab a').forEach(function(tabLink) {
  tabLink.addEventListener('click', function(e) {
      e.preventDefault();
      
      var tabParent = tabLink.parentElement;
      tabParent.classList.add('active');
      
      var siblings = getSiblings(tabParent);
      siblings.forEach(function(sibling) {
          sibling.classList.remove('active');
      });
      
      var target = tabLink.getAttribute('href');
      var tabContents = document.querySelectorAll('.tab-content > div');
      
      tabContents.forEach(function(tabContent) {
          if (tabContent !== document.querySelector(target)) {
              tabContent.style.display = 'none';
          }
      });
      
      document.querySelector(target).style.display = 'block';
  });
});

// Function to get siblings of an element
function getSiblings(elem) {
  var siblings = [];
  var sibling = elem.parentNode.firstChild;
  for (; sibling; sibling = sibling.nextSibling) {
      if (sibling.nodeType === 1 && sibling !== elem) {
          siblings.push(sibling);
      }
  }
  return siblings;
}



