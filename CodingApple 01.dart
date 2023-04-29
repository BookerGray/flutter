import 'package:flutter/material.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'CodingApple 01',
      home: MyHomePage(),
    );
  }
}

class MyHomePage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('CodingApple 01'),
      ),
      body: Center(
        child: Column(
            children: const <Widget>[
              Text('Hello'),
              Text('Hello'),
              Text('Hello')
            ]
        ),
      ),
    );
  }
}