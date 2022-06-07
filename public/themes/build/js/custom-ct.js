(function($) {
    var soluong,
        gianhap = 0;

    $(document).ready(function() {
        console.log($("tongtien").val());
        console.log($("#"));
        $("#soluong").keydown(function() {
            soluong = $(this).val();
        });
        $("#gianhap").keydown(function() {
            gianhap = $(this).val();
        });
        console.log(soluong, gianhap);
        $("#tongtien").val(soluong * gianhap);
    });
});