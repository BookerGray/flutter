import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        home: Scaffold(
      appBar: AppBar(
        title: Text('CodingApple 05'),
      ),
      body: ListView(
        children: const [
          Text('Hello~!'),
          Text('Good Afternoon~!'),
          Text('Hello~!'),
          Text('Goodnight~!'),
        ],
      ),
      bottomNavigationBar: const BottomAppBar(),
    ));
  }
}
