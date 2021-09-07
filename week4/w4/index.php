<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedirectIndex index.php</title>
    <style>
        table.wrap {
            margin: 0;
            padding: 0;
            border-collapse: collapse;
        }
        table.wrap tbody {
            margin: 0;
            padding: 0;
        }
        table.wrap tbody tr {
            margin: 0;
            padding: 0;
        }
        table.wrap tbody tr th {
            margin: 0;
            padding: 4px;
            border: 1px solid black;
            box-sizing: border-box;
        }
        table.wrap tbody tr td {
            margin: 0;
            padding: 4px;
            border: 1px solid black;
            box-sizing: border-box;
        }
        
        input[type="text"].wrap, input[type="email"].wrap, input[type="number"].wrap, input[type="date"].wrap, select.wrap {
            text-decoration: none;
            margin: -4px 0 -4px 0;
            padding: 0;
            width: 100%;
            height: 24px;
            border: none;
            outline: none;
            border-radius: 0;
            background-color: white;
            box-sizing: border-box;
        }

        input[type="text"].wrap:focus, input[type="email"].wrap:focus, input[type="number"].wrap:focus, input[type="date"].wrap:focus, select.wrap:focus {
            text-decoration: none;
            border: none;
            outline: none;
            border-radius: 0;
            background-color: skyblue;
            box-sizing: border-box;
        }

        span.keep-right {
            width: 54%;
            margin-left: -82%;
        }

        span.keep-left {
            width: 54%;
            margin-right: -54%;
        }
    </style>
