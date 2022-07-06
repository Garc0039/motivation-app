function drawPage() {
    chrome.tabs.create({
        url: "http://www.example.com/", selected: true, active: false
    });
}

chrome.tabs.create({ url:'http://localhost/upload', selected: true, active: false});
