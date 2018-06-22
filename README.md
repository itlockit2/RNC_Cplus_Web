동아리 수업 관리 홈페이지
=============

## 1. 제작 동기 및 소개

동아리에서 1학년 신입생들과 2학년 회원들을 위해 진행하고 있습니다.
C++ 수업을 진행하면서 수업에 관련된 자료들을 쉽게 공유하기 위해 홈페이지를 만들었습니다.
홈페이지 이름은 RNC C++ Coding입니다. 동아리 회원들은 자신이 들은 수업에 관한 정보(ppt, example code)를 
언제든지 다시 볼수 있습니다. 또한 댓글 기능을 통해 해당 수업에 대한 의견을 남길수 있고, 기록을 남기고 싶지 않은 
동아리 회원들을 위해 이메일로도 문의할 수 있게 구현했습니다.

## Wep page Address
 * http://168.131.151.207:8080/cplus

## Develop Environment 
  * SublimeText3
  * PHP
  * HTML
  * CSS(Bootstrap)

## 2. 구현기능
 * 현재 활동중인 회원현황 조회
 * 강의 자료 확인
   * 파워포인트 자료 다운로드
   * 예제코드 확인
 * 프로젝트 관련파일 공유
 * 댓글 기능
   * DISQUS 사용
 * 이메일 문의 기능
   * TAWK 사용
 * 디자인
   * Bootstrap3
   
## 3. 테이블 구성
 * Lecture Table 
   * 수업에 관한 정보가 담겨져 있는 테이블 입니다.
   * grade : 어떤 학년을 위한 수업인지 학년에 대한 정보가 담겨 있습니다.
   * lecture_no : 강의테이블을 구별하는 lecture_no 입니다.
   * title : 강의 제목이 담겨져 있습니다.
   * rink : 해당 강의 홈페이지의 위치가 담겨져 있습니다.
      
   ![Alt text](/lecture.png)
   
~~~ 
CREATE TABLE `lecture` (
`no` int(10) NOT NULL,
`grade` int(10) NOT NULL,
`lecture_no` int(10) NOT NULL,
`title` text NOT NULL,
`rink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~
 * Code Table
   * 수업에 쓰이는 예제코드에 대한 정보가 담겨져있는 테이블입니다.
   * lecture_no : Lecture 테이블의 lecture_no을 외래키로 참조합니다.
   * title : 예제코드 제목이 담겨져 있습니다.
   * contents : 예제코드이 어떤 내용을 가지고 있는지에 대한 정보가 담겨져 있습니다.
   * rink : 예제코드의 위치가 담겨져 있습니다.
   * image_file : 예제코드와 관련되어 있는 이미지파일에 대한 정보가 담겨져 있습니다.
      
   ![Alt text](/code.png)
   
~~~
CREATE TABLE `code` (
  `no` int(10) NOT NULL,
  `lecture_no` int(10) NOT NULL,
  `title` text NOT NULL,
  `rink` text NOT NULL,
  `contents` text,
  `image_file` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~
 * powerpoint table
   * 수업에 쓰이는 powerPoint에 대한 정보가 담겨져있는 테이블입니다.
   * lecture_no : Lecture 테이블의 lecture_no을 외래키로 참조합니다.
   * link : 해당 파워포인트의 주소가 담겨져 있습니다.
      
   ![Alt text](/powerpoint.png)
   
~~~~
CREATE TABLE `powerpoint` (
  `no` int(10) NOT NULL,
  `lecture_no` int(10) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~~
 * member table
   * 동아리 회원에 대한 정보가 담겨져 있는 테이블입니다.
   * id : 회원의 학번에 대한 정보가 담겨져 있습니다.
   * grade : 회원의 학년에 대한 정보가 담겨져 있습니다.
   * major : 회원의 전공에 대한 정보가 담겨져 있습니다.
   * name : 회원의 이름에 대한 정보가 담겨져 있습니다.
   * etc : 부가 정보에 대한 정보가 담겨져 있습니다.
      
   ![Alt text](/member.png)
   
~~~~
CREATE TABLE `member` (
  `no` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `grade` int(10) NOT NULL,
  `major` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `etc` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~~
 * cources table
   * 해당 수업을 듣는 학생에 대한 정보가 담겨져있는 테이블입니다.
   * id : Member 테이블의 id를 외래키로 참조합니다.
   * lecture_no : Lecture 테이블의 lecture_no을 외래키로 참조합니다.
   * name : 학생의 이름이 담겨져 있습니다.
   
   ![Alt text](/cources.png)
   
~~~~
CREATE TABLE `cources` (
  `no` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `lecture_no` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~~
## 4. ERDiagram
  ![Alt text](/ERD.png)
  
## 5. 앞으로 해야할 점

* File Table 구축
  * 프로젝트 file에 대한 테이블을 구축하고 그 소유자에 대한 정보를 Member Table에 대한 정보를 이용하여 참조한다.
  현재가지고 있는 프로젝트 파일이 작년 프로젝트 파일이라 소유자를 지정하지 못하였다. 따라서 Team Table을 구축하여 
  작년 Team에 대한 정보를 담고 그 정보를 이용하여 프로젝트 파일 테이블을 구축할 예정이다.
* 코드 리팩토링
  * 현재 코드들이 리팩토링 되어있지 않아 후에 데이터가 많아지면 문제가 많이 생긴다. 지금 가장큰 문제중 하나가 
  네비게이션 바에 메뉴를 하나 추가하면 10개가 넘는 php파일에서 네이베이션 바 부분에 코드를 일일이 삽입해야한다는 점이다.
  따라서 이부분에 대한 데이터베이스를 구축하여 메뉴를 늘려도 자동으로 나머지 php파일에 일괄적용 될 수 있도록 해야한다.
* 익명 게시판 추가
  * 현재 동아리 회원들이 베타 버전을 사용해보고 동아리 회원들의 의견을 들을 수 있는 게시판을 하나 만들어 달라는 요청이 들어왔다.
  최대한 다양한 의견을 편견 없이 들을 수 있도록 익명성을 보장하는 게시판을 만들 예정이다. 이를 위한 데이터베이스도 구축을 하고
  동아리 회원들만 쓸수 있도록 Member Table과 연동할 예정이다.
