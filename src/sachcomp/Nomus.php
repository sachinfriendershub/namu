<?php
namespace common\components\src\sachcomp;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\components\src\sachcomp\NomusAsset;

class Nomus extends Widget{
	
	private $scriptOptions = [];

    public $manualHighlight = false;

    public $scriptPosition;

    public $cssFile;

    public $scriptFile;

    public function init()
    {
       
    }

    public function run()
    {
        parent::run();
        NomusAsset::register($this->view);
        return $this->render('feedback');
    }
	
}
?>
