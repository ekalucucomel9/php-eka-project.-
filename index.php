<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soft Blue Message Form</title>
    <style>
        :root {
            /* Warna Biru Soft Baru */
            --soft-blue-bg: #E3F2FD;
            --ocean-blue: #90CAF9;
            --text-color: #37474F;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--soft-blue-bg);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 360px;
            border: 1px solid white;
        }

        h2 { text-align: center; color: var(--text-color); margin-bottom: 20px; }

        label { display: block; margin: 10px 0 5px; font-size: 0.85rem; font-weight: 600; color: #546E7A; }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #CFD8DC;
            border-radius: 15px;
            box-sizing: border-box;
            font-size: 1rem;
            transition: 0.3s;
        }

        input:focus { 
            outline: none; 
            border-color: var(--ocean-blue); 
            box-shadow: 0 0 8px rgba(144, 202, 249, 0.5); 
        }

        button {
            width: 100%;
            padding: 15px;
            margin-top: 25px;
            border: none;
            border-radius: 15px;
            background-color: var(--ocean-blue);
            color: white;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover { 
            background-color: #64B5F6; 
            transform: translateY(-2px); 
        }
        
        .footer { text-align: center; margin-top: 15px; font-size: 0.75rem; color: #90A4AE; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Message Form</h2>
        <form action="submit.php" method="POST">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama" placeholder="Contoh: ekaaaa" required>

            <label>Email (Gmail/Yahoo):</label>
            <input type="email" name="email" placeholder="nama@gmail.com" required>

            <label>Nomor HP (Hanya Angka):</label>
            <input type="text" name="nomor" placeholder="083435671135" required>

            <label>Pesan Anda:</label>
            <textarea name="pesan" rows="3" placeholder="Tulis pesan minimal 10 karakter..." required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
        <div class="footer">API v2.0.2 • Soft Blue Edition</div>
    </div>
</body>
</html>