<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 0;
        }

        .title {
            font-size: 1rem;
            color: #000;
            margin-bottom: 1.25rem;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 0.1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .banner-section {
            font-family: 'Sora', sans-serif;
            background-color: navy;
            color: white;
            padding: 10% 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100px;
        }

        .floating-container {
            background-color: #F5F5F5;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
            margin: -8% auto 0;
            max-width: 75%;
        }

        .floating-container {
            background-color: #F5F5F5;
            border-radius: 10px;
            box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
            margin: -12% auto 0;
            padding: 2rem 1rem;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            max-width: 80%;
        }

        .floating-word {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 5rem;
        }

        .floating-word>div {
            flex: 1;
            max-width: 200px;
            min-width: 150px;
        }

        .floating-word img {
            max-height: 100px;
            width: auto;
            margin-bottom: 1rem;
        }


        .tagline p {
            font-size: 1.5rem;
            color: #000;
        }

        .galeri-container {
            width: 100%;
            max-width: 18rem;
            margin: 1rem;
            display: inline-block;
        }

        .galeri-img-top {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 1.5rem;
            }

            .tagline p {
                font-size: 1.2rem;
            }

            .floating-container {
                margin-top: -25%;
            }
        }
    </style>
</head>

<body>
    <section class="banner-section">
        <h1>Kesehatan Anda Kebahagiaan Kami</h1>
        <p>Kami Siap Melayani Kesehatan Pasien</p>
    </section>

    <div class="row mb-4">
        <div class="col-12">
    <section class="list-section">
        <div class="list-container"><br>
            <h2 style="text-align: center;">Layanan Kami</h2>
            <ul class="service-list">
                <li>
                    <i class="icon fas fa-stethoscope"></i>
                    <span class="service-text">Layanan Medis Umum</span>
                </li>
                <li>
                    <i class="icon fas fa-user-md"></i>
                    <span class="service-text">Pemeriksaan Spesialis</span>
                </li>
                <li>
                    <i class="icon fas fa-hospital"></i>
                    <span class="service-text">Fasilitas Kesehatan Modern</span>
                </li>
                <li>
                    <i class="icon fas fa-comments"></i>
                    <span class="service-text">Konsultasi Kesehatan</span>
                </li>
                <li>
                    <i class="icon fas fa-heartbeat"></i>
                    <span class="service-text">Program Kesehatan Preventif</span>
                </li>
            </ul>
        </div>
    </section>
</body>

</html>