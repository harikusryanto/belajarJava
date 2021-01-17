$(document).ready(function() {
var detik = 0;
var menit = 10;
function hitung() {
setTimeout(hitung,1000);
$('#tampilkan').html( ' Waktu ' + menit + ' menit ' + detik + ' detik ');
detik --;
if(detik < 0) {
detik = 59;
menit --;
if(menit < 0) {
menit = 0;
detik = 0;
}
}
}
hitung();
});