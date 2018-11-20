## 1. C++을 이용하여 출력하기

- Hello World를 출력해보자

  ```c
  #include <iostream>
  int main(){
      std::cout << "Hello World!" << std::endl;
  }
  ```

### 실습예제

```c++
동해물과
백두산이
마르고 닳도록
1. cout 하나만 이용해서 위 문구를 출력
2. cout 여러개를 이용해서 위 문구를 출력
```

## 2. 변수이용하기

- 정수형 : int
- 실수형 : double
- 문자형 : char(문자 1개), string(문자열 = 문자여러개)

#### 변수 예제실습

```c++
#include<iostream>
using namespace std;
int main(){
	int a = 5;
	int b = 5;
	int sum = a + b;
	int difference = a - b;
	int multiple = a * b;
	int quotient = a / b;
	int remainder = a % b;
	cout << a << "+" << b << "=" << sum << endl;
	cout << a << "-" << b << "=" << difference << endl;
	cout << a << "*" << b << "=" << multiple << endl;
	cout << a << "/" << b << "=" << quotient << endl;
	cout << a << "%" << b << "=" << remainder << endl;
}
```



#### 자료출력

```c++
cout << "Hello??"
```

#### 자료입력

```c++
int x;
cin >> x;
```

#### 실습예제

1. 두숫자를 입력받아서 그 숫자들의 합을 출력하는 프로그램을 만들어라
2. 세 숫자를 입력받아서 그 숫자들의 평균을 출력하는 프로그램을 만들어라
3. 체중(kg, 실수)와 키(m, 실수)를 입력받아서 체질량 지수(체중/키^2)를 구하여라

####  복습예제

```
나의 이름은 ***입니다.
나이는 **살
몸무게는 **.*kg
키는 ***.*cm 입니다.

위 문구를 cin을 이용해서 나이 몸무게 키 값을 입력받고
cout을 이용해서 출력해라.
```

### 3. If문을 사용해보자

```c++
int main(){
    int n;
    cin >> n;
    cout << "n = " << n << endl;
    if( n % 2 == 0){
        cout << "n is dived into two" << endl;
    }
    if( n % 3 == 0){
        cout << "n is divided into three" << endl;
    } else {
        cout << "n isn't divided into two and three" << endl;
    }
}
```

#### 실습예제

```
두수를 입력받고 두수중 큰 수를 출력하세요
세수를 입력받고 세수중 큰 수를 출력하세요
```

#### 복습예제

```
시험 점수를 입력받아 90~100점은 A
80~90점은 B, 70~79점은 C
60~69점은 D 나머지 점수는 F를 출력하는 프로그램을 작성하세요

cin을 이용해서 시험점수를 입력받는다.
if문을 이용해서 프로그램을 제어한다.
cout을 이용해서 등급을 출력하여라.
```

## 4. 반복문을 사용해보자

### while문 예제

```c++
int main(){
    // 2^0 = 1
    // 2^1 = 2
    // ...
    // 2^6 = 64
    int n;
    cin >> n;
    
    int i = 0;
    int p = 1;
    while(i <= n){
        cout << "2^" << i <<"=" << p <<endl;
        i++;
        p = p * 2;
    }
}
```

### for문 예제

```c++
#include <iostream>
using namespace std;

int main(){
    int n;
    cin >> n;
    for(int i = 0 ; i <= n ; i++){
        for(int j=0; j <= n ; j++){
        	cout << "*";    
        }
        cout << endl;
    }
}
```

### 반복문 실습

```
첫째 줄에는 별1개, 둘째 줄에는 별2개 N번째 줄에는 별 N개를 찍는 문제
ex) N = 5 일떄
*
**
***
****
*****
```

### 반복문 복습예제

```
숫자를 입력받아 그 숫자가 소수인지 판단하는 프로그램을 작성하시오
소수 ) 1과 자기자신만으로 나누어 떨어지는 수

1. cin을 이용해서 숫자를 입력받는다.
2. 반복문을 이용해서 2부터 자기자신전 까지 검사한다.
3. if문을 이용해서 나누어 떨어지는지 검사한다.
```

## 5. 배열을 사용해보자

```c++
#include <iostream>
using namespace std;

int main(){
    int n;
    int arr[1000];
    cin >> n;
    
    for(int i = 0; i < n ; i++){
        cin >> arr[i];
    }
    int count = 0;
    for(int i = 0; i < n ; i++){
        if(arr[i]%2 == 0){
            count++;
        }
    }
    cout << "짝수의 개수 = " << count << endl;
}
```

### 실습예제

```
성호가 가르치는 아이폰 앱 개발 수업의 수강생은 원섭, 세희, 상근, 숭, 강수 총5명이다.

어제 이 수업의 기말고사가 있었고, 성호는 지금 학생들의 기말고사 시험지를 채점하고 있다.
기말고사 점수가 40점 이상인 학생들은 그 점수 그대로 자신의 정석이 된다.
하지만 40점 미만인 학생들은 보충학습을 듣는 조건을 수락하면 40점을 받게 된다.
보충학습은 거부할 수 없기 때문에 40점 미만인 학생들은 항상 40점을 받게 된다.

학생 5명의 점수가 주어졌을때, 평균 점수를 구하는 프로그램을 작성하시오.
```

## 반복문을 연습해보자.
https://www.acmicpc.net/step/3

## 함수를 연습해보자.
https://www.acmicpc.net/step/5
