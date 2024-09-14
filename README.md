# Project Repository

This repository contains solutions for the following tasks:

1. **Class Inheritance**
2. **Polymorphism**
3. **To-Do Module**

## Task 1: Class Inheritance

### Description
Create classes to represent geometric shapes, including circles and rectangles. Implement methods for area calculation.

### Files
- `Circle.php`
- `Rectangle.php`

### Usage
1. Instantiate the classes and call the methods to calculate areas.

```php
$circle = new Circle(5);
echo $circle->calculateArea();

$rectangle = new Rectangle(4, 6);
echo $rectangle->calculateArea();
```

## Task 4: Polymorphism
Description
Build a set of animal classes that demonstrate polymorphism by overriding a method for making sounds.

### Files
- `Animal.php`
- `Dog.php`
- `Cat.php`
  
### Usage
1. Create instances of Dog and Cat, and call the makeSound method.
```php
$dog = new Dog();
$dog->makeSound(); // Output: Bark

$cat = new Cat();
$cat->makeSound(); // Output: Meow
```

## Task 5: To-Do Module
Description
Develop a simple To-Do CRUD module using Laravel Framework. Vue.js for view rendering is optional.
