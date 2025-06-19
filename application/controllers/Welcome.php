<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Writer;


class Welcome extends CI_Controller {

    public function index()
    {
        require 'vendor/autoload.php';

		$renderer = new ImageRenderer(
			new RendererStyle(70),
			new SvgImageBackEnd()
		);
		
		$writer = new Writer($renderer);
		$result = $writer->writeString('GC4467D-52-30.35/0.0-0
			Part Serial 2024/07/18-277
			Vendor Initial G
			GCS Rev Date 2024-07-07
			Production Date 2024-07-18
			Eyelet to Eyelet Length Fully Extended 20.58in
			Eyelet to Eyelet Length Fully Retracted 20.58in
			Lateral Load Capacity at Full Extension 500 lbs 
			Maximum Rated Load 9000 ibs 
			|MzUw|');
		
		header('Content-Type: image/svg+xml');
		echo $result;
    }
}
?>
