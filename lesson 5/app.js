console.log('hello')

document.body.onload = () => {
    console.log('hello onload')
    let request = new XMLHttpRequest;
    request.open('GET', './header.html', true)
    request.send()
    request.onreadystatechange = function () {
        if (request.readyState === 4)
        if (request.status === 200) {
            console.log(request.responseText)
            document.body.innerHTML = request.responseText + document.body.innerHTML
        }
    }
    let requestfoot = new XMLHttpRequest;
    requestfoot.open('GET', './footer.html', true)
    requestfoot.send()
    requestfoot.onreadystatechange = function () {
        if (requestfoot.readyState === 4)
        if (requestfoot.status === 200) {
            console.log(request.responseText)
            document.body.innerHTML = document.body.innerHTML + requestfoot.responseText
        }
    }
}