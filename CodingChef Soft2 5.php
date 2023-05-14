import "package:flutter/material.dart";

void main() => runApp(const MyApp());

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      theme: ThemeData(
          primarySwatch: Colors.deepPurple,
          textTheme: TextTheme(
              bodyText2: TextStyle(
                fontSize: 30,
                color: Colors.white,
              ),
          ),
      ),
      home: MyPage(),
    );
  }
}

class MyPage extends StatefulWidget {
  const MyPage({Key? key}) : super(key: key);

  @override
  State<MyPage> createState() => _MyPageState();
}

class _MyPageState extends State<MyPage> {
  @override
  Widget build(BuildContext context) {
    final currentWidth = MediaQuery.of(context).size.width;
    return Scaffold(
      body: ResponsiveLayout(
        mobileBody: MobileBody(),
        desktopBody: DesktopBody(),
      ),
    );
  }
}

class DesktopBody extends StatelessWidget {
  const DesktopBody({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('DeskTop'),
      ),
      backgroundColor: Colors.deepPurple[200],
      body: Row(
        children: [
          Expanded(
            child: Column(
              children: [
                Padding(
                  padding: const EdgeInsets.all(16.0),
                  child: Container(
                    height: 100,
                    color: Colors.deepPurple[400],
                  ),
                ),
                Expanded(
                  child: ListView.builder(
                    itemBuilder: (context, index) {
                      return Padding(
                        padding: const EdgeInsets.all(8.0),
                        child: Container(
                          color: Colors.deepPurple[300],
                          height: 120,
                        ),
                      );
                    },
                    itemCount: 10,
                  ),
                ),
              ],
            ),
          ),
          SizedBox(
            width: 300,
            child: Expanded(
              child: ListView.builder(
                itemBuilder: (context, index) {
                  return Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: Container(
                      color: Colors.deepPurple[300],
                      height: 120,
                    ),
                  );
                },
                itemCount: 10,
              ),
            ),
          ),
        ],
      ),
    );
  }
}

class MobileBody extends StatelessWidget {
  const MobileBody({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Mobile'),
      ),
      backgroundColor: Colors.deepPurple[200],
      body: Column(
        children: [
          Text('Width: ' + MediaQuery.of(context).size.width.toStringAsFixed(2)),
          Text('Height: ' + MediaQuery.of(context).size.height.toStringAsFixed(2)),
          Text('Aspect Ratio: ' + MediaQuery.of(context).size.aspectRatio.toStringAsFixed(2)),
          Text('Orientation: ' + MediaQuery.of(context).orientation.toString()),
          Padding(
            padding: const EdgeInsets.all(16.0),
            child: Container(
              height: 100,
              color: Colors.deepPurple[400],
            ),
          ),
          Expanded(
            child: ListView.builder(
              itemBuilder: (context, index){
                return Padding(
                  padding: const EdgeInsets.all(8.0),
                  child: Container(
                    color: Colors.deepPurple[300],
                    height: 120,
                  ),
                );
              },
              itemCount: 10,
            ),
          ),
        ],
      ),
    );
  }
}

class ResponsiveLayout extends StatelessWidget {
  const ResponsiveLayout(
      {Key? key, required this.mobileBody, required this.desktopBody})
      : super(key: key);

  final Widget mobileBody;
  final Widget desktopBody;

  @override
  Widget build(BuildContext context) {
    return LayoutBuilder(builder: (context, constraints) {
      if (constraints.maxWidth < 800) {
        return mobileBody;
      } else {
        return desktopBody;
      }
    });
  }
}