import 'package:flutter/material.dart';

class ScreenC extends StatelessWidget {
  const ScreenC({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('ScreenC'),
        backgroundColor: Colors.red,
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
