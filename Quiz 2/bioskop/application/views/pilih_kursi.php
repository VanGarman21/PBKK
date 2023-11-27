<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        #seat-map {
            margin: 20px auto;
            display: flex;
            justify-content: center;
        }

        .seat {
            width: 40px;
            height: 40px;
            margin: 5px;
            background-color: #bdc3c7;
            border: 1px solid #34495e;
            cursor: pointer;
        }

        #seat-number {
            margin-top: 10px;
            font-size: 18px;
        }

        #payment-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
    <title>Pilih Kursi</title>
</head>

<body>
    <h2>Pilih Kursi Bioskop</h2>

    <!-- masukkan gambar ukuran 80px * 80 px-->
    <div id="seat-map">
        <img src="assets/img/tempat_duduk.png" alt="seat-map">
    </div>


    <div>
        <label for="seat-number">Nomor Kursi:</label>
        <input type="text" id="seat-number" placeholder="Masukkan nomor kursi" />
    </div>

    <!-- <button id="payment-button" onclick="lanjutPembayaran()">Lanjut Pembayaran</button> -->
    <a href="/bioskop/pembayaran" class="btn btn-sm btn-primary">Lanjut Pembayaran</a>
    <script>
        // Fungsi untuk menandai kursi yang dipilih
        function toggleSeat(seat) {
            seat.classList.toggle('selected');
        }

        // Fungsi untuk mendapatkan nomor kursi yang dimasukkan pengguna
        function getSeatNumber() {
            return document.getElementById('seat-number').value;
        }

        // Fungsi untuk menangani lanjut pembayaran
        function lanjutPembayaran() {
            const selectedSeats = document.querySelectorAll('.selected');
            const seatNumbers = Array.from(selectedSeats).map(seat => seat.textContent);
            const inputSeatNumber = getSeatNumber();

            if (inputSeatNumber) {
                seatNumbers.push(inputSeatNumber);
            }

            // Lakukan apa pun yang perlu dilakukan untuk melanjutkan ke pembayaran
            console.log('Nomor Kursi yang Dipilih:', seatNumbers);
            // Tambahkan logika atau perpindahan ke halaman pembayaran di sini
        }

        // Generate kursi bioskop secara dinamis
        const seatMap = document.getElementById('seat-map');
        const numberOfSeats = 10; // Ganti dengan jumlah kursi yang diinginkan

        // for (let i = 1; i <= numberOfSeats; i++) {
        //     const seat = document.createElement('div');
        //     seat.className = 'seat';
        //     seat.textContent = i;
        //     seat.onclick = function() {
        //         toggleSeat(seat);
        //     };

        //     seatMap.appendChild(seat);
        // }
    </script>
</body>

</html>