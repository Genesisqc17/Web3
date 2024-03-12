window.addEventListener("load", () => {
    let textNode = document.querySelector("input");
    textNode.addEventListener("keyup", () => {
        let textValue = textNode.value;

        let formData = new FormData();
        formData.append("text", textValue);
        
        fetch("ajax.php", {
            method: "post",
            body : formData
        })
        .then(response => response.json())
        .then(data => {
            if (data?.length > 0) {
                let parentNode = document.querySelector("#result");
                let newNode = document.createElement("div");
                newNode.innerText = data;
                parentNode.append(newNode);
            }
        })
    })
    
})