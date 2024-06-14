<!DOCTYPE html>
<html lang="id" style="box-sizing: border-box;font-family: 'Open Sans', sans-serif;color: rgba(33,37,41, 1)!important;">
<head style="box-sizing: border-box;">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
</head>
<body style="box-sizing: border-box;margin: 0;font-family: 'Open Sans', sans-serif;font-size: 1rem;font-weight: 400;line-height: 1.5;background-color: #fff;-webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: transparent;color: rgba(33,37,41, 1)!important;">
    <section class="container my-4 my-md-5" style="margin: auto;box-sizing: border-box;margin: 10rem 0;padding-right: calc(1.5rem * .5);padding-left: calc(1.5rem * .5);margin-right: auto;margin-left: auto;margin-top: 1.5rem!important;margin-bottom: 1.5rem!important;">
        <p style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">Terdapat reservasi baru dari <b style="box-sizing: border-box;font-weight: bolder;"><?= $agent ?></b></p>
        <div class="text-center" style="box-sizing: border-box;margin: 1rem 0;">
            <a href="mailto:<?= $agentInfo->email ?>" class="btn btn-primary rounded-pill" aria-label="Download" style="box-sizing: border-box;border-radius: 50rem!important;margin: 0;font-size: 1rem;line-height: 1.5;text-transform: none;-webkit-appearance: button;display: inline-block;padding: 0.5rem 1rem;font-weight: 400;color: #fff;text-align: center;text-decoration: none!important;vertical-align: middle;cursor: pointer;user-select: none;border: 1px solid #2d8337;background-color: #2d8337;transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;">
                Email
            </a>
            <a href="tel:<?= $agentInfo->phone ?>" class="btn btn-primary rounded-pill" aria-label="Download" style="box-sizing: border-box;border-radius: 50rem!important;margin: 0;font-size: 1rem;line-height: 1.5;text-transform: none;-webkit-appearance: button;display: inline-block;padding: 0.5rem 1rem;font-weight: 400;color: #fff;text-align: center;text-decoration: none!important;vertical-align: middle;cursor: pointer;user-select: none;border: 1px solid #2d8337;background-color: #2d8337;transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;">
                Telepon
            </a>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>Paket</td>
                    <td class="px-2" style="margin: 0 0.5rem;">:</td>
                    <td class="fw-bold"><?= $package ?></td>
                </tr>
                <tr>
                    <td>Keperluan</td>
                    <td class="px-2" style="margin: 0 0.5rem;">:</td>
                    <td class="fw-bold"><?= $type ?></td>
                </tr>
                <tr>
                    <td>Penumpang</td>
                    <td class="px-2" style="margin: 0 0.5rem;">:</td>
                    <td class="fw-bold"><?= $passenger ?> Orang</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center" style="box-sizing: border-box;text-align: center!important;">
            <a href="<?= base_url('dashboard/reservasi/' . $code) ?>" class="btn btn-primary rounded-pill" aria-label="Download" style="box-sizing: border-box;border-radius: 50rem!important;margin: 0;font-size: 1rem;line-height: 1.5;text-transform: none;-webkit-appearance: button;display: inline-block;padding: 0.5rem 1rem;font-weight: 400;color: #2d8337;text-align: center;text-decoration: none!important;vertical-align: middle;cursor: pointer;user-select: none;border: 1px solid #2d8337;background-color: transparent;transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;">
                Lihat selengkapnya
            </a>
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