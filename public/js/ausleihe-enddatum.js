var today = new Date();

// Aufruf von Seite ist Standard von 30 Tagen
var normalReturnDate = new Date();
normalReturnDate.setDate(today.getDate() + 30);
var month = normalReturnDate.getMonth() + 1;
month = correctDate(month);
var days = normalReturnDate.getDate();
days = correctDate(days);


normalReturnDate.setDate(today.getDate() + 30);

document.getElementById('enddate').value = normalReturnDate.getFullYear() + '-' + month + '-' + days;

document.querySelector('#member-status').onchange = function() {

    var end = new Date();

    var select = document.getElementById("member-status");
    var memberStatus = select.options[select.selectedIndex].value;

    getAdditionalDays(memberStatus, end);

    var dd = end.getDate();
    dd = correctDate(dd);
    var mm = end.getMonth() + 1;
    mm = correctDate(mm);

    end = end.getFullYear() + '-' + mm + '-' + dd;

    document.getElementById('enddate').value = end;

}

function correctDate(mOrD) {
    if (mOrD < 10) {
        return '0' + mOrD
    } else {
        return mOrD;
    }
}

function getAdditionalDays(memberStatus, end) {
    if (memberStatus === "") {
        end.setDate(today.getDate() + 30);
    } else if (memberStatus === "Bronze") {
        end.setDate(today.getDate() + 40);
    } else if (memberStatus === "Silber") {
        end.setDate(today.getDate() + 50);
    } else if (memberStatus === "Gold") {
        end.setDate(today.getDate() + 70);
    }
}
