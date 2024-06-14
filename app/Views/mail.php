<!DOCTYPE html>
<html lang="id" style="box-sizing: border-box;font-family: 'Open Sans', sans-serif;color: rgba(33,37,41, 1)!important;">
<head style="box-sizing: border-box;">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
</head>
<body style="box-sizing: border-box;margin: 0;font-family: 'Open Sans', sans-serif;font-size: 1rem;font-weight: 400;line-height: 1.5;background-color: #fff;-webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: transparent;color: rgba(33,37,41, 1)!important;">
    <section class="container my-4 my-md-5" style="width: 100%;max-width: 992px;margin: auto;box-sizing: border-box;margin: 10rem 0;padding-right: calc(1.5rem * .5);padding-left: calc(1.5rem * .5);margin-right: auto;margin-left: auto;margin-top: 1.5rem!important;margin-bottom: 1.5rem!important;">
        <p style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">Terima kasih untuk <b style="box-sizing: border-box;font-weight: bolder;"><?= $agent ?></b> yang telah mempercayai kami. Kami senang bisa bekerja sama dengan Anda.</p>
        <p style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">Reservasi anda telah kami terima. Berikut adalah rincian dan bukti reservasi anda:</p>
    </section>
    <section class="container my-0" style="width: 992px;margin: auto;box-sizing: border-box;margin: 10rem 0;padding-right: calc(1.5rem * .5);padding-left: calc(1.5rem * .5);margin-right: auto;margin-left: auto;margin-top: 0!important;margin-bottom: 0!important;">
        <div class="overflow-auto" style="box-sizing: border-box;overflow: auto!important;">
            <div id="softcopy" class="card border-0" style="box-sizing: border-box;position: relative;display: flex;flex-direction: column;min-width: 0;color: #fff;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 0!important;border-radius: .625rem;">
                <div class="card-body text-dark" style="width: 100%;box-sizing: border-box;flex: 1 1 auto;color: rgba(33,37,41, 1)!important;">
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-3 w-100" style="box-sizing: border-box;display: flex!important;width: 100%!important;justify-content: space-between!important;align-items: center!important;margin-bottom: 1rem!important;gap: 1rem!important;">
                        <div class="d-flex align-items-center gap-2" style="box-sizing: border-box;display: flex!important;align-items: center!important;gap: .5rem!important;margin-right: auto;">
                            <img src="<?= base_url('images/logo.png') ?>" class="logo img-fluid" alt="Logo" style="box-sizing: border-box;vertical-align: middle;max-width: 64px;margin-right:0.5rem">
                            <h3 class="h6 fw-bold mb-0" style="box-sizing: border-box;margin: auto;font-weight: 700!important;line-height: 1.2;color: inherit;font-size: 1rem;">Amanah Sabila<br style="box-sizing: border-box;">Handling</h3>
                        </div>
                        <div class="bg-secondary px-3 py-2 rounded-pill" style="box-sizing: border-box;margin: auto 0;padding-right: 1rem!important;padding-left: 1rem!important;padding-top: .5rem!important;padding-bottom: .5rem!important;background-color: rgba(245,115,40, 1)!important;border-radius: 50rem!important;">
                            <span class="text-white" style="box-sizing: border-box;color: rgba(255,255,255, 1)!important;"><?= $package ?></span>
                        </div>
                    </div>
                    <h2 class="h4 text-center fw-bold mb-3" style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem!important;font-weight: 700!important;line-height: 1.2;color: inherit;font-size: calc(1.275rem + .3vw);text-align: center!important;">Bukti Reservasi</h2>
                    <div class="bg-primary text-white p-3 rounded-2 mb-3" style="box-sizing: border-box;margin-bottom: 1rem!important;padding: 1rem!important;color: rgba(255,255,255, 1)!important;background-color: rgba(45,131,55, 1)!important;border-radius: .625rem!important;">
                        <div class="row" style="box-sizing: border-box;display: flex;flex-wrap: wrap;margin-top: calc(-1 * 0);margin-right: calc(-.5 * 1.5rem);margin-left: calc(-.5 * 1.5rem);">
                            <div class="col-6" style="box-sizing: border-box;flex-shrink: 0;width: 50%;max-width: 100%;padding-right: calc(1.5rem * .5);padding-left: calc(1.5rem * .5);margin-top: 0;flex: 0 0 auto;">
                                <table style="box-sizing: border-box;caption-side: bottom;border-collapse: collapse;">
                                    <tbody style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">Oleh</td>
                                            <td class="px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;"><?= $agent ?></td>
                                        </tr>
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">Pada</td>
                                            <td class="px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;"><?= $date ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-6" style="box-sizing: border-box;flex-shrink: 0;width: 50%;max-width: 100%;padding-right: calc(1.5rem * .5);padding-left: calc(1.5rem * .5);margin-top: 0;flex: 0 0 auto;">
                                <table style="box-sizing: border-box;caption-side: bottom;border-collapse: collapse;">
                                    <tbody style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">Keperluan</td>
                                            <td class="px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;"><?= $type ?></td>
                                        </tr>
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">Penumpang</td>
                                            <td class="px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;"><?= $passenger ?> Orang</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="box-sizing: border-box;display: flex;flex-wrap: wrap;margin-top: calc(-1 * 0);margin-right: calc(-.5 * 1.5rem);margin-left: calc(-.5 * 1.5rem);">
                        <div class="col-6" style="box-sizing: border-box;flex-shrink: 0;width: 50%;max-width: 100%;padding-right: calc(1.5rem * .5);padding-left: calc(1.5rem * .5);margin-top: 0;flex: 0 0 auto;">
                            <h3 class="h5 fw-bold text-center mb-3" style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem!important;font-weight: 700!important;line-height: 1.2;color: inherit;font-size: 1.25rem;text-align: center!important;">Keberangkatan</h3>
                            <div class="py-3 w-100" style="box-sizing: border-box;width: 100%!important;padding-top: 1rem!important;padding-bottom: 1rem!important;">
                                <table style="box-sizing: border-box;caption-side: bottom;border-collapse: collapse;">
                                    <tbody style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;">Tanggal</td>
                                            <td class="align-top px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;"><?= $departureDate ?></td>
                                        </tr>
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;">Waktu</td>
                                            <td class="align-top px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;"><?= $departureTime ?></td>
                                        </tr>
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;">Bandara</td>
                                            <td class="align-top px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;"><?= $departureName ?> (<strong><?= $departure ?></strong>), <?= $departureCity ?></td>
                                        </tr>
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;">Tujuan</td>
                                            <td class="align-top px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;"><?= $destination ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-6" style="box-sizing: border-box;flex-shrink: 0;width: 50%;max-width: 100%;padding-right: calc(1.5rem * .5);padding-left: calc(1.5rem * .5);margin-top: 0;flex: 0 0 auto;">
                            <h3 class="h5 fw-bold text-center mb-3" style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem!important;font-weight: 700!important;line-height: 1.2;color: inherit;font-size: 1.25rem;text-align: center!important;">Kepulangan</h3>
                            <div class="py-3 w-100" style="box-sizing: border-box;width: 100%!important;padding-top: 1rem!important;padding-bottom: 1rem!important;">
                                <table style="box-sizing: border-box;caption-side: bottom;border-collapse: collapse;">
                                    <tbody style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;">Tanggal</td>
                                            <td class="align-top px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;"><?= $arrivalDate ?></td>
                                        </tr>
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;">Waktu</td>
                                            <td class="align-top px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;"><?= $arrivalTime ?></td>
                                        </tr>
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;">Bandara</td>
                                            <td class="align-top px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;"><?= $arrivalName ?> (<strong><?= $arrival ?></strong>), <?= $arrivalCity ?></td>
                                        </tr>
                                        <tr style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;">
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;">Asal</td>
                                            <td class="align-top px-2" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;padding-right: .5rem!important;padding-left: .5rem!important;">:</td>
                                            <td class="align-top" style="box-sizing: border-box;border-color: inherit;border-style: solid;border-width: 0;vertical-align: top!important;"><?= $through ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="text-end" style="box-sizing: border-box;text-align: right!important;">
                        <p class="text-light fw-bold fst-italic fs-4 mb-0" style="box-sizing: border-box;margin-top: 0;margin-bottom: 0!important;font-size: calc(1.275rem + .3vw)!important;font-style: italic!important;font-weight: 700!important;color: rgba(233,236,239, 1)!important;">#<?= $code ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-4 my-md-5" style="width: 100%;max-width: 992px;margin: auto;box-sizing: border-box;margin: 10rem 0;padding-right: calc(1.5rem * .5);padding-left: calc(1.5rem * .5);margin-right: auto;margin-left: auto;margin-top: 1.5rem!important;margin-bottom: 1.5rem!important;">
        <div class="alert alert-info" role="alert" style="box-sizing: border-box;position: relative;padding: 1rem 1rem;margin-bottom: 1rem;color: inherit;background-color: #cff4fc;border: 1px solid #9eeaf9;border-radius: .625rem;">
            <p class="text-center mb-0" style="box-sizing: border-box;margin-top: 0;margin-bottom: 0!important;text-align: center!important;">Anda dapat mengunduh atau menyimpan bukti reservasi di atas dengan klik tombol dibawah ini</p>
        </div>
        <div class="text-center" style="box-sizing: border-box;text-align: center!important;">
            <a href="<?= base_url('reservasi/' . $code) ?>" class="btn btn-primary rounded-pill" aria-label="Download" style="box-sizing: border-box;border-radius: 50rem!important;margin: 0;font-size: 1rem;line-height: 1.5;text-transform: none;-webkit-appearance: button;display: inline-block;padding: 0.5rem 1rem;font-weight: 400;color: #fff;text-align: center;text-decoration: none!important;vertical-align: middle;cursor: pointer;user-select: none;border: 1px solid #2d8337;background-color: #2d8337;transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;">
                Download
            </a>
        </div>
        <div class="bg-light rounded-2 p-3 my-4" style="box-sizing: border-box;margin-top: 1.5rem!important;margin-bottom: 1.5rem!important;">
            <p style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">Untuk informasi lebih lanjut mengenai pembayaran, catatan tambahan, dan sebagainya silahkan hubungi kami melalui:</p>
            <p style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">
                <span class="fw-bold mb-2" style="box-sizing: border-box;margin-bottom: .5rem!important;font-weight: 700!important;">Telepon/WhatsApp</span>
                <br style="box-sizing: border-box;">
                <a href="tel:+62859-2156-2580" class="mb-0" aria-label="Phone" style="box-sizing: border-box;color: rgba(45,131,55, 1);text-decoration: none!important;margin-bottom: 0!important;">+62 859-2156-2580</a>
                <br style="box-sizing: border-box;">
                <a href="tel:+62859-2156-2580" class="mb-0" aria-label="Phone" style="box-sizing: border-box;color: rgba(45,131,55, 1);text-decoration: none!important;margin-bottom: 0!important;">+62 859-2156-2580</a>
            </p>
            <p style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">
                <span class="fw-bold mb-2" style="box-sizing: border-box;margin-bottom: .5rem!important;font-weight: 700!important;">Email</span>
                <br style="box-sizing: border-box;">
                <a href="mailto:ashkohandling@gmail.com" class="mb-0" aria-label="Email" style="box-sizing: border-box;color: rgba(45,131,55, 1);text-decoration: none!important;margin-bottom: 0!important;">ashkohandling@gmail.com</a>
                <br style="box-sizing: border-box;">
                <a href="mailto:loremipsum@gmail.com" class="mb-0" aria-label="Email" style="box-sizing: border-box;color: rgba(45,131,55, 1);text-decoration: none!important;margin-bottom: 0!important;">loremipsum@gmail.com</a>
            </p>
        </div>
    </section>
    <footer style="box-sizing: border-box;margin-top: 1.5rem!important;margin-bottom: 1.5rem!important;text-align:center;color:#6c757d">
        <p>
            <small>Email ini dikirim otomatis oleh ashkohandling.com</small>
            <br>
            <small>© 2023 PT. Amanah Sabila Handling. All rights reserved.</small>
        </p>
    </footer>
</body>
</html>