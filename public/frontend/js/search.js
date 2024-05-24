// search.js

// Get search form and search icon elements
var searchForm = document.getElementById('searchForm');
var searchIcon = document.getElementById('searchIcon');

// Add click event listener to the search icon
searchIcon.addEventListener('click', function() {
    // Toggle visibility of search form
    if (searchForm.style.display === 'none') {
        searchForm.style.display = 'block';
    } else {
        searchForm.style.display = 'none';
    }
});
