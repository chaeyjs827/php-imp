<?

namespace YoungJunTest\ApiReqResLogRepo;
class ApiReqResLogRepo{

//    public $reqeuset_param = null

    private $apiSubjectName;
    private $apiMethod;
    private $reqtype;
    private $reqUrl;
    private $reqParam;
    private $responseResult;
    private $baseApiUrl;    // -> 그냥 reqUrl로 통합
    private $urlParameter;    // -> 그냥 reqUrl로 통합
    private $middleApiUrl;    // -> 그냥 reqUrl로 통합
    private $accessToken;    // -> 그냥 reqUrl로 통합
    private $headers;       // -> 그냥 reqUrl로 통합

    public function __construct($apiSubjectName, $apiMethod, $reqType, $reqUrl,
                                $reqParam, $responseResult) {
        $this->apiSubjectName = $apiSubjectName;
        $this->apiMethod = $apiMethod;
        $this->reqType = $reqType;
        $this->reqUrl = $reqUrl;
        $this->reqParam = $reqParam;
        $this->responseResult = $responseResult;
    }


    function getMusinsaRequestObject($apiSubjectName, $apiMethodName, $reqType, $reqUrl, $baseApiUrl
                                    ,$url_parameter, $middleApiUrl, $accessToken, $requestParam
                                    ,$headers) {

    }

    private function save() {

    }

    public function test() {

    }

    function previous_info() {
        $this->getInfo('3','3','3');
        $trace = debug_backtrace();
        $caller = $trace[1];
        $trace = debug_backtrace();
        $caller = $trace[1];

    }

    function getInfo($reqType, $reqUrl, $header) {
//        $this_method_name = method_get_name();
        echo $reqType . $reqUrl . $header;
        $method_name = __FUNCTION__;
        echo $method_name;

        $trace = debug_backtrace();
        $caller = $trace[1];

        echo "Called by {$caller['function']}";
        if (isset($caller['class']))
            echo " in {$caller['class']}";
    }

}

$test_obj = new TodayTest('apiName','apiMethod','reqType','reqUrl','reqParam','responseResult');

//$test_obj->test('asdasdasdasd');

$test_obj->previous_info();