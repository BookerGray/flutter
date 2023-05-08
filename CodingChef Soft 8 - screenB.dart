import 'package:flutter/material.dart';

class ScreenB extends StatelessWidget {
  const ScreenB({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('ScreenB'),
        backgroundColor: Colors.amber,
      ),
      body: Center(
        child: ElevatedButton(
          child: const Text('Go to Main'),
          onPressed: () {
            Navigator.pop(context);
          },
        ),
      ),
    );
  }
}
