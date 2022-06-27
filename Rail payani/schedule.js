const DatasetURLs = {
    "All Trains": "https://www.septastats.com/api/current/system/latest",
    "All Stations": "https://www.septastats.com/api/current/stations",
    "Summary Stats": "https://www.septastats.com/api/current/system/latest/stats",
    "View Details": "https://www.septastats.com/api/current/train/200/history" // Just a hard-coded train no for testing
}

// get a named dataset
function retrieveData(dataset, params) {
  $("dataset-name").html = dataset;
  $("#status-message").html(`Attempting to retrieve ${dataset}...`);

  let url = DatasetURLs[dataset];

  // Check for a valid URL
  if (url) {
      
    // Make the AJAX call...
    $.getJSON({
        url: url,
        success: (result) => {
            $("#data-display").html("Data received!");
            displayLastRequestElapsed(result.metadata.elapsed); 
            processData(result.data);
        },
        error: function (request, status, error) {
            $("#status-message").html(`An error occurred while retrieving the data!  ${error}`);
        }
     });  
  } else {
      throw `${dataset} is not a valid dataset!`;
  }
}

// Shows a status message with the number of seconds elapsed (if available)
function displayLastRequestElapsed(secondsElapsed) {
    $("#status-message").html(`Retrieved data${secondsElapsed ? " in " + secondsElapsed : ""}.`);
}

// Processes the returned data from the API and displays it in a table
// Will handle either an Array of objects with the same schema, or a single object of key/value pairs
function processData(data) {
    let dataDisplayHTML = '<table><tr class="table-header">';
    let nrow = 0;
    
    // Check what type of result set we're dealing with here...
    if (Object.prototype.toString.call(data) === '[object Array]') {
        // This is an array of rows, so we want to print the headings per record
        columns = Object.keys(data[0]);
        
        // Print the headings
        columns.forEach((heading) => {
            dataDisplayHTML += `<td>${heading}</td>`;
        });
        dataDisplayHTML += "</tr>";
        
        // Print each row in turn
        data.forEach((row) => {
            nrow++;
            dataDisplayHTML += `<tr class="table-row${nrow % 2 + 1}">`;
            columns.forEach((column) => {
                dataDisplayHTML += `<td>${row[column]}</td>`;
            });
            dataDisplayHTML += "</tr>";
        })
    } else {
        // Not an array of results, just a simple dictionary-like Object
        dataDisplayHTML += "<td>Key</td><td>Value</td><tr>";
        
        // Print each key/value pair in the object on a new row
        for (nrow = 0; nrow <= Object.keys(data).length; nrow++) {
            dataDisplayHTML += `
            <tr class="table-row${nrow % 2 + 1}">
                <td>${Object.keys(data)[nrow]}</td>
                <td>${data[Object.keys(data)[nrow]]}</td>
            </tr>
            `;
        }
    }
    
    // Don't forget the closing table tag!
    dataDisplayHTML += "</table>";
    
    // Update the data display section
    $("#data-display").html(dataDisplayHTML);
}
