<!DOCTYPE html>
<html>
    <head>
        <title>Dialog Confirm</title>
    </head>
    <body>
    <script>
        var yakin = confirm("Transaksi berhasil, ingin melanjutkan transaksi?");

        if (yakin) {

            window.location.href='/index';
        } else {
            window.location.href='/film';
        }
    </script>
    </body>
</html>