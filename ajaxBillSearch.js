function ajaxBillSearch() {
    let donorSearchName = document.getElementById('searchDonor').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'adminCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('donorSearchName=' + donorSearchName);
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById('searchResult').innerHTML = this.responseText;

        }

    }
}