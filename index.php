<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Register</title>
    <link rel="stylesheet" href="styleRegister.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body {
    min-height: 100vh;
    width: 100%;
    background:url(image/meja.jpg);
    background-position: center;
    background-size: cover;
    padding-left: 5%;
    padding-right: 5%;
    box-sizing: border-box;
    justify-content: center;
}

.wrapper {
    max-width: 500px;
    width: 100%;
    background-color:White;
    margin: 50px auto;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
    padding: 30px;
    border-radius: 50px;
    border:2px solid black;
}

.wrapper .title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #000000;
    text-transform: uppercase;
    text-align: center;
}

.wrapper .form {
    width: 100%;
}

.wrapper .form .inputfield {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    border-radius: 5px;
}

.wrapper .form .inputfield label {
    width: 200px;
    color:black;
    margin-right: 10px;
    font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea {
    width: 100%;
    outline: none;
    border: 1px solid black;
    font-size: 15px;
    padding: 8px 10px;
    border-radius: 3px;
    transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea {
    width: 100%;
    height: 125px;
    resize: none;
}

.wrapper .form .inputfield .custom_select {
    position: relative;
    width: 100%;
    height: 37px;
}

.wrapper .form .inputfield .custom_select select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: none;
    width: 100%;
    height: 100%;
    border: 0px;
    padding: 8px 10px;
    font-size: 15px;
    border: 1px solid black;
    border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus {
    border: 5px solid black;
}

.wrapper .form .inputfield .custom_select select:focus {
    border: 2px solid black;
}

.wrapper .form .inputfield p {
    font-size: 14px;

}

.wrapper .form .inputfield .btn {
    width: 100%;
    padding: 8px 10px;
    font-size: 15px;
    border: 0px;
    background-color:black;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
    outline: none;
}

.wrapper .form .inputfield .btn:hover {
    background-color:brown;
    border: 1px solid white;
}

.wrapper .form .inputfield:last-child {
    margin-bottom: 0;
}

@media (max-width:420px) {
    .wrapper .form .inputfield {
        flex-direction: column;
        align-items: flex-start;
    }

    .wrapper .form .inputfield label {
        margin-bottom: 5px;
    }

    .wrapper .form {
        flex-direction: row;
    }

    
}

</style>
<body>
    <form action="tampil.php" method="POST" >
    <div class="wrapper">
        <div class="title">
            BIODATA
        </div>
        <div class="form">
            <div class="inputfield">
                <label>Nama:</label>
                <input type="text"  class="input" name="Nama">
            </div>
            <div class="inputfield">
                <label>Jenis Kelamin</label>
                <div class="custom_select">
                  <div class="custom_select">
                        <select name="gender" id="">
                       <option value="-">-</option>
                       <option value="Laki">Laki-Laki</option>
                       <option value="Perempuan">Perempuan</option>
                       </select>
                  </div>
                </div>
            </div>
            <div class="inputfield">
                <label>Agama:</label>
                <div class="custom_select">
                    <select name="Agama" id="">
                        <option value="-">-</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>Alamat</label>
                <textarea class="textarea" name="Alamat"></textarea>
            </div>
            <div class="inputfield">
                <label>Tempat lahir:</label>
                <input type="text" class="input" name="TempatLahir">
            </div>
            <div class="inputfield">
                <label>Tanggal lahir:</label>
                <input type="date" class="input" name="TanggalLahir">
            </div>
           <div class="inputfield">
                <label>Hoby: </label>
                <input type="text" class="input" name="hobi">
           </div>
            <div class="inputfield">
                <label>Cita-cita:</label>
                <input type="text" class="input" name="CitaCita">
            </div>
            <div class="inputfield">
                <label>Usia:</label>
                <input type="text" class="input" name=Usia>
            </div>
            <div class="inputfield">
                <label>Asal Sekolah:</label>
                <input type="text" class="input" name="AsalSekolah">
            </div>
           
            <div class="inputfield">
                <input type="submit" value="SUBMIT" class="btn">
            </div>
        </div>


    </div>
    </form>

</body>

</html>




