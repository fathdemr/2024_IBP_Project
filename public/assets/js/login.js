document.addEventListener('DOMContentLoaded', function() {
    // Show the Log In tab content and hide the Sign Up tab content
    document.getElementById('signup').style.display = 'none';
    document.getElementById('login').style.display = 'block';
});

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
        
        // Toggle active class on clicked tab
        var parentTab = tabLink.parentElement;
        parentTab.classList.add('active');
        var siblings = getSiblings(parentTab);
        siblings.forEach(function(sibling) {
            sibling.classList.remove('active');
        });
        
        // Toggle display of corresponding tab content
        var target = tabLink.getAttribute('href');
        var tabContents = document.querySelectorAll('.tab-content > div');
        tabContents.forEach(function(tabContent) {
            if (tabContent.id === target.substring(1)) {
                tabContent.style.display = 'block';
            } else {
                tabContent.style.display = 'none';
            }
        });
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
