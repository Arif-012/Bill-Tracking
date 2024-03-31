function ajaxPOSearch() {
    let poSearchName = document.getElementById('searchByPO').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'adminCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('poSearchName=' + poSearchName);
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById('searchResult').innerHTML = this.responseText;

        }

    }
}


function ajaxVendorSearch() {
    let vendorSearchName = document.getElementById('searchByVendor').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'adminCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('vendorSearchName=' + vendorSearchName);
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById('searchResult').innerHTML = this.responseText;

        }

    }
}

function ajaxLocationSearch() {
    let locationSearchName = document.getElementById('searchByLocation').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'adminCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('locationSearchName=' + locationSearchName);
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById('searchResult').innerHTML = this.responseText;

        }

    }
}