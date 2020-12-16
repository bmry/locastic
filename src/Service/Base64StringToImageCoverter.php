<?php
/**
 * Created by PhpStorm.
 * User: morayobamgbose
 * Date: 16/12/2020
 * Time: 8:48 AM
 */

namespace App\Service;


use App\Exception\ImageUploadException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\KernelInterface;

class Base64StringToImageCoverter
{
    /**
     * @var KernelInterface
     */
    private $kernel;

    /**
     * Base64StringToImageCoverter constructor.
     * @param KernelInterface $kernel
     */
    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;

    }

    /**
     * @param string $base64String
     * @return UploadedFile
     * @throws ImageUploadException
     *
     */
    public function  buildUploadFileFromBase64String(string  $base64String)
    {
        $cacheDirectory = $this->kernel->getCacheDir();
        if (!is_dir($cacheDirectory.'/uploads')) {
            mkdir($cacheDirectory.'/uploads');
        }

        $base64StringPart = explode(',', $base64String);

        if(count($base64StringPart) < 2){
            throw new ImageUploadException("Invalid Image Uploaded", 400);
        }

        $extension = explode(";",$base64StringPart[0]);
        $extension = explode('/', $extension[0]);
        $extension = $extension[1];
        $imageFileName = sprintf('image_upload%s.%s',time(), $extension);
        $image = sprintf('%s/uploads/%s', $cacheDirectory, $imageFileName);

        file_put_contents($image, base64_decode($base64StringPart[1]));

        $mimeType = (1 === preg_match('/data:([a-zA-Z0-9]+\/[a-zA-Z0-9-.+]+).*,.*/', $base64String, $m))
            ? $m[0]
            : null;

        if (null === $mimeType) {
            throw new ImageUploadException("Invalid Image Uploaded", 400);
        }

        $uploadedFile = new UploadedFile($image, $imageFileName, $mimeType, null, true);

        return $uploadedFile;
    }
}