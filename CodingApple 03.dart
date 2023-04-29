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
            actions: const [Icon(Icons.star), Icon(Icons.star)],
            leading: const Icon(Icons.star),
            title: const Text("CodingApple 03")),
        body: const SizedBox(
          child: Text(
            'Hello, world!',
            style: TextStyle(fontWeight: FontWeight.w700),
          ),
        ),
      ),
    );
  }
}
