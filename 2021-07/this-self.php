<!DOCTYPE html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type"
          content="text/html; charset=UTF-8" />
    <title>sample page</title>
</head>
<body>
<h1>Hello PHP!</h1>
<div>
    <?php echo "PHP으로 표시한 텍스트입니다."; ?>
    <?php

    /*
     * $this
     * $this는 instance(개별 객체) - 현재 인스턴스의 함수나 변수를 가리킬 때 사용함
     * 만약, $this를 빼먹으면 멤버 변수 (함수) 가 아니라 그 위치에서의 지역 변수 (함수)로 처리됨
     *
     * $self
     * $self는 static 명령이 실행되는 위치의 클래스 자체에 속하는 함수나 변수를 가리킬 때 사용함
     *
     * 객체 접근(->)
     * ->는 객체의 속성에 접근하는 방법임
     *
     */

    class Person {
        private $name;

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    $person_obj = new Person();
    $person_obj->setName("tonight is tooo hot");
    echo $person_obj->getName();


    ?>
</div>
</body>
</html>