<?

/*
 * 7월 27일 data parsing 작업은 이부분에서 실행해야 함.
 */
class TodayTest{

    const SITE_KEY = 'SOLDOUT';
    const SITE_SECRET = '282618ce';
    const SITE_AES_KEY = 'KZJKDCTO9835fzcejmic5688WBSADCFB';

    private $defaultReqType;
    private $baseApiUrl;
    private $baseWebUrl;
    private $defaultHeader;

    private $aesIv;
    private $aesMethod;


    public $reqeuset_param = null;

    function getInfo($reqType, $reqUrl, $header) {
//        $this_method_name = method_get_name();
        echo $reqType . $reqUrl . $header;
        $method_name = __FUNCTION__;
        echo $method_name;
    }

}

$test_obj = new TodayTest();

//$test_obj->test('asdasdasdasd');

$test_obj->getInfo('hahah','hohoho','heghehe       ss');