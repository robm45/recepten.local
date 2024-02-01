async function injectHTML(filePath,elem) {
    try {
        const response = await fetch(filePath);
        if (!response.ok) {
            return;
        }
        const text = await response.text();
        elem.innerHTML = text;
    } catch (err) {
        console.error(err.message);
    }
}

injectHTML("./header.html",
    document.querySelector(".header")
);