<?php 

namespace Cloudoki\InstaGrab;

use App\Http\Controllers\Controller;

class InstaGrabController extends Controller {

  public function __construct() {
    //
  }

  /**
  * Requests Instagram pics.
  *
  * @return Response
  */
  public static function grabInstagram()
  { 
    dd(1);
  }
}