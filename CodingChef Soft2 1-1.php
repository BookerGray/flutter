import 'package:flutter/material.dart';
import 'package:untitled1/OnBoardingPage.dart';

// ■ 1 플러터(flutter) 강의: 순한 맛 시즌 2-1 | 플러터 온보딩 스크린(Flutter Onboarding screen) 만들기
// https://www.freepik.com/search?format=search&query=app%20page
// https://pub.dev/packages/introduction_screen/install
// http://localhost/gbox/bbs/board.php?bo_table=github&wr_id=19
// OnBoardingPage() // 다른페이지에서 불러오는 클래스 위에 커서를 대고 Alt + Enter 누르면 import 파일 상단에 쉽게 만들기 가능

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return const MaterialApp(
      home: OnBoardingPage(),
    );
  }
}

class MyPage extends StatelessWidget {
  const MyPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Main Page'),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.spaceEvenly,
          children: [
            Text('Main Screen', style: TextStyle(fontWeight: FontWeight.bold, fontSize: 24),),
            ElevatedButton(onPressed: (){
              Navigator.of(context).pushReplacement(
                MaterialPageRoute(builder: (context) => OnBoardingPage() ),
              );
            },
            child: Text('Go to onboarding screen'),
            ),
          ],
        ),
      ),
    );
  }
}