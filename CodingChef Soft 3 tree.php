import 'package:flutter/material.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Appbar',
      theme: ThemeData(primarySwatch: Colors.red),
      home: MyPage(),
    );
  }
}

class MyPage extends StatelessWidget {
  const MyPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Appbar icon menu'),
        centerTitle: true,
        elevation: 0.0,
        actions: <Widget>[ 
          IconButton( icon: Icon(Icons.shopping_bag), onPressed: () { print('Shopping cart button is clicked'); }, ),
          IconButton( icon: Icon(Icons.search), onPressed: () { print('Search button is clicked'); }, ),
        ],
      ),
      drawer: Drawer(
        child: ListView(
          padding: EdgeInsets.zero,
          children: <Widget>[
            UserAccountsDrawerHeader(
              currentAccountPicture: const CircleAvatar( backgroundImage: AssetImage('images/dogecoin2.jpg'), backgroundColor: Colors.white, ),
              otherAccountsPictures: const [ CircleAvatar( backgroundImage: AssetImage('images/dogecoin.jpg'), backgroundColor: Colors.white, ), ],
              accountName: Text('BBANTO'),
              accountEmail: Text('bbanto@bbanto.com'),
              onDetailsPressed: () { print('arrow is clicked'); },
              decoration: BoxDecoration( color: Colors.red[200], borderRadius: const BorderRadius.only( bottomLeft: Radius.circular(40.0), bottomRight: Radius.circular(40.0))),
            ),
            ListTile(
              leading: Icon( Icons.home, color: Colors.grey[850], ),
              title: const Text('Home'),
              onTap: () { print('Home is clicked'); },
              trailing: Icon(Icons.add),
            ),
            ListTile(
              leading: Icon( Icons.settings, color: Colors.grey[850], ),
              title: const Text('Setting'),
              onTap: () { print('Setting is clicked'); },
              trailing: Icon(Icons.add),
            ),
            ListTile(
              leading: Icon( Icons.question_answer, color: Colors.grey[850], ),
              title: const Text('Q&A'),
              onTap: () { print('Q&A is clicked'); },
              trailing: Icon(Icons.add),
            ),
          ],
        ),
      ), // Drawer 
    );
  }
}
