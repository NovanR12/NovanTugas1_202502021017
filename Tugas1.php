<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Workshop Pemrograman Web - UHW Perbanas</title>
</head>
<body>

    <header>
        <h1>Workshop Pemrograman Web 2026</h1>
        <p>Sistem Informasi - Universitas Hayam Wuruk Perbanas</p>
    </header>

    <nav>
        <a href="#deskripsi">Deskripsi</a> | 
        <a href="#jadwal">Jadwal Kegiatan</a> | 
        <a href="#pendaftaran">Formulir Pendaftaran</a> | 
        <a href="#kontak">Kontak</a>
    </nav>

    <hr>

    <main>
        
        <section id="deskripsi">
            <h2>Informasi Kegiatan</h2>
            
            <article>
                <h3>Tentang Workshop</h3>
                <p>Workshop ini dirancang untuk membekali mahasiswa dengan keahlian dasar hingga mahir dalam membangun halaman web terstruktur dan bermakna menggunakan standar HTML5 Semantik.</p>
            </article>

            <figure>
                <img src="audit.jpg" alt="Auditorium UHW Perbanas" width="500">
                <figcaption>Laboratorium Komputer Program Studi Sistem Informasi UHW Perbanas.</figcaption>
            </figure>
        </section>

        <hr>

        <section id="jadwal">
            <h2>Jadwal Kegiatan</h2>
            <table border="1" cellpadding="8" cellspacing="0">
                <caption>Rangkaian Sesi Workshop Pemrograman Web</caption>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Waktu</th>
                        <th>Nama Kegiatan</th>
                        <th>Pemateri / Penanggung Jawab</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>08.00 - 10.00</td>
                        <td>Sesi 1: Pengenalan HTML5 & Elemen Semantik</td>
                        <td>Heri Supriyanto</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>10.15 - 12.00</td>
                        <td>Sesi 2: Praktikum Tabel, Media & Formulir Web</td>
                        <td>Tim Asisten Dosen</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Total Durasi Kegiatan</td>
                        <td>4 Jam</td>
                    </tr>
                </tfoot>
            </table>
        </section>

        <hr>

        <section id="pendaftaran">
            <h2>Formulir Pendaftaran</h2>
            <form action="proses.php" method="post">
                
                <!-- Menggunakan tabel sederhana agar label dan input sejajar/lurus -->
                <table border="0" cellpadding="5">
                    <tr>
                        <td><label for="nama">Nama Lengkap</label></td>
                        <td>:</td>
                        <td><input type="text" id="nama" name="nama" required></td>
                    </tr>
                    <tr>
                        <td><label for="nim">NIM</label></td>
                        <td>:</td>
                        <td><input type="text" id="nim" name="nim" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Alamat Email</label></td>
                        <td>:</td>
                        <td><input type="email" id="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="telepon">Nomor Telepon</label></td>
                        <td>:</td>
                        <td><input type="tel" id="telepon" name="telepon" required></td>
                    </tr>
                    <tr>
                        <td><label for="prodi">Program Studi</label></td>
                        <td>:</td>
                        <td>
                            <select id="prodi" name="prodi" required>
                                <option value="">-- Pilih Program Studi --</option>
                                <option value="si">Sistem Informasi</option>
                                <option value="ti">Teknik Informatika</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <br>

                <fieldset style="width: 300px;">
                    <legend>Jenis Kelamin</legend>
                    <input type="radio" id="laki-laki" name="jenis_kelamin" value="L" required>
                    <label for="laki-laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="P" required>
                    <label for="perempuan">Perempuan</label>
                </fieldset>

                <br>

                <fieldset style="width: 300px;">
                    <legend>Pilihan Sesi Sesuai Minat</legend>
                    <input type="checkbox" id="sesi1" name="sesi[]" value="sesi1">
                    <label for="sesi1">Sesi 1: HTML5 & Semantik</label><br>
                    <input type="checkbox" id="sesi2" name="sesi[]" value="sesi2">
                    <label for="sesi2">Sesi 2: Tabel & Formulir</label>
                </fieldset>

                <br>

                <p>
                    <label for="alasan">Alasan Mengikuti Kegiatan:</label><br>
                    <textarea id="alasan" name="alasan" rows="4" cols="40" required></textarea>
                </p>

                <p>
                    <input type="checkbox" id="persetujuan" name="persetujuan" value="setuju" required>
                    <label for="persetujuan">Saya menyetujui seluruh ketentuan kegiatan yang berlaku.</label>
                </p>

                <p>
                    <button type="submit">Daftar Sekarang</button>
                </p>
            </form>
        </section>

        <hr>

        <aside>
            <h2>Pengumuman Penting</h2>
            <p>Batas akhir pendaftaran kegiatan ini adalah tanggal 30 September 2026. Kuota terbatas untuk 50 peserta pertama.</p>
        </aside>

    </main>

    <hr>

    <footer id="kontak">
        <p>&copy; 2026 Program Studi Sistem Informasi - UHW Perbanas</p>
        <p>
            Informasi lebih lanjut: 
            <a href="mailto:heri.supriyanto@hayamwuruk.ac.id">Kirim Email Pengampu</a> | 
            <a href="https://www.perbanas.ac.id" target="_blank" rel="noopener noreferrer">Kunjungi Website UHW Perbanas</a>
        </p>
    </footer>

</body>
</html>