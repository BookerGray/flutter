class MyCard extends StatelessWidget {
  const MyCard({Key? key}) : super(key: key);
 
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.amber[600],
      appBar: AppBar(
        title: const Text('CodingChef Soft 2'),
        backgroundColor: Colors.amber[800],
        centerTitle: true,
        elevation: 0.0, // 앱바 아래 쉐도우 기능 삭제
      ),
      body: Padding(
        padding: const EdgeInsets.fromLTRB(10, 30, 0, 0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: <Widget>[
            const Center(child: CircleAvatar(backgroundImage: AssetImage('images/dogecoin.jpg'),radius: 50,),),
            Divider(height: 50,color: Colors.grey[850],thickness: 0.5,endIndent: 30,),
            const Text('NAME',style: TextStyle(color: Colors.white,letterSpacing: 2.0,),),
            const SizedBox(height: 10,),
            const Text('BBANTO',style: TextStyle(color: Colors.white,letterSpacing: 2.0,fontSize: 28,fontWeight: FontWeight.bold,),),
            const SizedBox(height: 30,),
            const Text('BBANTO POWER LEVEL',style: TextStyle(color: Colors.white,letterSpacing: 2.0,),),
            const SizedBox(height: 10,),
            const Text('14',style: TextStyle(color: Colors.white,letterSpacing: 2.0,fontSize: 28,fontWeight: FontWeight.bold,),),
            const SizedBox(height: 30,),
            Row(
              children: const <Widget>[
                Icon(Icons.check_circle_outline),
                SizedBox(width: 10.0,),
                Text('Using lightsaber',style: TextStyle(fontSize: 16, letterSpacing: 1.0),),
              ],
            ),
            Row(
              children: const <Widget>[
                Icon(Icons.check_circle_outline),
                SizedBox(width: 10.0,),
                Text('Face hero Tatoo',style: TextStyle(fontSize: 16, letterSpacing: 1.0),),
              ],
            ),
            Row(
              children: const <Widget>[
                Icon(Icons.check_circle_outline),
                SizedBox(width: 10.0,),
                Text('Fire Flames',style: TextStyle(fontSize: 16, letterSpacing: 1.0),),
              ],
            ),
            const SizedBox(height: 30,),
            Center(child: CircleAvatar(radius: 50,backgroundColor: Colors.amber[700],),
            )
          ],
        ), // child
      ), // Padding
    ); // Scaffold
  }
}