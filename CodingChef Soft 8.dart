import 'package:flutter/material.dart';
import 'package:untitled1/screenB.dart'; // put local folder name as the same folder with main.dart
import 'package:untitled1/screenC.dart';

void main() => runApp(const MyApp());

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      initialRoute: '/',
      routes: {
        '/': (BuildContext context) => const HomeScreen(),
        '/b': (BuildContext context) => const ScreenB(),
        '/c': (BuildContext context) => const ScreenC(),
      },
    );
  }
}

class HomeScreen extends StatelessWidget {
  const HomeScreen({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('Home Screen')),
      body: SafeArea(
        child: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              ElevatedButton(
                onPressed: () {
                  Navigator.pushNamed(context, '/b');
                },
                child: const Text('Go to ScreenB'),
              ),
              ElevatedButton(
                onPressed: () {
                  Navigator.pushNamed(context, '/c');
                },
                child: const Text('Go to ScreenC'),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
