<?php

namespace App\Classes;

use Da\QrCode\Contracts\QrCodeInterface;
use Da\QrCode\Format\AbstractFormat;
use Da\QrCode\Format\BookMarkFormat;
use Da\QrCode\Format\MmsFormat;
use Da\QrCode\Format\SmsFormat;
use Da\QrCode\QrCode;

class QrCodeFactory
{
    /**
     * @param string|array $content
     * @param string|null $format
     * @return QrCode
     * @throws \Exception
     */
    public static function build(string|array $content, ?string $format = null): QrCodeInterface
    {
        if (is_null($format)) {
            return static::normalizeQrCode(new QrCode($content));
        }

        if (! (new $format($content)) instanceof AbstractFormat) {
            throw new \Exception('Type must be an instance of ' . AbstractFormat::class);
        }

        $qrCodeFormat = new $format($content);

        return static::normalizeQrCode(new QrCode($qrCodeFormat));
    }

    protected static function normalizeQrCode(QrCode $qrCode): QrCodeInterface
    {
        return $qrCode->setSize(115);
    }
}
