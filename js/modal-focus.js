
window.onload = function () {
    var modals = document.getElementsByClassName('modal');
    for (var modal = 0; modal < modals.length; modal++) {
        modals[modal].addEventListener('show.bs.modal', function () {
            var inputs = this.getElementsByTagName('input');
            for (var input = 0; input < inputs.length; input++) {
                inputs[input].required = true;
            }
            var selects = this.getElementsByTagName('select');
            for (var select = 0; select < selects.length; select++) {
                selects[select].required = true;
            }
            var country_select = document.getElementById('countryInput');
        });
        modals[modal].addEventListener('hide.bs.modal', function () {
            var inputs = this.getElementsByTagName('input');
            for (var input = 0; input < inputs.length; input++) {
                inputs[input].required = false;
            }
            var selects = this.getElementsByTagName('select');
            for (var select = 0; select < selects.length; select++) {
                selects[select].required = false;
            }
        });
    }
}