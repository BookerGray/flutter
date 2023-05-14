import 'package:flutter/material.dart';
import 'package:untitled1/OnBoardingPage.dart';

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