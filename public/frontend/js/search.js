var searchForm = document.getElementById('searchForm');
var searchIcon = document.getElementById('searchIcon');

// Add click event listener to the search icon
searchIcon.addEventListener('click', function() {
    // Toggle visibility of search form
    if (searchForm.style.display === 'none' || searchForm.style.display === '') {
        searchForm.style.display = 'block';
    } else {
        searchForm.style.display = 'none';
    }
});

// Handle search form submission
searchForm.addEventListener('submit', function(event) {
    event.preventDefault();
    var searchInput = document.getElementById('searchInput').value;
    if (searchInput) {
        // Redirect to the search result page
        window.location.href = encodeURIComponent(searchInput);
    }
});
