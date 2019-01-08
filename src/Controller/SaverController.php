<?php

namespace App\Controller;

use SplFileInfo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SaverController
 *
 * @package App\Controller
 */
class SaverController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $finder = new Finder();
        $savers = $finder->files()->in('videos');
        $files = [];
        foreach ($savers as $file) {
            if ($file instanceof SplFileInfo && static::isVideo($file)) {
                $files[] = $file;
            }
        }
        $index = rand(0, count($files) - 1);
        $file = $files[$index];
        /* @var $file SplFileInfo */
        $resource['uri'] = '/' . $file->getPathname();
        $resource['mime'] = 'video/' . $file->getExtension();

        return $this->render('screensaver.html.twig', ['resource' => $resource]);
    }

    /**
     * @param \SplFileInfo $file
     *
     * @return bool
     */
    public static function isVideo(SplFileInfo $file) {
        $mime = $file->getExtension();
        if ($mime == 'mp4' || $mime == 'webm') {
            return true;
        }

        return false;
    }
}
