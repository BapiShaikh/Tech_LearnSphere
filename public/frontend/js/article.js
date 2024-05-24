function submitComment() {
    const commentText = document.getElementById('comment').value;
    if (commentText.trim()) {
        const commentSection = document.getElementById('comment-section');
        const newComment = document.createElement('div');
        newComment.className = 'comment';
        newComment.innerHTML = <p>${commentText}</p>;
        commentSection.appendChild(newComment);
        document.getElementById('comment').value = '';
    } else {
        alert('Please enter a comment.');
    }
}