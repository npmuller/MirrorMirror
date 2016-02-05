$(document).ready(function (e) {
    $.bingSearch({
        // Required: query text
        query: 'query text here',
        // Required (unless you use urlBase) by Bing Search API
        appKey: '4ZMaudf3zFvWIeHmyO3P+k5a6IimVNUzrmMUOiLhVM4', 
        // Optional (defaults to the Bing Search API Web Results Query).
        // Additional information: This feature allows you to proxy through a server-side
        //                         script in order to hide your API key, which is exposed to the
        //                         world if you set it client-side in appKey. An example PHP
        //                         script is included (searchproxy.php).

        // Optional: Function is called after search results are retrieved, but before the interator is called
        beforeSearchResults: function(data) {
            // Use data.hasMore, data.resultBatchCount
        },
        // Function is called once per result in the current batch
        searchResultIterator: function(data) {
            // Use data.ID, data.Title, data.Description, data.Url, data.DisplayUrl, data.Metadata.Type (check for undefined)
            var headlineLi = "<li>" + data.Title + "</li><li>|</li>"; 
            $("#newsTicker").append(headlineLi);
        },
        // Optional: Function is called after search results are retrieved and after all instances of the interator are called
        afterSearchResults: function(data) {
            // Use data.hasMore, data.resultBatchCount
            $("#newsTicker").endlessRiver({
                speed: 50,
		pause: true,
		buttons: false
            });
        },
        // Optional: Called when there is an error retrieving results
        fail: function(data) {
            console.error("Error during bing search query:");
            console.error(data);
        }
    });
});
