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
~~~~
CREATE TABLE `powerpoint` (
  `no` int(10) NOT NULL,
  `lecture_no` int(10) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~~
 * cources table
~~~~
CREATE TABLE `cources` (
  `no` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `lecture_no` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~~
 * member table
~~~~
CREATE TABLE `member` (
  `no` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `grade` int(10) NOT NULL,
  `major` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` text NOT NULL,
  `etc` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~~
## 4. ERDiagram
  ![Alt text](/ERD.png)
