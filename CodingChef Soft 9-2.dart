import 'package:flutter/material.dart';

void main() {
  String name = 'Horo';
  print(name);
  print("Hi $name, What's up?");

  int addNumber(int num1, int num2) {
    return num1 + num2;
  }

  List<dynamic> number = [];
  number.add(2);
  number.add('test');
  number.add(7.4);
  number.add(addNumber(999, 1));
  number.add(true);
  print(number);

  List<int> numeric = [];
  numeric.add(5);
  numeric.add(1);
  printNumber(numeric);

  List<String> names = [];
  names.addAll(['Horo', 'Nora', 'Elsa']);
  print(names);
}

void printNumber(List<dynamic> a) {
  print(a);
}
