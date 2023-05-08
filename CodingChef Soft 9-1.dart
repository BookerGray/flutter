import 'package:flutter/material.dart';

// ■ 24 | 콜렉션(Collection)과 제네릭(Generic)
// Collection: 데이터들을 모아서 가지고 있는 자료구조
// Generic: Collection이 가지고 있는 데이터들의 데이터 타입을 지정

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Builder(
        builder: (context) => Center(
          child: ElevatedButton(
            child: Text('Go to ScreenA'),
            onPressed: () => Navigator.push(
                context, MaterialPageRoute(builder: (context) => ScreenA())),
          ),
        ),
      ),
    );
  }
}

class ScreenA extends StatelessWidget {
  const ScreenA({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Center(
        child: ElevatedButton(
          child: Text('Hi, there!'),
          onPressed: () => Navigator.pop(context),
        ),
      ),
    );
  }
}
