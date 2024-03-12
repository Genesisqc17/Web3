<?php
    require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
<script>
    const enregistrer = () => {
        let score = document.querySelector("#pointage").value;
        let formData = new FormData;
        formData.append("pointage", score);

        fetch("ajax.php", {
            method : "post",
            body : formData
        })
        .then(response => response.json())
        .then(data => {
            let resultText = document.querySelector("#result-txt");
            resultText.innerText = data;
        })
        setTimeout(start,2000);
    }
</script>
<div class="game-container">
    <div id="result-txt"></div>
    <canvas width="960" height="576"></canvas>

    <div class="save-form-section">
            <input type="hidden" name="pointage" id="pointage">
            <button onclick="enregistrer()">Enregistrer</button>
    </div>
</div>
<?php
    require_once("partial/footer.php");