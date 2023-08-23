<?php

namespace App\Http\Controllers;

use App\Classes\QrCodeFactory;
use Da\QrCode\Contracts\LabelInterface;
use Da\QrCode\Format\BookMarkFormat;
use Da\QrCode\Format\BtcFormat;
use Da\QrCode\Format\GeoFormat;
use Da\QrCode\Format\ICalFormat;
use Da\QrCode\Format\MeCardFormat;
use Da\QrCode\Format\MmsFormat;
use Da\QrCode\Format\PhoneFormat;
use Da\QrCode\Format\SmsFormat;
use Da\QrCode\Format\VCardFormat;
use Da\QrCode\Format\YoutubeFormat;
use Da\QrCode\Label;
use Da\QrCode\Writer\EpsWriter;
use Da\QrCode\Writer\JpgWriter;
use Da\QrCode\Writer\PngWriter;
use Da\QrCode\Writer\SvgWriter;
use Illuminate\Support\Facades\Storage;

class QrCodeController extends Controller
{
    public function index()
    {
        $text = QrCodeFactory::build(content:'2am. technologies')
            ->setSize(115)
            ->setLogo(public_path('assets/logo.png'))
            ->setLogoWidth(18);

        $bookMark = QrCodeFactory::build(
            content: [
                'title' => '2am. technologies',
                'url' => 'https://2am.tech',
            ],
            format: BookMarkFormat::class
            )
            ->setForegroundColor(
                red: 15,
                green: 162,
                blue: 217
            );

        $mms = QrCodeFactory::build([
                'phone' => 657657657,
                    'msg' => 'test'
                ], MmsFormat::class
            );

        $sms = QrCodeFactory::build(content: ['phone' => 657657657], format: SmsFormat::class);

        $youtube = QrCodeFactory::build(
                content: ['videoId' => 'xx8716'],
                format: YoutubeFormat::class
            )
            ->setLabel(new Label(
                text: 'Youtube Video!',
                font: null,
                fontSize: 8,
                align: LabelInterface::ALIGN_RIGHT
            ))
            ->setForegroundColor(
                red: 0,
                green: 0,
                blue: 0,
            )
            ->setBackgroundColor(
                red: 222,
                green: 75,
                blue: 2,
            );

        $btc = QrCodeFactory::build(
                content: [
                    'address' => '175tWpb8K1S7NmH4Zx6rewF9WQrcZv245W',
                    'amount' => 1,
                    'name' => 'wallet 1'
                ],
                format: BtcFormat::class,
            );

        $geo = QrCodeFactory::build(
                content: [
                    'lat' => 1,
                    'lng' => 1,
                    'altitude' => 20,
                ],
                format: GeoFormat::class,
            )
            ->setWriter(new JpgWriter());

        $iCal = QrCodeFactory::build(
            content: [
                'summary' => 'test-summary',
                'startTimestamp' => 1260232200,
                'endTimestamp' => 1260318600,
            ],
            format: ICalFormat::class,
        );
        $iCal->setSize(115);

        $meCard = QrCodeFactory::build(
                content: [
                    'firstName' => 'Antonio',
                    'lastName' => 'Ramirez',
                    'sound' => 'docomotaro',
                    'phone' => '657657XXX',
                    'videoPhone' => '657657XXX',
                    'email' => 'hola@2amigos.us',
                    'note' => 'test-note',
                    'birthday' => '19791201',
                    'address' => 'test-address',
                    'url' => 'https://2am.tech',
                    'nickName' => 'tonydspaniard',
                ],
                format: MeCardFormat::class,
            )
            ->setMargin(2);

        $phone = QrCodeFactory::build(
                content: ['phone' => 657657657],
                format: PhoneFormat::class
            )
            ->setWriter(new SvgWriter())
            ->setMargin(1);

        $vCard = QrCodeFactory::build(
                content: [
                    'email' => 'hola@2amigos.us',
                    'url' => 'https://2am.tech',
                    'name' => 'Antonio',
                    'fullName' => 'Antonio Ramirez',
                ],
                format: VCardFormat::class,
            )
            ->setWriter(new EpsWriter());

        Storage::put('qrcode/vCard-eps-format.eps', $vCard->writeString());

        return view('qrcode.index', [
            'text' => $text,
            'bookMark' => $bookMark,
            'mms' => $mms,
            'sms' => $sms,
            'youtube' => $youtube,
            'btc' => $btc,
            'geo' => $geo,
            'iCal' => $iCal,
            'meCard' => $meCard,
            'phone' => $phone,
            'vCard' => $vCard,
        ]);
    }

    public function resource(string $text)
    {
        $qrCode = QrCodeFactory::build($text);

        return response($qrCode->setSize(300)->writeString())
            ->withHeaders([
                'Content-Type' => $qrCode->getContentType()
            ]);
    }
}