</head>
<body>
    <form method="post" action="/w4/message.php">
        <table class="wrap">
            <tbody>
                <tr>
                    <th>
                        <b>Nomor</b>
                    </th>
                    <th colspan="4">
                        <b>INFO PENDAFTARAN</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        1
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        NISN
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="number" placeholder="NISN" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="6" name="nisn">
                    </td>
                </tr>
                <tr>
                    <td>
                        2
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Asal Sekolah
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Nama Sekolah" name="asal_sekolah">
                    </td>
                </tr>
                <tr>
                    <td>
                        3
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Tahun Lulus
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                    <select class="wrap" name="tahun_lulus">
                        <?php for ($year = (int)date('Y'); 1945 <= $year; $year--): ?>
                            <option value="<?=$year;?>"><?=$year;?></option>
                        <?php endfor; ?>
                    </select>
                        <span class="keep-right">Lampirkan foto copy ijazah <input type="file" name="ijazah"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <b>DATA CALON PESERTA</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        6
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Nama Lengkap
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Nama Lengkap" name="nama_lengkap">
                    </td>
                </tr>
                <tr>
                    <td>
                        7
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        NIK
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="number" placeholder="NIK" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" name="nik">
                    </td>
                </tr>
                <tr>
                    <td>
                        8
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Tempat/Tanggal Lahir
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" id="tgl" type="date" name="tempat_tanggal_lahir">
                        <span id="stat-tgl" class="keep-right">Umur: 0 Tahun,</span>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td colspan="4">
                        Foto Copy Akte Kelahiran Yang Dilegalisir <span class="keep-left">Di Lampirkan <input type="file" name="akte"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        9
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Jenis Kelamin
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <!-- <input class="wrap" type="text" placeholder="Jenis Kelamin" name="jenis_kelamin"> -->
                        <select class="wrap" name="jenis_kelamin" id="">
                            <option value="male">Laki - laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        10
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Alamat
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Alamat" name="alamat">
                    </td>
                </tr>
                <tr>
                    <td>
                        11
                    </td>
                    <td width="192px" style="border-right: 1px solid transparent;">
                        
                    </td>
                    <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        Desa/Kel.
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Desa/Kel" name="alamat_desa">
                    </td>
                </tr>
                <tr>
                    <td>
                        12
                    </td>
                    <td width="192px" style="border-right: 1px solid transparent;">
                        
                    </td>
                    <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        Kecamatan
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Kecamatan" name="alamat_kecamatan">
                    </td>
                </tr>
                <tr>
                    <td>
                        13
                    </td>
                    <td width="192px" style="border-right: 1px solid transparent;">
                        
                    </td>
                    <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        Kabupaten
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Kabupaten" name="alamat_kabupaten">
                    </td>
                </tr>
                <tr>
                    <td>
                        14
                    </td>
                    <td width="192px" style="border-right: 1px solid transparent;">
                        
                    </td>
                    <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        Provinsi
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Provinsi" name="alamat_provinsi">
                    </td>
                </tr>
                <tr>
                    <td>
                        15
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Email Aktif
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="email" placeholder="example@email.co" name="email">
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <b>DATA ORANG TUA (lampirkan KK)</b>    
                    </td>
                </tr>
                <tr>
                    <td>
                        16
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Nomor Kartu Keluarga
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="number" placeholder="Nomor Kartu Keluarga" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" name="kk">
                    </td>
                </tr>
                <tr>
                    <td>
                        17
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Nama Ayah Kandung
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Nama Ayah Kandung" name="nama_ayah">
                    </td>
                </tr>
                <tr>
                    <td>
                        18
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Agama
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Agama Ayah Kandung" name="agama_ayah">
                    </td>
                </tr>
                <tr>
                    <td>
                        19
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Pekerjaan
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Pekerjaan Ayah Kandung" name="pekerjaan_ayah">
                    </td>
                </tr>
                <tr>
                    <td>
                        20
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Nama Ibu Kandung
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Nama Ibu Kandung" name="nama_ibu">
                    </td>
                </tr>
                <tr>
                    <td>
                        21
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Agama
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Agama Ibu Kandung" name="agama_ibu">
                    </td>
                </tr>
                <tr>
                    <td>
                        22
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Pekerjaan
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Pekerjaan Ibu Kandung" name="pekerjaan_ibu">
                    </td>
                </tr>
                <tr>
                    <td>
                        23
                    </td>
                    <td colspan="2" style="border-right: 1px solid transparent;">
                        Alamat Orang Tua
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Alamat Orang Tua" name="alamat_keluarga">
                    </td>
                </tr>
                <tr>
                    <td>
                        24
                    </td>
                    <td width="192px" style="border-right: 1px solid transparent;">
                        
                    </td>
                    <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        Desa/Kel.
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Desa/Kel" name="alamat_desa_keluarga">
                    </td>
                </tr>
                <tr>
                    <td>
                        25
                    </td>
                    <td width="192px" style="border-right: 1px solid transparent;">
                        
                    </td>
                    <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        Kecamatan
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Kecamatan" name="alamat_kecamata_keluarga">
                    </td>
                </tr>
                <tr>
                    <td>
                        26
                    </td>
                    <td width="192px" style="border-right: 1px solid transparent;">
                        
                    </td>
                    <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        Kabupaten
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Kabupaten" name="alamat_kabupaten_keluarga">
                    </td>
                </tr>
                <tr>
                    <td>
                        27
                    </td>
                    <td width="192px" style="border-right: 1px solid transparent;">
                        
                    </td>
                    <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        Provinsi
                    </td>
                    <td width="12px" style="border-left: 1px solid transparent; border-right: 1px solid transparent;">
                        :
                    </td>
                    <td width="640px" style="white-space: nowrap;">
                        <input class="wrap" type="text" placeholder="Provinsi" name="alamat_provinsi_keluarga">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="number" id="input-umur-hidden" style="display: none;" name="umur">
        <input type="submit" value="submit">
    </form>
    <script>
        const tgl = document.querySelector("input[type='date']#tgl");
        const statTgl = document.querySelector("span#stat-tgl");
        const inputUmurHidden = document.querySelector("input[type='number']#input-umur-hidden");
        tgl.addEventListener("input", e => {
            const years = new Date(tgl.value).getFullYear();
            if (String(years).length > 3) {
                const ages = new Date().getFullYear() - years;
                statTgl.textContent = `Umur: ${ages} Tahun,`;
                inputUmurHidden.value = ages;
                document.cookie = encodeURIComponent(JSON.stringify({"ages": ages}));
            }
        });
        const cookieStrings = decodeURIComponent(document.cookie);
        if (cookieStrings) {
            const cookie = JSON.parse(cookieStrings);
            if (cookie) {
                if ("ages" in cookie) {
                    statTgl.textContent = `Umur: ${cookie?.ages} Tahun,`;
                    inputUmurHidden.value = cookie?.ages;
                }
            }
        }
    </script>
</body>
</html>