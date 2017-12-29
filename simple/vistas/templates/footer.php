<footer></footer>

<script>
    function sn(number, add, x) {
        if (add === undefined) {
            add = 1;
        }
        var collapsibles = $('.collapse');
        collapsibles.collapse('hide');

        var aAbrir = number + add;
        $(collapsibles[aAbrir]).collapse('show');

    }

//    function productoSubmit() {
//        var forma = '#productoForma';
//        var topost = $(forma).serialize();
//
//        $.post($(forma).attr('action'), topost, function (data) {
//                console.log(data);
////                toastr.success(JSON.stringify(data));
//            }
//        );
//    }
</script>