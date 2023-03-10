function lookupAddress() {
    var postcode = document.querySelector("input[name=postcodeInput]").value;
    var city = document.querySelector("input[name=cityInput]");
    var country = document.querySelector("select[name=countryInput]");
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "functions/api-calls.php?postcode=" + postcode, true);
    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            city.value = response.city;
            country.value = response.state;
        }
    }
}