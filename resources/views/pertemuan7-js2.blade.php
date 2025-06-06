<html>
<head>
    <title>Form Pendaftaran ISE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function formvalidation() {
            var nrp = document.getElementById("nrp").value.trim();
            var nama = document.getElementById("nama").value.trim();

            if (nrp.length == 0) { //nrp harus ada isinya

                Swal.fire({
                title: "Pesan Kesalahan",
                text: "NRP harus diisi",
                icon: "error"
                });
                document.getElementById("nrp").focus();
                return false;
            }

            if (nama.length === 0) { //nama harus ada isinya
                Swal.fire({
                    title: "Pesan Kesalahan",
                    text: "Nama harus diisi",
                    icon: "error"
                });
                document.getElementById("nama").focus();
                return false;
            }

            if (/\d/.test(nama)) { // nama tidak boleh mengandung angka
                Swal.fire({
                    title: "Pesan Kesalahan",
                    text: "Nama tidak boleh mengandung angka",
                    icon: "error"
                });
                document.getElementById("nama").focus();
                return false;
            }

            // kalau semua diubah, returnnya true
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h3>Form Pendaftaran ISE</h3>
        <form id="frmpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation();">
            NRP :
            <input type="text" id="nrp" class="form-control" placeholder="Silahkan Isi NRP, 10 digit, Harus Berupa Angka, dan Tidak Boleh Kosong" name="nrp">
            <br>
            Nama :
            <input type="text" id="nama" class="form-control" placeholder="Silahkan Isi Nama, Minimal 1 digit, dan Tidak Boleh Kosong" name="nama">
            <br>
            <input type="submit" class="btn btn-primary" value="Daftar">
        </form>
    </div>
    </body>
</html>
