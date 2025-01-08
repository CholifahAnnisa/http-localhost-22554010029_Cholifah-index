<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi Restoran Kemangi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Form Reservasi Restoran Kemangi</h2>
    <form id="dataForm" action="submit.php" method="post">
        <!-- Input Text -->
        <label for="name">Nama Lengkap (min 3 karakter):</label>
        <input type="text" id="name" name="name" minlength="3" required placeholder="Masukkan nama Anda">

        <!-- Input Date -->
        <label for="dob">Tanggal Reservasi (Wajib) :</label>
        <input type="date" id="dob" name="dob" required>

        <!-- Input Number -->
        <label for="age">Jumlah Orang (Wajib) :</label>
        <input type="number" id="age" name="age" min="1" placeholder="Masukkan jumlah orang">

        <!-- Input Email -->
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required placeholder="Masukkan email Anda">

        <!-- Input Radio -->
        <label>Jenis Kelamin:</label>
        <input type="radio" id="male" name="gender" value="Laki-Laki" required>
        <label for="male">Laki-Laki</label>
        <input type="radio" id="female" name="gender" value="Perempuan" required>
        <label for="female">Perempuan</label>

        <!-- Submit Button -->
        <button type="submit">Kirim</button>
    </form>

    <script>
        // Validasi tambahan (jika dibutuhkan)
        document.getElementById('dataForm').addEventListener('submit', function(e) {
            const nameInput = document.getElementById('name').value;
            const passwordInput = document.getElementById('password').value;

            if (nameInput.length < 3) {
                alert("Nama harus memiliki setidaknya 3 karakter.");
                e.preventDefault();
            }});
    </script>
</body>
</html>
