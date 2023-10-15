<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create CV</title>
</head>
<body>
<form action="form.php" method="post">
    <div class="wholePage">
    <h2>Създаване на CV</h2>
    <div class="nameDiv">
        <input type="text" id="firstName" name="firstName" placeholder="Име..">
        <input type="text" id="middleName" name="middleName" placeholder="Презиме..">
        <input type="text" id="lastName" name="lastName" placeholder="Фамилия..">
    </div>
    <div class="dateDiv">
        <label for="date">Дата на раждане</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth">
    </div>
    <div class="uniDiv">
        <label for="select">Изберете университет</label>
        <select id="uniName" name="uniName">
            <option value="" selected disabled hidden>Изберете университет</option>
            <option value="TU-Varna">ТУ-Варна</option>
            <option value="BSU">ВСУ</option>
            <option value="MU">МУ</option>
        </select>
        <button type="button" onclick="openPopup('uniName')">
        <svg width="20px" height="20px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.265 4.16231L19.21 5.74531C19.3978 5.9283 19.5031 6.17982 19.5015 6.44201C19.5 6.70421 19.3919 6.9545 19.202 7.13531L17.724 8.93531L12.694 15.0723C12.6069 15.1749 12.4897 15.2473 12.359 15.2793L9.75102 15.8793C9.40496 15.8936 9.10654 15.6384 9.06702 15.2943L9.18902 12.7213C9.19806 12.5899 9.25006 12.4652 9.33702 12.3663L14.15 6.50131L15.845 4.43331C16.1743 3.98505 16.7938 3.86684 17.265 4.16231Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5.5 18.2413C5.08579 18.2413 4.75 18.5771 4.75 18.9913C4.75 19.4056 5.08579 19.7413 5.5 19.7413V18.2413ZM19.2 19.7413C19.6142 19.7413 19.95 19.4056 19.95 18.9913C19.95 18.5771 19.6142 18.2413 19.2 18.2413V19.7413ZM14.8455 6.22062C14.6904 5.83652 14.2534 5.65082 13.8693 5.80586C13.4852 5.9609 13.2995 6.39796 13.4545 6.78206L14.8455 6.22062ZM17.8893 9.66991C18.2933 9.57863 18.5468 9.17711 18.4556 8.77308C18.3643 8.36904 17.9628 8.1155 17.5587 8.20678L17.8893 9.66991ZM5.5 19.7413H19.2V18.2413H5.5V19.7413ZM13.4545 6.78206C13.6872 7.35843 14.165 8.18012 14.8765 8.8128C15.6011 9.45718 16.633 9.95371 17.8893 9.66991L17.5587 8.20678C16.916 8.35198 16.3609 8.12551 15.8733 7.69189C15.3725 7.24656 15.0128 6.63526 14.8455 6.22062L13.4545 6.78206Z" fill="#000000"></path>
            </g>
        </svg>
        </button>
    </div>
    <div class="techDiv">
        <label for="technology">Умения в технологии (multichoice):</label>
        <select id="technology" class="tech" name="technology[]" multiple>
            <option value="PHP">PHP</option>
            <option value="Laravel">Laravel</option>
            <option value="Symfony">Symfony</option>
            <option value="Zend framework">Zend framework</option>
            <option value="Ruby">Ruby</option>
            <option value="MySQL">MySQL</option>
            <option value="CSS3">CSS3</option>
        </select>
        <button type="button" onclick="openPopup('technology')">
        <svg width="20px" height="20px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.265 4.16231L19.21 5.74531C19.3978 5.9283 19.5031 6.17982 19.5015 6.44201C19.5 6.70421 19.3919 6.9545 19.202 7.13531L17.724 8.93531L12.694 15.0723C12.6069 15.1749 12.4897 15.2473 12.359 15.2793L9.75102 15.8793C9.40496 15.8936 9.10654 15.6384 9.06702 15.2943L9.18902 12.7213C9.19806 12.5899 9.25006 12.4652 9.33702 12.3663L14.15 6.50131L15.845 4.43331C16.1743 3.98505 16.7938 3.86684 17.265 4.16231Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5.5 18.2413C5.08579 18.2413 4.75 18.5771 4.75 18.9913C4.75 19.4056 5.08579 19.7413 5.5 19.7413V18.2413ZM19.2 19.7413C19.6142 19.7413 19.95 19.4056 19.95 18.9913C19.95 18.5771 19.6142 18.2413 19.2 18.2413V19.7413ZM14.8455 6.22062C14.6904 5.83652 14.2534 5.65082 13.8693 5.80586C13.4852 5.9609 13.2995 6.39796 13.4545 6.78206L14.8455 6.22062ZM17.8893 9.66991C18.2933 9.57863 18.5468 9.17711 18.4556 8.77308C18.3643 8.36904 17.9628 8.1155 17.5587 8.20678L17.8893 9.66991ZM5.5 19.7413H19.2V18.2413H5.5V19.7413ZM13.4545 6.78206C13.6872 7.35843 14.165 8.18012 14.8765 8.8128C15.6011 9.45718 16.633 9.95371 17.8893 9.66991L17.5587 8.20678C16.916 8.35198 16.3609 8.12551 15.8733 7.69189C15.3725 7.24656 15.0128 6.63526 14.8455 6.22062L13.4545 6.78206Z" fill="#000000"></path>
            </g>
        </svg></button>
    </div>
    <input type="submit" value="Submit" name="submit">
    </div>
    <p><a href="./getallCVs.html" target="_top">Go to all CVs</a></p>
</form>

<script>
   function openPopup(fieldId) {
    var customValue = prompt("Enter custom value:");
    if (customValue !== null) {
        var selectField = document.getElementById(fieldId);
        var option = document.createElement("option");
        option.text = customValue;
        option.value = customValue;
        selectField.add(option);

        if (customValue.trim() !== '') {
            sendDataToServer(customValue);
        } else {
            alert('Value cannot be empty.');
        }
    }
}

    function sendDataToServer(customValue) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                console.log(this.responseText);
            }
        };
        xhttp.open("POST", "popupajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("value=" + customValue);
    }
</script>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connection.php');
    include('form.php');
}

?>
