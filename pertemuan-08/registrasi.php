<!DOCTYPE html>
<html>
<head>
    <title>Home - Aice Ice Cream Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <h1>Aice Ice Cream Store</h1>
    </div>
    <div id="menu">
        <a href="index.php">Home</a>
        <a href="profil.php">Profil</a>
        <a href="tentang.php">Tentang</a>
        <a href="registrasi.php">Registrasi</a>
    </div>
    <div id="isi">
        <search id="registrasi">
        <h2>Registrasi Pelanggan Aice</h2>
        <form action="registrasi.php" method="post">
            <div class="form-group">
                    <label for="nama">Nama Lengkap</label><br />

                    <input
                        class="input-form"
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama lengkap"
                        minlength="3"
                        maxlength="50"
                        required 
                    />
                </div>

                <div class="form-group">
                    <label for="email">Email</label><br />

                    <input class="input-form" type="email" id="email" name="email" placeholder="2622500001@mahasiswa.atmaluhur.ac.id" required />
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Kunjungan</label><br />

                    <input class="input-form" type="date" id="tanggal" name="tanggal" required />
                </div>

                <div class="form-group">
                    <p>Jenis Pesan</p>

                    <input type="radio" id="pertanyaan" name="jenis_pesan" value="pertanyaan" required />
                    <label for="pertanyaan">Pertanyaan</label>

                    <input type="radio" id="saran" name="jenis_pesan" value="saran"  />
                    <label for="saran">Saran</label>
                 </div>

                 <div class="form-group">
                    <label for="pesan">Pesan</label><br />

                    <textarea
                        class="input-form"
                        id="pesan"
                        name="pesan"
                        maxlength="300"
                        placeholder="Tulis pesan Anda"
                        required
                    ></textarea>
                </div>

                 <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
                <p id="formFeedback"></p>
            </form>
        </section>
    </main>
    </div>
    <div id="footer">
        2622500001_Jesica Keyra Aprillia_SI1A_UTS Pemograman Web Dasar
    </div>
    <script src="script.js"></script>
</body>
</html>