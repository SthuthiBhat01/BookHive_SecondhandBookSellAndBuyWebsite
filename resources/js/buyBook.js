function buyBook(bookId) {
    $.ajax({
        url: '/buy/' + bookId,
        type: 'POST',
        success: function(response) {
            console.log(response);
            // Handle the response here
        },
        error: function(error) {
            console.log(error);
            // Handle the error here
        }
    });
}