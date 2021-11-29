$(document).ready(function() {
    // setting open and close
    $(document).on('click', '.ti-settings', function() {
        $('.sub-title-2').toggle();
    });

    $(document).on('click', '.send-btn', function() {
        $.ajax ({
            url: "insert-chat.php",
            method: "POST",
            data: {

            }
        });
    });
});

const searchBar = document.querySelector(".users .nav .search"),
searchBtn = document.querySelector(".users .nav .btn-search"),
usersList = document.querySelector(".users .list-user");

searchBar.onkeyup = () => {
    let searchTerm = searchBar.value;
    if (searchTerm != '') {
        searchBar.classList.add(".list-user")
    }
    else {
        searchBar.classList.remove(".list-user")
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "search.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "user.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(!searchBar.classList.contains(".list-user")) {
                    usersList.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 500);


const form = document.querySelector(".typing-area"),
sendBtn = form.querySelector("button"),
inputField = form.querySelector(".input-field");

form.onsubmit = (e) => {
    e.preventDefault();
}

sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "insert-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                inputField.value = "";
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

const chatBox = document.querySelector(".middle");

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "get-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);