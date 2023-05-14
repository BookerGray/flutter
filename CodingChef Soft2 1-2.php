import 'package:flutter/material.dart';
import 'package:introduction_screen/introduction_screen.dart';
import 'package:untitled1/main.dart';

class OnBoardingPage extends StatelessWidget {
  const OnBoardingPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return IntroductionScreen(
      done: const Text('done'),
      onDone: () {
        Navigator.of(context).pushReplacement(
          MaterialPageRoute(builder: (context) => const MyPage()),
        );
      },
      curve: Curves.bounceInOut,
      next: const Icon(Icons.arrow_forward),
      showSkipButton: true,
      skip: const Text('skip'),
      dotsDecorator: DotsDecorator(
        color: Colors.cyan,
        size: Size(10,10),
        activeSize: Size(32,10),
        activeShape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(24)
        ),
        activeColor: Colors.red,
      ),
      pages: [
        PageViewModel(
            title: 'Welcome to my app',
            body: 'This is the first page',
            image: Image.asset('images/one.png'),
            decoration: getPageDecoration()
        ),
        PageViewModel(
            title: 'Welcome to my app',
            body: 'This is the second page',
            image: Image.asset('images/two.png'),
            decoration: getPageDecoration()
        ),
        PageViewModel(
            title: 'Welcome to my app',
            body: 'This is the third page',
            image: Image.asset('images/three.png'),
            decoration: getPageDecoration()
        ),
      ],
    );
  }

  PageDecoration getPageDecoration(){
    return const PageDecoration(
        titleTextStyle: TextStyle(
            fontSize: 28,
            fontWeight: FontWeight.bold
        ),
        bodyTextStyle: TextStyle(
            fontSize: 18,
            color: Colors.blue
        ),
        imagePadding: EdgeInsets.only(top: 40),
        pageColor: Colors.orange
    );
  }
}