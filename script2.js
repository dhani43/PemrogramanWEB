function TampilData(){
    var a = document.forms['biodata']['email'].value;
    var b = document.forms['biodata']['nomor'].value;
    var c = document.forms['biodata']['pesan'].value;

    var tabel = document.getElementById("Tabell");
    var row = tabel.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);

    cell1.innerHTML = a;
    cell2.innerHTML = b;
    cell3.innerHTML = c;

    alert("Data berhasil di entry");
}