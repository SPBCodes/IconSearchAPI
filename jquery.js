const url = "https://formstrap.com/IconSearchAPI/v1/search";
const data = { search: "\"vector pen\"" };
fetch(url, {
    method: "POST",
    headers: {
        "Content-Type": "application/x-www-form-urlencoded",
    },
    body: new URLSearchParams(data), 
})
    .then(response => response.json()) 
    .then(response => {
        if (response.responseCode === 200) {
            // PROCESS THE RESPONSE
        } else {
            // THERE WAS AN ERROR
            console.log(`${response.responseCode}: ${response.responseVerbose}`);
        }
    })
    .catch(error => {
        // Handle any errors
        console.error("Error:", error);
    });
