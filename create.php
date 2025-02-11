<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tambah Data</title>
    <style>
        .section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0px;
            font-family: Arial, sans-serif;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"] {

            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            margin: 115px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
  </head>
  <body>
    <script src="js/bootstrap.min.js"></script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
    <a class="navbar-brand" href="#"><b>Tambah Data</b></a>
  </nav>
  <div class="section">
    <form action="tambah.php" method="post">
    <div class="mb-3">
        <label for="" class="form-label"><center>Tanggal</center></label>
        <input
            class = "form-control"
            style = "width : 300px"
            type = "date" name="tanggal" id="tanggal"
            aria-describedby="helpId"
            placeholder="Masukkan Tanggal"
        />
        <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"><center>Jam</center></label>
        <input
            type="time" id="jam" name="jam"
            class="form-control"
            style = "width : 300px"
            aria-describedby="jamHelpId"
            placeholder="Masukkan Jam"
        />
        <small id="jamHelpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"><center>Lokasi</center></label>
        <input
            type="string" id="lokasi" name="lokasi"
            class="form-control"
            style = "width : 300px"
            aria-describedby="lokasiHelpId"
            placeholder="Masukkan Lokasi"
        />
        <small id="lokasiHelpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"><center>Kegiatan</center></label>
        <input
            type="string" id="kegiatan" name="kegiatan"
            class="form-control"
            style = "width : 300px"
            aria-describedby="kegiatanHelpId"
            placeholder="Masukkan Kegiatan"
        />
        <small id="kegiatanHelpId" class="form-text text-muted"></small>
    </div>
    <button 
             type="submit"
             value="simpan"
             class="btn btn-outline-success my-2 my-sm-0 text-gray"
             >
             Simpan
            </button>
    </form>
  </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,96L26.7,112C53.3,128,107,160,160,160C213.3,160,267,128,320,96C373.3,64,427,32,480,32C533.3,32,587,64,640,90.7C693.3,117,747,139,800,149.3C853.3,160,907,160,960,149.3C1013.3,139,1067,117,1120,133.3C1173.3,149,1227,203,1280,208C1333.3,213,1387,171,1413,149.3L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
  </body>
</html>