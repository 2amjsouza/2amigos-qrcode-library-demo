<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('app.css')}}" />
</head>
<body>
    <div class="container">
        <p>
            <a href="https://2am.tech" target="_blank"> 2am blog </a>
            <a href="https://2am.blog" target="_blank"> 2am blog </a>
        </p>
        <div class="row mt-5 mb-5">
            <div class="col-2 d-flex align-items-center">
                <img src="{{asset('assets/logo.png')}}">
            </div>
            <div class="col d-flex align-items-center">
                <a href="https://github.com/2amigos/qrcode-library">
                    <h1> 2amigos/qrcode-library </h1>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> Text </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $text->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> BookMark </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $bookMark->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> MMS </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $mms->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> SMS </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $sms->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> Youtube </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $youtube->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> BTC </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $btc->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> Geo </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $geo->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> ICal </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $iCal->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> MeCard </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $meCard->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> Phone </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <img src="<?= $phone->writeDataUri(); ?>"/>
                </div>
            </div>

            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"> VCard </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Pharetra et ultrices neque ornare aenean. At volutpat diam ut
                        venenatis tellus in. Pellentesque nec nam aliquam sem et tortor consequat. Faucibus vitae
                        aliquet nec ullamcorper sit amet risus.
                    </p>

                    <b> Eps Files are not supported by browsers.</b>
                    <p>
                        You can find the created vCard under ./storage/app/qrcode folder.
                    </p>
                    <p>
                        <i> You can use an online tool to visualize its content. </i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
