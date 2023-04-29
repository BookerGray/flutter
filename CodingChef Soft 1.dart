import 'package:flutter/material.dart';

void main() => runApp(MyApp()); // runApp 함수의 괄호안에는 위젯 알규먼트가 무조건 들어온다.

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'First App',
      theme: ThemeData(primarySwatch: Colors.deepOrange),
      home: MyHomePage(),
    );
  }
}

class MyHomePage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('CodingChef Soft 1'),
        centerTitle: true,
        backgroundColor: Colors.redAccent,
        elevation: 0.0, // 앱바 아래 쉐도우 기능 삭제
      ),
      body: Center(
        child: Column(
          children: const [
            Text('Hello'),
            Text('Hello'),
            Text('Hello'),
          ],
        ),
      ),
    );
  }
}
