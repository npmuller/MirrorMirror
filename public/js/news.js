$(document).ready(function (e) {
    $.ajax({
        method: 'GET',
        url: 'https://newsapi.org/v1/articles?source=google-news&sortBy=top&apiKey=ba6c7724c1be423e9ef76de0ebf6cae3',
        dataType: 'json',
        success: function(data, stat) {
            for(i = 0; i < data.articles.len; i++) {
                var article = data.articles[i];
                var headlineLi = "<li>" + article.title + "</li><li> | </li>"; 
                $("#newsTicker").append(headlineLi);
            }
            $("#newsTicker").endlessRiver({
                speed: 50,
                pause: true,
                buttons: false
            }); 
        },
        error: function(stat, err) {
            console.error('Error getting news: ' + err);
            var headlineLi = "Cannot get news at this time.  Please refresh by [DOING SOME ACTION]"; 
            $("#newsTicker").append(headlineLi);
        }
    });
});
